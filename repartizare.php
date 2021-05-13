<!DOCTYPE html> 
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="JS/repartizare.js"></script>
	<title>Repartizare</title>
	<style>

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 19px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .btn {background-color: #F6DBA2;}

    .btn {
      background-color: #A07855FF;
      border: none;
      color: black;
      padding: 12px 43px;
      font-size: 20px;
      cursor: pointer;
      margin-left:10px;
      border-radius:7px;
    }

    .button-file1 {
      position: absolute;
      left: 550px;
      top: 150px;
      width: 250px;
      display:block;
    }
    .button-file2 {
      position: absolute;
      left: 550px;
      top: 200px;
      width: 135px;
      height: 30px;
    }
    table {
      position:absolute;
      left: 165px;
      top: 270px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 80%;
      border: 1px solid #ddd;
      display:none;
      
    }

    th, td {
      text-align: left;
      padding: 23px;
    }

    tr:nth-child(even){background-color: #f2f2f2}


    .form {
      position:absolute;
      left: 430px;
      top: 280px;
      width: 300px;
      height: 250px;
      padding: 50px;
      border-radius: 1.5em; 
      box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
      display:block;
      
    }



  </style>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
    {
        func();
    }
    function func(){
      /*
      $tmpName = $_FILES['csv']['tmp_name'];
      $csvAsArray = array_map('str_getcsv', file($tmpName));
      foreach($csvAsArray as $value)
        foreach($value as $col)
          echo $col;
      */
      $tmpName = $_FILES['csv']['tmp_name'];
      $studenti_file = array_map('str_getcsv', file($tmpName));
      //$studenti_file=array();
      /*
      foreach($stud as $row){
        $rows=array();
        foreach($row as $col)
          array_push($rows,$col);
        array_push($studenti_file,$rows);
      }*/
      $link = mysqli_connect("localhost", "root", "", "camine");
    
      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      
      //aflu numarul de camine
      $query = "SELECT COUNT(ID_Camin) FROM camin";
      $result = mysqli_query($link,$query);
      $rez=mysqli_fetch_array($result);
      //echo gettype($rez);
      $nr_camine=(int)$rez[0]; 

      //iau toti studentii din baza de date
      $query = "SELECT * FROM date_generale dg,date_personale dp, contact c WHERE dg.ID_Student = dp.ID_Student and dg.ID_Student = c.ID_Student";
      $result = mysqli_query($link,$query);
      $studenti_bd = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if(!$studenti_bd) {
        $studenti_bd=[];
      }
      //golesc tabelele pt noii studenti
      //
      $query1 = "DELETE FROM date_personale";
      $query2 = "DELETE FROM date_generale";
      $query3 = "DELETE FROM contact";
      if(mysqli_query($link, $query1) && mysqli_query($link, $query2) && mysqli_query($link, $query3)){
        //
      } else{
          echo "ERROR: Nu s-au putut golii tabelele $query1. " . mysqli_error($link), PHP_EOL;
      }
      
      $camere_pe_etaj = 3;
      $etaje_pe_camin = 5;
      $stud_in_camera = 2;
      $max_stud=$nr_camine * $etaje_pe_camin * $camere_pe_etaj * $stud_in_camera;
      //print_r($studenti_file);
      //sortez dupa medie
      array_multisort(array_column($studenti_file, 2), SORT_DESC, $studenti_file);
      //print_r($studenti_file);
      //loop-ul de adaugare in camin

      
      $current_stud_id=0;
      $number_of_stud=count($studenti_file)-1;

      for($cam=0;$cam<$nr_camine;$cam++){
        $nr_camin_curent=$cam;
        for($e=0;$e<$etaje_pe_camin;$e++){
          $nr_etaj_curent=$e;
          for($c=1;$c<=$camere_pe_etaj;$c++){
            $nr_camera_curenta = $e*$camere_pe_etaj+$c;
            for($s=1;$s<=$stud_in_camera;$s++){
              //date_generale
              $nume    = $studenti_file[$current_stud_id][0];
              $prenume = $studenti_file[$current_stud_id][1];
              $medie   = $studenti_file[$current_stud_id][2];
              $uni     = $studenti_file[$current_stud_id][3];
              $fac     = $studenti_file[$current_stud_id][4];
              $spec    = $studenti_file[$current_stud_id][5];
              //contact
              $tara  = $studenti_file[$current_stud_id][6];
              $judet = $studenti_file[$current_stud_id][7];
              $loc   = $studenti_file[$current_stud_id][8];
              $adr   = $studenti_file[$current_stud_id][9];
              $email = $studenti_file[$current_stud_id][10];
              $tel   = $studenti_file[$current_stud_id][11];
              //date_personale
              $cnp    = $studenti_file[$current_stud_id][12];
              $serie  = $studenti_file[$current_stud_id][13];
              $nr_mat = $studenti_file[$current_stud_id][14];
              $gen    = $studenti_file[$current_stud_id][15];
              $camera_nr = $nr_camera_curenta;
              $camin_nr  = $nr_camin_curent;

              $query1="INSERT INTO date_generale (Nume,Prenume,Medie,Universitate,Facultate,Specializare) 
                  VALUES('$nume','$prenume','$medie','$uni','$fac','$spec');";
              $query2="INSERT INTO contact (Tara,Judet,Localitate,Adresa,Email,Telefon) 
                  VALUES('$tara','$judet','$loc','$adr','$email','$tel');";
              $query3="INSERT INTO date_personale (CNP,Serie,Nr_matricol,Gen,Nr_camera,Nr_camin) 
                  VALUES('$cnp','$serie','$nr_mat','$gen','$camera_nr','$camin_nr');";
              if(mysqli_query($link, $query1) && mysqli_query($link, $query2) && mysqli_query($link, $query3)){
                //
              } else{
                  echo "ERROR: Nu s-au putut introduce studentul $query1. " . mysqli_error($link), PHP_EOL;
              }
              $current_stud_id++;
              if($current_stud_id>$number_of_stud){
                $c   = $nr_camine+1;
                $e   = $etaje_pe_camin+1;
                $cam = $camere_pe_etaj+1;
              }
            }
            
          }
        }
      }
      
      
      /*
        if(mysqli_query($link, $sql)){
            //echo $sql;
        } else{
            echo "ERROR: Nu s-au putut introduce studentii $sql. " . mysqli_error($link);
        }


        $query  = "SELECT ID_Camin FROM camin ORDER BY ID_Camin DESC";
        $result = mysqli_query($link,$query);
        $rez=mysqli_fetch_array($result);
        $current_id=$rez["ID_Camin"];
      */
    }
/*


      $target_dir = "**the path u like**";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "txt" ) {
          echo "Sorry, only txt files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }
      echo $target_file;
    }

*/
  
  
?>

</head>
<body>
<div class="dropdown">
		<button class="btn"><i class="fa fa-bars"></i></button>
		<div class="dropdown-content">
			<a href="#">Repartizare studenți</a>
			<a href="#">Vizualizare listă studenți</a>
			<a href="#">Deconectare</a>
		</div>
</div>

<form action="repartizare.php" method="post" enctype="multipart/form-data">
	<input type="file" name="csv" value="" />
	<input type="submit" name="submit" value="Save" /></form>
<!--- 
<form action="repartizare.php" method="post" enctype="multipart/form-data">
  <div>
  <p><input class="button-file1" type="file" name="csv" value="" /></p>
  <p><input class="button-file2" type="submit" name="submit" value="Save" /></p>
  </div>
</form>-->

<table id="display">
    <tr>
      <th>Nume</th>
      <th>Prenume</th>
      <th>Facultatea</th>
      <th>Specializarea</th>
      <th>Media</th>
    </tr>
</table>

<div class="form" id="form" >
  <div>Nume: <input id="fname" type="text"  name="fname" /></div><br>
  <div>Prenume: <input id="lname" type="text" name="lname" /></div><br>
  <div>Facultatea: <input id="faculty" type="text"  name="faculty" /></div><br>
  <div>Specializarea: <input id="specialization" type="text"  name="specialization" /></div><br>
  <div>Media: <input id="average" type="text"  name="average" /><br><br>
  <input id="send"  type="submit"  value ="Adăugare studenți" onclick="myFunction()" />
  <input type="submit" id="add" value ="+" onclick= "ManualAdd()"  />
</div> 






</body>
</html
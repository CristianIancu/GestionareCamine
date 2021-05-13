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
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['plus']))
    {
        func();
    }
    function func()
    {
      $link = mysqli_connect("localhost", "root", "", "camine");
    
      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      // Escape user inputs for security
        $camin_nume = mysqli_real_escape_string($link, $_REQUEST['camin_nume']);
        $adresa = mysqli_real_escape_string($link, $_REQUEST['adresa']);
        $localitate = mysqli_real_escape_string($link, $_REQUEST['localitate']);
        $judet = mysqli_real_escape_string($link, $_REQUEST['judet']);
        $locuri_max = mysqli_real_escape_string($link, $_REQUEST['locuri_max']); 
        $gen=mysqli_real_escape_string($link, $_REQUEST['gen']);      
        $long=45.75009155273438;
        $lat=21.23913764953613;
        $locuri_min=0;
        

        

        $camere_pe_etaj=3;
        $etaje_pe_camin=5;
        $stud_pe_camera_min=0;
        $stud_pe_camera_max=4;

        //
        //
        
        //adaugarea caminului
        $sql = "INSERT INTO camin (Nume, Adresa, Localitate, Judet,Latitudine, Longitudine,Locuri_libere,Locuri_max)
        VALUES ('$camin_nume', '$adresa', '$localitate','$judet','$long','$lat','$locuri_min',$locuri_max)";
        if(mysqli_query($link, $sql)){
            //echo $sql;
        } else{
            echo "ERROR: Nu s-a putut introduce caminul $sql. " . mysqli_error($link);
        }
        
        $query  = "SELECT ID_Camin FROM camin ORDER BY ID_Camin DESC";
        $result = mysqli_query($link,$query);
        $rez=mysqli_fetch_array($result);
        $current_id=$rez["ID_Camin"];
        //echo $current_id.'<br>';

        //adaugarea camerelor din camin
        for($i=0;$i<$etaje_pe_camin;$i++){
          for($j=0;$j<$camere_pe_etaj;$j++){
            $nr_camera_curenta = $i*$camere_pe_etaj+$j;
            $sqll="INSERT INTO camera (ID_Camin,Etaj,Nr_camera,Locuri_ocupate,Locuri_max,Gen)
                  VALUES ('$current_id','$i','$nr_camera_curenta','$stud_pe_camera_min','$stud_pe_camera_max','$gen')";
            if(mysqli_query($link, $sqll)){
                //echo $sqll;
            } else{
                echo "ERROR: Nu s-a putut introduce caminul $sqll. " . mysqli_error($link);
            }
          }
        }


        // Close connection

        mysqli_close($link);
      }
    
    
    
    
    // Attempt insert query execution
    
    
    
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

<form action="repartizareCamin.php" method="post">
  <div class="form" id="form" >
    <div>Nume: <input id="fname" type="text"  name="camin_nume" /></div><br>
    <div>Adresa: <input id="lname" type="text" name="adresa" /></div><br>
    <div>Localitate: <input id="faculty" type="text"  name="localitate" /></div><br>
    <div>Judet: <input id="specialization" type="text"  name="judet" /></div><br>
    <div>Locuri totale: <input id="average" type="text"  name="locuri_max" /><br>
    <div>Gen: <input id="gen" type="text"  name="gen" /></div><br><br>

    <input id="send"  type="submit"  value ="Adăugare studenți" onclick="myFunction();" />
    <input type="submit" id="add" value ="+" name="plus"/>
  </div> 
</post>

</body>
</html>
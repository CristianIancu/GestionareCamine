<?php
  require_once ('component_tabel.php');
?>
<!DOCTYPE html> 
<html>

<head>
<meta charset="UTF-8">
  <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<link href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" rel="stylesheet" />

<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!--<script src="JS/repartizare.js"></script>-->
	<link rel="stylesheet" href="style1.css">
	<title>Repartizare</title>
	<script>
    function Upload() {
      //alert("Tapa"); 
      var form = document.getElementById('form');
      var table = document.getElementById('display');
      table.style.display = "block";
      form.style.display = "none";
    }
  </script>
	<style>
              img{
              display: block;
              margin: auto;
              width: 100%;
              height: auto;
            }

            #login-button{
              cursor: pointer;
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              padding: 30px;
              margin: auto;
              width: 100px;
              height: 100px;
              border-radius: 50%;
              background: rgba(3,3,3,.8);
              overflow: hidden;
              opacity: 0.4;
              box-shadow: 10px 10px 30px #000;}

            /* Login container */
            .container{
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              margin: auto;
              width: 500px;
              height: 700px;
              border-radius: 5px;
              background: rgba(3,3,3,0.60);
              box-shadow: 1px 1px 50px #000;
              display: block;
            }

            /* Heading */
            h1{
              font-family: 'Open Sans Condensed', sans-serif;
              position: relative;
              margin-top: 0px;
              text-align: center;
              font-size: 40px;
              color: #ddd;
              text-shadow: 3px 3px 10px #000;
            }

            /* Inputs */
            a,
            input{
              font-family: 'Open Sans Condensed', sans-serif;
              text-decoration: none;
              position: relative;
              width: 95%;
              display: block;
              margin: 7px auto;
              font-size: 17px;
              color: #fff;
              padding: 8px;
              border-radius: 6px;
              border: none;
              background: rgba(3,3,3,.1);
              -webkit-transition: all 2s ease-in-out;
              -moz-transition: all 2s ease-in-out;
              -o-transition: all 2s ease-in-out;
              transition: all 0.2s ease-in-out;
            }

            input:focus{
              outline: none;
              box-shadow: 3px 3px 10px #333;
              background: rgba(3,3,3,.18);
            }

            /* Placeholders */
            ::-webkit-input-placeholder {
              color: #ddd;  }
            :-moz-placeholder { /* Firefox 18- */
              color: red;  }
            ::-moz-placeholder {  /* Firefox 19+ */
              color: red;  }
            :-ms-input-placeholder {  
              color: #333;  }

            /* Link */
            a{
              font-family: 'Open Sans Condensed', sans-serif;
              text-align: center;
              padding: 4px 8px;
              background: rgba(107,255,3,0.3);
            }

            a:hover{
              opacity: 0.7;
            }


            .form{
              max-width: 40em;
              margin: 0 auto;
              position: relative;
              display: flex;
              flex-flow: row wrap;
              justify-content: space-between;
              align-items: flex-end;
            }
            .form .field {
              width: 100%;
              margin: 0 0 0 0;
            }
            @media screen and (min-width: 40em) {
              .form .field.half {
                width: calc(50% - 1px);
              }
              .form .field.third {
                width: calc(33% - 1px);
              }
            }
            .orange-btn{
              background: rgba(87,198,255,.5);
            }
            #map {
              width: 100%; height: 100%; 
              -webkit-opacity: 0.7;
              -moz-opacity: 0.7;
              -o-opacity: 0.7;
              -ms-opacity: 0.7;
              opacity: 0.7;
              filter: grayscale(85%);
              position:fixed;

            }

            .overlay {     
              width: 100px;
              position: absolute;
              top: 0;
              left: 0;
              bottom: 0;      
              background-color: rgba(255, 255, 255, 0.1);    
            }



            a,
            a:hover,
            a:focus {
                color: inherit;
                text-decoration: none;
                transition: all 0.3s;
            }

            .btn.btn-primary {
              background: #866ec7;
              border-color: #866ec7;
              border-radius: 50%;
              width:40px;
              height:40px;  
            }
            .btn.btn-primary:hover, .btn.btn-primary:focus {
              background: #866ec7 !important;
                border-color: #866ec7 !important; 
            }


            .wrapper {
                display: flex;
                width: 100%;
                align-items: stretch;
            }



            #sidebar {
                min-width: 250px;
                max-width: 250px;
                background: #866ec7;
                color: #fff;
                transition: all 0.3s;
            }

            #sidebar.active {
                margin-left: -250px;
            }


            #sidebar ul.components {
                padding: 5px 10px;
                
            }

            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }

            #sidebar ul li a {
                padding: 10px;
                font-size: 1.1em;
                display: block;
            }

            #sidebar ul li a:hover {
                color: #7386D5;
            }

            .navbar{
              background-color:#3b5998;
              overflow:hidden;
              height:63px;
            }

            .navbar a{
              float:left;
              display:block;
              color:#f2f2f2;
              text-align:center;
              padding:14px 16px;
              text-decoration:none;
              font-size:17px;
            }

            .navbar ul{
              margin:8px 0 0 0;
              list-style:none;
            }

            .navbar a:hover{
              background-color:#ddd;
              color:#000;
            }

            .side-nav{
              height:100%;
              width:0;
              position:fixed;
              z-index:1;
              top:0;
              left:0;
              background-color:#111;
              opacity:0.9;
              overflow-x:hidden;
              padding-top:60px;
              transition:0.5s;
            }

            .side-nav a{
              padding:10px 10px 10px 30px;
              text-decoration:none;
              font-size:22px;
              color:#ccc;
              display:block;
              transition:0.3s;
            }

            .side-nav a:hover{
              color:#fff;
            }




            a[data-toggle="collapse"] {
                position: relative;
            }

            ul.CTAs {
                padding: 20px;
            }

            ul.CTAs a {
                text-align: center;
                font-size: 0.9em !important;
                display: block;
                border-radius: 5px;
                margin-bottom: 5px;
            }

            /* ---------------------------------------------------
                CONTENT STYLE
            ----------------------------------------------------- */

            #content {
                width: 100%;
                padding: 20px;
                min-height: 100vh;
                transition: all 0.3s;
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



            @media(max-width:568px){
              .navbar-nav{display:none}
            }

            @media(min-width:568px){
              .open-slide{display:none}
            }

            .upload-btn-wrapper {
              margin-top: 10px;
              margin-left: 0px;
              overflow: hidden;
              display: inline-block;
            }

            .btn {
              border: 2px solid gray;
              color: white;
              background-color: rgba(3,3,3,0.60);
              padding: 8px 20px;
              border-radius: 8px;
              font-size: 20px;
              font-weight: bold;
            }

            .upload-btn-wrapper input[type=file] {
              font-size: 100px;
              position: absolute;
              left: 0;
              top: 0;
              opacity: 0;
            }
            .wrap {
              display: flex;
              align-items: center;
              justify-content: center;
              margin-left: 100px;
              margin-top: 10px;
            }

            .button {
              width: 300px;
              height: 45px;
              font-family: 'Roboto', sans-serif;
              font-size: 11px;
              text-transform: uppercase;
              letter-spacing: 2.5px;
              font-weight: 500;
              color: #000;
              background-color: #fff;
              border: none;
              border-radius: 45px;
              box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease 0s;
              cursor: pointer;
              outline: none;
              }

            .button:hover {
              background-color: #B7E1D5;
              box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
              color: #fff;
              transform: translateY(-7px);
            }

          </style>
          <script type="text/javascript">
              function showHideRow(row) {
                  $("#" + row).toggle();
              }
          </script>
        
          <style>
              body {
                  margin: 0 auto;
                  padding: 0px;
                  text-align: center;
                  width: 100%;
                  font-family: "Myriad Pro", 
                      "Helvetica Neue", Helvetica, 
                      Arial, Sans-Serif;
              background-image:url("assets/images/background.jpg");
              background-repeat:no-repeat;
              background-size:100% 100%;
              }
        
              #wrapper {
                  margin: 0 auto;
                  padding: 0px;
                  text-align: center;
                  width: 995px;
              }
        
              #wrapper h1 {
                  margin-top: 50px;
                  font-size: 45px;
                  color: #585858;
              }
        
              #wrapper h1 p {
                  font-size: 20px;
              }
        
              .table_detail {
                  width: 500px;
                  text-align: left;
                  border-collapse: collapse;
                  color: #2E2E2E;
                  border: #A4A4A4;
              }
        
              .table_detail tr:hover {
                  background-color: #F2F2F2;
              }
        
              .table_detail .hidden_row {
                  display: none;
              }
          .overlay_afisare {     
          width: 900px;
          position: absolute;
          top: 100px;
          left: 190px;
          bottom: 30px;      
          background-color: rgba(255, 255, 255, 0.1);    
        }
    </style>

  <?php
    $addToTable = false;
    $studenti_file=[];
      if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
      {
        echo "TRAIESC";
          func();
          $addToTable = true;
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
        if($tmpName){
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
          
          //afisarea studentilor in tabel
          
          
          
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
<div id="map"></div>


<!--
<table class="table_detail" id="display">
  <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Universitate</th>
    <th>Facultatea</th>
    <th>Specializarea</th>
    <th>Medie</th>
    <th>CNP</th>
    <th>Nr. matricol</th>
  </tr>
	<?php/*
    if($addToTable == true){
      for($st=0;$st<count($studenti_file);$st++){
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
        component_tabel($nume,$prenume,$uni,$fac,$spec,$medie,$cnp,$nr_mat,$serie,$gen,$adr,$loc,$judet,$tara,$email,$tel,$st+1);
      }
      echo "NU-I binie";
      echo '<script type="text/javascript">','Upload();','</script>';

    }*/
  ?>
</table>-->


<!--
  <div>
    <p><input class="button-file1" id="input-file"  type="file" name="file" onchange="Upload()" /></p>
    <p><input class="button-file2" type="submit" name="upload" value="Repartizare" /></p>
  </div>-->
<div class="container" id='form' >
  <div class="upload-btn-wrapper">
    <form class='nimic' action="camin.php" method="post" enctype="multipart/form-data">
      <button type="submit" name="submit" class="btn">Upload a file</button>
      <input id="input-file"  type="file" name="csv"/>
      <input type="submit" name="submit" value="Save" /></form>
    </form>
  </div>

  <h6 style="color:white; text-align:center;" >-OR-</h6>
      <form class='form' autocomplete="false" >
      <!-- primul rand -->
      <p class='field half'>
          <input type="text" autocomplete="false" name="hidden" placeholder="Nume">
      </p>
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Prenume">
      </p>
      <!-- al doilea rand -->
      <p class='field third'>
          <input type="text" autocomplete="false" name="hidden" placeholder="Universitate">
      </p>
      <p class='field third'>
          <input type="text" autocomplete="false" name="hidden" placeholder="Facultate">
      </p>
      <p class='field third'>
          <input type="text" autocomplete="false" name="hidden" placeholder="Specializare">
      </p>
      <!-- al treilea rand -->
      <p class='field third'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Tara">
      </p>
      <p class='field third'>
          <input type="text" autocomplete="false" name="hidden" placeholder="Judet">
      </p>
      <p class='field third'>
          <input type="text" autocomplete="false" name="hidden" placeholder="Localitate">
      </p>
      <!-- al patrulea rand -->
      <p class='field'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Strada">
      </p>
      <!-- al cincilea rand -->
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="E-mail">
      </p>
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Telefon">
      </p>
      <!-- al saselea rand -->
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="CNP">
      </p>
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Seria CNP">
      </p>
      <!-- al saptelea rand -->
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Numar matricol">
      </p>
      <p class='field half'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Gen">
      </p>
      <!-- al optlea rand -->
      <p class='field'>
        <input type="text" autocomplete="false" name="hidden" placeholder="Media">
      </p>
      
      <div class="wrap">
        <button id="myButton" class="button"  >REPARTIZARE</button>
      </div>
      
    </form>
  </h3> 
</div>
</div>


<script>
    document.getElementById("myButton").innnerHTML="ADAUGARE STUDENT";
    function buttonChange(){
      document.getElementById("myButton").innnerHTML="REPARTIZARE";
    }
  </script>
<script>

	
	var tiles = L.tileLayer('https://c.tiles.wmflabs.org/osm-no-labels/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; <a href="https://www.openstreetmap.org  /copyright">OpenStreetMap</a> contributors'
        }),
            latlng = new L.LatLng(45.750970, 21.226200); 
        var roads = L.tileLayer("http://tile.memomaps.de/tilegen/{z}/{x}/{y}.png", {
           maxZoom: 20, 
        });
        var media = L.tileLayer("https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png", {
           maxZoom: 20, 
       });
       var map = new L.Map('map', {center: latlng, zoom: 12, layers: [tiles],attributionControl: false, zoomControl: false});

        
	 
	
	
	
</script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
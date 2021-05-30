<!DOCTYPE html> 
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<link href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" rel="stylesheet" />
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
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<script src="JS/repartizare.js"></script>
	<title>Repartizare</title>
	<style>
	/*Tabelul de studenti*/
      table {
      position:absolute;
      left: 26%;
      top: 10%;
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
      
      
      .table_detail-repartizare {
         position:absolute;
         text-align: left;
         border-collapse: collapse;
         color: #2E2E2E;
         border: #A4A4A4;
      }
      .table_detail-repartizare tr:hover {
      background-color: #F2F2F2;
      }
      .table_detail-repartizare .hidden_row {
      display: none;
      }

	</style>
  <?php
    require 'component_tabel.php';
  ?>
      <script>
         function Upload() {
           //alert("Tapa"); 
           var formular = document.getElementById('hide');
           var table = document.getElementById('display');
           //print_r(formular);
           table.style.display = "block";
           formular.style.display = "none";
         }
         function showHideRow(row) {
             $("#" + row).toggle();
         }
      </script>
	
          <script type="text/javascript">
              function showHideRow(row) {
                  $("#" + row).toggle();
              }
          </script>
        
          
        <?php
         $addToTable = false;
         $studenti_file=[];
           if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit1']))
           {
               //echo "TRAIESC";
               func();//for file
               
               $addToTable = true;
               //echo $addToTable;
           }
           if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit2']))
           {
               fun();// for input fields
           }
           function fun(){
               //echo "2";
               $link = mysqli_connect("localhost", "root", "", "project");
               if($link === false){
                  die("ERROR: Could not connect. " . mysqli_connect_error());
               }
               
               $query = "SELECT * FROM camera where Locuri_ocupate=3 limit 1";
               $result = mysqli_query($link,$query);
               if($result)
                  $rez=mysqli_fetch_array($result);
               else{//incercam camerele cu 2 studenti
                  $query = "SELECT * FROM camera where Locuri_ocupate=2 limit 1";
                  $result = mysqli_query($link,$query);
                  if($result)
                     $rez=mysqli_fetch_array($result);
                  else{//incercam camerele cu o pers in ele
                     $query = "SELECT * FROM camera where Locuri_ocupate=1 limit 1";
                     $result = mysqli_query($link,$query);
                     if($result)
                        $rez=mysqli_fetch_array($result);
                     else{
                        $query = "SELECT * FROM camera where Locuri_ocupate=0 limit 1";
                        $result = mysqli_query($link,$query);
                        if($result)
                           $rez=mysqli_fetch_array($result);
                        else{
                           echo "Nu mai sunt locuri disponibile in camin";
                           return -1;
                        }
                     }
                  }
               }
               $id_camera=$rez['ID_Camera'];
               $nr_pers=$rez['Locuri_ocupate']+1;
               $query = "UPDATE camera SET Locuri_ocupate =$nr_pers  where ID_camera=$id_camera limit 1";

               $nume    = $studenti_file[0];
               $prenume = $studenti_file[1];
               $medie   = $studenti_file[2];
               $uni     = $studenti_file[3];
               $fac     = $studenti_file[4];
               $spec    = $studenti_file[5];
               //contact
               $tara  = $studenti_file[6];
               $judet = $studenti_file[7];
               $loc   = $studenti_file[8];
               $adr   = $studenti_file[9];
               $email = $studenti_file[10];
               $tel   = $studenti_file[11];
               //date_personale
               $cnp    = $studenti_file[12];
               $serie  = $studenti_file[13];
               $nr_mat = $studenti_file[14];
               $gen    = $studenti_file[15];
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

           }
           function func(){
             /*
             $tmpName = $_FILES['csv']['tmp_name'];
             $csvAsArray = array_map('str_getcsv', file($tmpName));
             foreach($csvAsArray as $value)
               foreach($value as $col)
                 echo $col;
             */
            global $studenti_file;
             $tmpName = $_FILES['csv']['tmp_name'];
             if($tmpName){
               $studenti_file = array_map('str_getcsv', file($tmpName));
               //print_r($studenti_file);
               //echo "primu";
               //$studenti_file=array();
               /*
               foreach($stud as $row){
                 $rows=array();
                 foreach($row as $col)
                   array_push($rows,$col);
                 array_push($studenti_file,$rows);
               }*/
               $link = mysqli_connect("localhost", "root", "", "project");
             
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

               //resetez id-ul studentilor
               $query1 = "ALTER TABLE date_personale AUTO_INCREMENT = 0";
               $query2 = "ALTER TABLE date_generale AUTO_INCREMENT = 0";
               $query3 = "ALTER TABLE contact AUTO_INCREMENT = 0";
               if(mysqli_query($link, $query1) && mysqli_query($link, $query2) && mysqli_query($link, $query3)){
                 //
               } else{
                   echo "ERROR: Nu s-au putut golii tabelele $query1. " . mysqli_error($link), PHP_EOL;
               }
               
               $camere_pe_etaj = 10;
               $etaje_pe_camin = 5;
               $stud_in_camera = 4;
               $max_stud=$nr_camine * $etaje_pe_camin * $camere_pe_etaj * $stud_in_camera;
               //print_r($studenti_file);
               //sortez dupa medie
               array_multisort(array_column($studenti_file, 2), SORT_DESC, $studenti_file);
               //print_r($studenti_file);
               //loop-ul de adaugare in camin
               $query5 = "UPDATE camera SET Locuri_ocupate = 0";
               if(mysqli_query($link, $query5)){
                  //
               } else{
                  echo "ERROR: Nu s-au putut golii tabelele $query5. " . mysqli_error($link), PHP_EOL;
               }
               
               $current_stud_id=0;
               $number_of_stud=count($studenti_file)-1;
         
               for($cam=0;$cam<$nr_camine;$cam++){
                 $nr_camin_curent=$cam;
                 for($e=0;$e<$etaje_pe_camin;$e++){
                   $nr_etaj_curent=$e;
                   for($c=1;$c<=$camere_pe_etaj;$c++){
                     $nr_camera_curenta = $e*$camere_pe_etaj+$c;
                     $s=1;
                     

                     for($s=0;$s<$stud_in_camera;$s++){
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
                         $c   = $camere_pe_etaj+1;
                         $e   = $etaje_pe_camin+1;
                         $cam = $nr_camine+1;
                       }
                     }
                     //modificam cate pers sunt in fiecare camera
                     $query4 = "UPDATE camera SET Locuri_ocupate = $s WHERE ID_Camin = $nr_camin_curent+1 and Nr_camera = $nr_camera_curenta";
                     if(mysqli_query($link, $query4)){
                        //
                      } else{
                          echo "ERROR: Nu s-au putut golii tabelele $query4. " . mysqli_error($link), PHP_EOL;
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
             //print_r($studenti_file);
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

<nav class="navbar">
	<div class="logo-image">
            <img src="assets/logo.png" class="img-fluid">
      </div>
  </nav>
 <div class = "overlay">
        <div class="wrapper">
        <!-- Sidebar  -->
        <div id="sidebar">
            <ul class="list-unstyled components">
				<br></br>
				<br></br>
                <li class="active">
                    <a href="Acasa.php"  >Acasă</a>
                </li>
                <li>
                    <a href="RepartizareStudenti.php">Repartizare studenți</a>
                </li>
                <li>
                    <a href="VizualizareStudenti.php"  >Vizualizare studenți</a>
                </li>
				<li>
                    <a href="VizualizareCamine.php"  >Vizualizare cămine</a>
                </li>
                <li>
                    <a href="AdaugareCamin.php">Adăugare cămin</a>
                </li>
				<br></br>
				<br></br>
				<br></br>
				<br></br>
                <li>
                    <a href="#">Deconectare</a>
                </li>
            </ul>
        </div>
        <div id="content">
				<div class="custom-menu" >
                    <button type="button" id="sidebarCollapse" class="btn btn-primary" >
						<i class="fa fa-bars"></i>
					</button>
				</div>
        </div>
		</div>
	</div>
      <div id='hide'>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <div class="container1" id='form' >
            <div class="upload-btn-wrapper">
               <form action="RepartizareStudenti.php" method="post" enctype="multipart/form-data">
                  <button type="submit" name="submit1" class="btn-incarcare-fisier">Upload a file</button>
                  <input id="input-file"  type="file" name="csv"/>
                  <input type="submit" name="submit1" value="Save"   />
               </form>
            </div>
         </div>
         <br>
         <div class="container2" >
            <form action="RepartizareStudenti.php" method="post" enctype="multipart/form-data" class='form' autocomplete="false" >
               <!-- primul rand -->
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="Nume"></p>
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="Prenume"></p>
               <!-- al doilea rand -->
               <p class='field third'><input type="text" autocomplete="false" name="hidden" placeholder="Universitate"></p>
               <p class='field third'><input type="text" autocomplete="false" name="hidden" placeholder="Facultate"></p>
               <p class='field third'><input type="text" autocomplete="false" name="hidden" placeholder="Specializare"></p>
               <!-- al treilea rand -->
               <p class='field third'><input type="text" autocomplete="false" name="hidden" placeholder="Tara"></p>
               <p class='field third'><input type="text" autocomplete="false" name="hidden" placeholder="Judet"></p>
               <p class='field third'><input type="text" autocomplete="false" name="hidden" placeholder="Localitate"></p>
               <!-- al patrulea rand -->
               <p class='field'><input type="text" autocomplete="false" name="hidden" placeholder="Strada"></p>
               <!-- al cincilea rand -->
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="E-mail"></p>
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="Telefon"></p>
               <!-- al saselea rand -->
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="CNP"></p>
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="Seria CNP"></p>
               <!-- al saptelea rand -->
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="Numar matricol"></p>
               <p class='field half'><input type="text" autocomplete="false" name="hidden" placeholder="Gen"></p>
               <!-- al optlea rand -->
               <p class='field'><input type="text" autocomplete="false" name="hidden" placeholder="Media"></p>
               
               <div class="wrap">
                  <input type="submit" name="submit2" id="myButton" class="button-trimite"></input>
               </div>
            </form>
         </div>
      </div>
      
         <table class="table_detail-repartizare" id="display" style="height: 700px;
            overflow-y: scroll;">
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
         	<?php
            //print_r($studenti_file);
            if($addToTable == true){
               //echo "plm";
               //print_r($studenti_file);
              for($st=0;$st<count($studenti_file);$st++){
                $nume    = $studenti_file[$st][0];
                $prenume = $studenti_file[$st][1];
                $medie   = $studenti_file[$st][2];
                $uni     = $studenti_file[$st][3];
                $fac     = $studenti_file[$st][4];
                $spec    = $studenti_file[$st][5];
                //contact
                $tara  = $studenti_file[$st][6];
                $judet = $studenti_file[$st][7];
                $loc   = $studenti_file[$st][8];
                $adr   = $studenti_file[$st][9];
                $email = $studenti_file[$st][10];
                $tel   = $studenti_file[$st][11];
                //date_personale
                $cnp    = $studenti_file[$st][12];
                $serie  = $studenti_file[$st][13];
                $nr_mat = $studenti_file[$st][14];
                $gen    = $studenti_file[$st][15];
                component_tabel($nume,$prenume,$uni,$fac,$spec,$medie,$cnp,$nr_mat,$serie,$gen,$adr,$loc,$judet,$tara,$email,$tel,$st+1);
              }
              //echo "NU-I binie";
              echo '<script type="text/javascript">','Upload();','</script>';
            
            }
            ?>
         </table>
		 
<!-- jQuery -->
  <script src="js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="js/owl-carousel.js"></script>
  <script src="js/scrollreveal.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imgfix.min.js"></script> 
  <script src="js/slick.js"></script> 
  <script src="js/lightbox.js"></script> 
  <script src="js/isotope.js"></script>
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

<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>

</body>
</html>
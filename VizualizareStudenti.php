<?php
session_start();
require_once("PHP/dbcontroller.php");
$db_handle = new DBController();
require_once ('PHP/component_tabel.php');
?>
<!DOCTYPE html>
<html>
  
<head>
    <title>Vizualizare studenti</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
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
  
    <script type="text/javascript">
        function showHideRow(row) {
            $("#" + row).toggle();
        }
    </script>
  
    <style>
        
  
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
  
        #table_detail {
            width: 500px;
            text-align: left;
            border-collapse: collapse;
            color: #2E2E2E;
            border: #A4A4A4;
        }
  
        #table_detail tr:hover {
            background-color: #F2F2F2;
        }
  
        #table_detail .hidden_row {
            display: none;
        }
		
	.scrollit {
            display: block;
            
            padding: 5px;
            margin-top: 5px;
            width: 100%;
            height: 700px;
            overflow-y: scroll;
  }
    </style>
</head>
  
<body>
<div id="map"></div>
    <div class = "overlay">
           <div class="wrapper">
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
    <div class="overlay_afisare">
    <div id="wrapper">
      <div class="scrollit">
        <table border=1 id="table_detail" 
            align=center cellpadding=10>
  
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
				$student_array = $db_handle->runQuery("SELECT date_generale.Nume,date_generale.Prenume,date_generale.Universitate,date_generale.Facultate,date_generale.Specializare,date_generale.Medie,date_personale.CNP,date_personale.Nr_Matricol,date_personale.Serie,date_personale.Gen,contact.Adresa,contact.Localitate,contact.Judet,contact.Tara,contact.Telefon,contact.Email FROM date_generale inner join date_personale on date_personale.ID_Student=date_generale.ID_Student inner join contact on date_generale.ID_Student=contact.ID_Student ");
				//print_r($student_array);
				if (!empty($student_array)) { 
					foreach($student_array as $key=>$value){
	                             $cheie=$key+1;
	                             component_tabel($student_array[$key]["Nume"],$student_array[$key]["Prenume"],$student_array[$key]["Universitate"],$student_array[$key]["Facultate"],$student_array[$key]["Specializare"],$student_array[$key]["Medie"],$student_array[$key]["CNP"],$student_array[$key]["Nr_Matricol"],$student_array[$key]["Serie"],$student_array[$key]["Gen"],$student_array[$key]["Adresa"],$student_array[$key]["Localitate"],$student_array[$key]["Judet"],$student_array[$key]["Tara"],$student_array[$key]["Email"],$student_array[$key]["Telefon"],$cheie);
	  
				}
					}
	       ?>	  
            
			
			
        </table>
		</div>
    </div>
	</div>
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
<?php
session_start();
require_once("PHP/dbcontroller.php");
$db_handle = new DBController();
// We need to use sessions, so you should always start sessions using the below code.

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: Autentificare.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagina principală</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
  <script src="http://leafletjs.com/reference-1.3.0.html#tooltip"></script>
  <script src="variabile.js"></script>
<link href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" rel="stylesheet" />
<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="CSS/style.css">

</head>
<body>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
	<!--<nav class="navbar">
  </nav>-->
  <div id="map1"></div>
  
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
                    <a href="logout.php">Deconectare</a>
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


<script>
	// We’ll add a tile layer to add to our map, in this case it’s a OSM tile layer.
	// Creating a tile layer usually involves setting the URL template for the tile images
	var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
	  osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
	  osm = L.tileLayer(osmUrl, {
		maxZoom: 18,
		attribution: osmAttrib
	  });
	// initialize the map on the "map" div with a given center and zoom
	var map = L.map('map1').setView([45.750970, 21.226200], 14).addLayer(osm);
	//var polyline = L.polyline([[45.749845004356374, 21.24007183846195],[45.749845004356374, 21.24007183846195]]).addTo(this.map1);
    //polyline.bindTooltip("tool tip is bound");
	/*var marker=L.marker([45.74998855590820, 21.24242973327637]).addTo(map);
	 marker.bindPopup("Camin C13");
        marker.on('mouseover', function (e) {
            this.openPopup();
        });
        marker.on('mouseout', function (e) {
            this.closePopup();
        });
	marker.on('click',function onMapClick(e) {
          window.location="detaliietaje.php";
    });*/
	
	
    <?php
				$camine_array = $db_handle->runQuery("SELECT * FROM CAMIN ");
				$camin=-1;
				if (!empty($camine_array)) { 
					foreach($camine_array as $key=>$value){
	?>
	var marker=L.marker([<?php echo json_encode($camine_array[$key]["Latitudine"]); ?>, <?php echo json_encode($camine_array[$key]["Longitudine"]); ?>]).addTo(map);
	 marker.bindPopup('<b><?php echo $camine_array[$key]["Nume"]; ?><br>Adresa: <?php echo $camine_array[$key]["Adresa"]; ?><br>Localitate:<?php echo $camine_array[$key]["Localitate"]; ?><br>Judet:<?php echo $camine_array[$key]["Judet"]; ?></b>');
        marker.on('mouseover', function (e) {
            this.openPopup();
        });
        marker.on('mouseout', function (e) {
            this.closePopup();
        });
	marker.on('click',function onMapClick(e) {
		  var id=<?php echo json_encode($camine_array[$key]["ID_Camin"]);  ?>;
		 
		  
		  if(id > 0)
		  {
			  sessionStorage.setItem("caminid", id);
			  window.location="VizualizareCamine.php?camin="+id;
		  }
		  
                
            
		  
    });
	
	<?php
				}
					}
	?>	  

</script>

	
	
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>

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
    
    <!-- Global Init -->
    <script src="js/custom.js"></script>
	
	
</body>
</html>
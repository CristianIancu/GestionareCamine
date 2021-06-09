<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagina principală</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
  <script src="http://leafletjs.com/reference-1.3.0.html#tooltip"></script>
<link href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" rel="stylesheet" />

</head>
<body>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
  <div id="map"></div>
    <div class = "overlay">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="dropdown">
		<button class="btn"><i class="fa fa-bars"></i></button>
		<div class="dropdown-content">
			<a href="#">Repartizare studenți</a>
			<a href="#">Vizualizare listă studenți</a>
			<a href="#">Deconectare</a>
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
	var map = L.map('map').setView([45.750970, 21.226200], 12).addLayer(osm);
	//var polyline = L.polyline([[45.749845004356374, 21.24007183846195],[45.749845004356374, 21.24007183846195]]).addTo(this.map);
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
		  <?php
		     $_SESSION['ID_CAAMIN']=$camine_array[$key]["ID_Camin"];
		  ?>
		  var id=<?php echo json_encode($_SESSION['ID_CAAMIN']); ?>;
		  
		  //alert(id);
		  //alert(s);
		  if(id > 0)
		  {
			  window.location="etaj1.php";
		  }
		  /*$_SESSION['ID'].on("change", function (id) {
          $.ajax({
		  method: "POST",
		  url: "etaj1.php",
		  data: { sessionvalue: this.value }
		  });
		  
        });*/
			  //window.location="etaj1.php";
		   
          
		  
    });
	
	<?php
				}
					}
	?>	  





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
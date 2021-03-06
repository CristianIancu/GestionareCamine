<?php 
    session_start();
	require_once ('PHP/component.php');
	require_once ('PHP/CreateDb.php');
	$database = new createDb("project", "Camin");
	
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	
  <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
  <script src="variabile.js"></script>
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

    <title>Vizualizare camin</title>

    
    <!-- Additional CSS Files -->
	
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	

    <link rel="stylesheet" type="text/css" href="CSS/font-awesome.css">
	
    <link href="CSS/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    
	<div id="map"></div>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <nav class="navbar">
	<div class="logo-image">
            <img src="assets/logo.png" class="img-fluid">
      </div>
  </nav>
    <!-- ***** Preloader End ***** -->
      
      <div class = "overlay">
        <div class="wrapper">
        <!-- Sidebar  -->
        <div id="sidebar">
            <ul class="list-unstyled components">
				<br></br>
				<br></br>
                <li class="active">
                    <a href="Acasa.php"  >Acas??</a>
                </li>
                <li>
                    <a href="RepartizareStudenti.php">Repartizare studen??i</a>
                </li>
                <li>
                    <a href="VizualizareStudenti.php"  >Vizualizare studen??i</a>
                </li>
				<li>
                    <a href="VizualizareCamine.php"  >Vizualizare c??mine</a>
                </li>
                <li>
                    <a href="AdaugareCamin.php">Ad??ugare c??min</a>
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
	
	
	 <div class="overlay_cladire">
        <div class="increase-imagemap">
		<div class="increase-imagemap-shape-container">
		   <svg class="incrase-hs-poly-svg" viewbox="0 0 1902 1088" preserveaspectratio="none">
		   <?php
			        if(isset($_GET['camin']))
							  {	  
			   ?>
			  <a xlink:href="VizualizareCamere.php?idcamin=<?php echo $_GET['camin'] ?>&etaj=4">  <?php } ?>
				 <polygon onmouseover="myFunction(5)" onmouseout="onMouseout(5)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #AF7EF1; fill-opacity: 0.5; stroke: #AF7EF1; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="123 495,386 582,1489 376,1606 403,1789 360,1786 470,1603 513,1486 487,387 705,127 615" data-original-title="Etaj 5" data-index="0" data-shape-title="Etaj 5" data-tippy="" ></polygon>
			  </a>
			  <?php
			        if(isset($_GET['camin']))
							  {	  
			   ?>
			  <a xlink:href="VizualizareCamere.php?idcamin=<?php echo $_GET['camin'] ?>&etaj=3"> <?php } ?>
				 <polygon onmouseover="myFunction2(4)" onmouseout="onMouseout2(4)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #AF7EF1; fill-opacity: 0.5; stroke: #AF7EF1; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="130 654,387 735,1487 497,1603 527,1786 489,1783 570,1603 609,1487 583,386 826,132 753" ></polygon>
			  </a>
			  <?php
			        if(isset($_GET['camin']))
							  {	  
			   ?>
			  <a xlink:href="VizualizareCamere.php?idcamin=<?php echo $_GET['camin'] ?>&etaj=2"> <?php } ?>
				 <polygon onmouseover="myFunction3(3)" onmouseout="onMouseout3(3)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #AF7EF1; fill-opacity: 0.5; stroke: #AF7EF1; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="132 752,386 840,1487 597,1603 625,1786 585,1781 672,1603 712,1487 682,387 929,135 842" ></polygon>
			  </a>
			  <?php
			        if(isset($_GET['camin']))
							  {	  
			   ?>
			  <a xlink:href="VizualizareCamere.php?idcamin=<?php echo $_GET['camin'] ?>&etaj=1"> <?php } ?>
				 <polygon onmouseover="myFunction4(2)" onmouseout="onMouseout4(2)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #AF7EF1; fill-opacity: 0.5; stroke: #AF7EF1; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="136 859,388 946,1487 705,1602 737,1780 697,1778 766,1603 809,1487 779,388 1045,139 959" ></polygon>
			  </a>
			  <?php
			        if(isset($_GET['camin']))
							  {	  
			   ?>
			  <a xlink:href="VizualizareCamere.php?idcamin=<?php echo $_GET['camin'] ?>&etaj=0"> <?php } ?>
				 <polygon onmouseover="myFunction5(1)" onmouseout="onMouseout5(1)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #AF7EF1; fill-opacity: 0.5; stroke: #AF7EF1; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="109 980,388 1064,1487 796,1603 826,1786 782,1786 870,1603 915,
                  1487 885,-500 1260,109 1082" ></polygon>
			  </a>
		   </svg>
		   
		</div>
		<img src="assets/cladire.png" class="increase-imagemap-image" id="increase-imagemap-image">
                     
		
	   </div>
         </div>
		 	
			
	   <div id="result"></div>
	    <?php
							
							if(isset($_GET['camin']))
							  {	  
							   
							   $result = $database->getData($_GET['camin'],5);
							   while ($row = mysqli_fetch_assoc($result))
								{
									if($row['SUMA']!=null and $row['SUMA1']!=null)
									{
									component(5, $row['SUMA'], $row['SUMA1']);
									}
									else
									{
										component(5, 0, 0);
									}
								}
							
							  }
							
		?>
		<?php
							
							if(isset($_GET['camin']))
							  {	  
							  	  
							   $result = $database->getData($_GET['camin'],4);
							   while ($row = mysqli_fetch_assoc($result))
								{
									if($row['SUMA']!=null and $row['SUMA1']!=null)
									{
									component2(4, $row['SUMA'], $row['SUMA1']);
									}
									else
									{
										component2(4, 0, 0);
									}
								
									
								}
							
							  }
							
		?>
		<?php
							
							if(isset($_GET['camin']))
							  {	  
							  	  
							   $result = $database->getData($_GET['camin'],3);
							   while ($row = mysqli_fetch_assoc($result))
								{
									if($row['SUMA']!=null and $row['SUMA1']!=null)
									{
									component3(3, $row['SUMA'], $row['SUMA1']);
									}
									else
									{
										component3(3, 0, 0);
									}
									
								}
							
							  }
							
		?>
		<?php
							
							if(isset($_GET['camin']))
							  {	  
							  	  
							   $result = $database->getData($_GET['camin'],2);
							   while ($row = mysqli_fetch_assoc($result))
								{
									if($row['SUMA']!=null and $row['SUMA1']!=null)
									{
									component4(2, $row['SUMA'], $row['SUMA1']);
									}
									else
									{
										component4(2, 0, 0);
									}
									
								}
							
							  }
							
		?>
		<?php
							
							if(isset($_GET['camin']))
							  {	  
							  	  
							   $result = $database->getData($_GET['camin'],1);
							   while ($row = mysqli_fetch_assoc($result))
								{
									if($row['SUMA']!=null and $row['SUMA1']!=null)
									{
										component5(1, $row['SUMA'], $row['SUMA1']);
									}
									else
									{
										component5(1, 0, 0);
									}
									
								}
							
							  }
							
		?>
		
	
	
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

  <script>
	
	
	var caminid = sessionStorage.getItem("caminid");
    //alert(caminid);
	
    function myFunction(e) 
	{
	
    var x = document.getElementById("about");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout(e)
	{
		var x = document.getElementById("about");
		x.style.display = "none";
	}
	
    function myFunction2(e) 
	{
	
    var x = document.getElementById("about2");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout2(e)
	{
		var x = document.getElementById("about2");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}	

    function myFunction3(e) 
	{
	
    var x = document.getElementById("about3");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout3(e)
	{
		var x = document.getElementById("about3");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}
	
    function myFunction4(e) 
	{
	
    var x = document.getElementById("about4");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout4(e)
	{
		var x = document.getElementById("about4");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}
	
    function myFunction5(e) 
	{
	
    var x = document.getElementById("about5");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout5(e)
	{
		var x = document.getElementById("about5");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
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

<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
</script>       
</body>
</html>
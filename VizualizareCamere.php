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

    <title>Vizualizare camere</title>

    
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
	
	
	 <div class="overlay_camere">
        <div class="increase-imagemap">
		<div class="increase-imagemap-shape-container">
		   <svg class="incrase-hs-poly-svg" viewbox="0 0 1902 1088" preserveaspectratio="none">
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction(1)" onmouseout="onMouseout(1)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="2 2,369 3,369 307,2 306" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon  onmouseover="myFunction2(2)" onmouseout="onMouseout2(2)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="378 3,748 3,750 307,376 306" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction3(3)" onmouseout="onMouseout3(3)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="758 3,1131 4,1131 307,757 307" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction4(4)" onmouseout="onMouseout4(4)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="1141 4,1517 4,1518 306,1143 306" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction5(5)" onmouseout="onMouseout5(5)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="1529 3,1904 3,1905 306,1531 306" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction6(6)" onmouseout="onMouseout6(6)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="6 385,378 386,378 695,7 695" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction7(7)" onmouseout="onMouseout7(7)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="389 386,759 386,760 696,389 695" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction8(8)" onmouseout="onMouseout8(8)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="769 387,1140 386,1140 696,769 696" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction9(9)" onmouseout="onMouseout9(9)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="1152 388,1518 387,1517 696,1153 696" ></polygon>
			  </a>
			  <a xlink:href="#">
				 <polygon onmouseover="myFunction10(10)" onmouseout="onMouseout10(10)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #F0CE22; fill-opacity: 0.5; stroke: #F0CE22; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
				 points="1530 386,1905 387,1905 696,1531 696" ></polygon>
			  </a>
		   </svg>
		   
		</div>
		<img src="assets/camere.jpeg" class="increase-imagemap-image" id="increase-imagemap-image">
                     
		<!---<div class="bg"></div>--->
	   </div>	
		 
	</div>
	   
	    <?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+1,$_GET['idcamin']);
							  
								   while ($row = mysqli_fetch_assoc($result))
									{
										//echo $row['Studenti'];
										if($row['Studenti']!= null)
										{
										componentcamera($_GET['etaj']*10+1,$row['Studenti'], $row['Locuri_max']);
										}
										else
										{
											$result = $database->getDataLocuriMaxime($_GET['etaj']*10+1,$_GET['idcamin']);
											while ($row = mysqli_fetch_assoc($result))
											{
												componentcamera($_GET['etaj']*10+1,0, $row['Locuri_max']);
											}
										}
									}
							     
							   }
							   
							  }
							 
							  
							
		?>
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+2,$_GET['idcamin']);
							   
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera2($_GET['etaj']*10+2,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+2,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera2($_GET['etaj']*10+2,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   
							  
							  }
							
		?>
		
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+3,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera3($_GET['etaj']*10+3,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+3,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera3($_GET['etaj']*10+3,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   else{
								   componentcamera3($_GET['etaj']*10+3,0,0);
							   }
							   }
							  }
							
		?>
		
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+4,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera4($_GET['etaj']*10+4,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+4,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera4($_GET['etaj']*10+4,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   else{
								   componentcamera4($_GET['etaj']*10+4,0,0);
							   }
							   }
							  }
							
		?>
		
		
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+5,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera5($_GET['etaj']*10+5,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+5,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera5($_GET['etaj']*10+5,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   else{
								   componentcamera5($_GET['etaj']*10+5,0, 0);
							   }
							  
							   
							   }
							  }
							
		?>
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+6,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null)
							   {
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera6($_GET['etaj']*10+6,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+2,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera6($_GET['etaj']*10+6,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   else{
								   componentcamera6($_GET['etaj']*10+6,0,0);
							   }
							   }
							  }
							
		?>
	    <?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+7,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera7($_GET['etaj']*10+7,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+7,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera7($_GET['etaj']*10+7,0, $row['Locuri_max']);
										}
									}
								}
							   }else{
								   componentcamera7($_GET['etaj']*10+7,0,0);
							   }
							   }
							  }
							
		?>
		
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+8,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera8($_GET['etaj']*10+8,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+8,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera8($_GET['etaj']*10+8,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   else{
								   componentcamera8($_GET['etaj']*10+8,0,0);
							   }
							   }
							   
							  }
							
		?>
		
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+9,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera9($_GET['etaj']*10+9,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+9,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera9($_GET['etaj']*10+9,0, $row['Locuri_max']);
										}
									}
							   }
							   }
							   else
							   {
								   componentcamera9($_GET['etaj']*10+9,0,0);
							   }
							   }
							  }
							
		?>
		
		<?php
							
							if(isset($_GET['idcamin']))
							  {	  
							   //$etaj*10+1
							   if(isset($_GET['etaj'])){
							   $result = $database->getDataCamera($_GET['etaj']*10+10,$_GET['idcamin']);
							   if(mysqli_fetch_assoc($result)!=null){
							   while ($row = mysqli_fetch_assoc($result))
								{
									//echo $row['Studenti'];
									if($row['Studenti']!= null)
									{
									componentcamera10($_GET['etaj']*10+10,$row['Studenti'], $row['Locuri_max']);
									}
									else
									{
										$result = $database->getDataLocuriMaxime($_GET['etaj']*10+10,$_GET['idcamin']);
										while ($row = mysqli_fetch_assoc($result))
										{
											componentcamera10($_GET['etaj']*10+10,0, $row['Locuri_max']);
										}
									}
								}
							   }
							   else{
								   componentcamera10($_GET['etaj']*10+10,0,0);
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
	
	function myFunction6(e) 
	{
	
    var x = document.getElementById("about6");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout6(e)
	{
		var x = document.getElementById("about6");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}	
	function myFunction7(e) 
	{
	
    var x = document.getElementById("about7");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout7(e)
	{
		var x = document.getElementById("about7");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}	
	function myFunction8(e) 
	{
	
    var x = document.getElementById("about8");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout8(e)
	{
		var x = document.getElementById("about8");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}	
	function myFunction9(e) 
	{
	
    var x = document.getElementById("about9");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout9(e)
	{
		var x = document.getElementById("about9");
		if (x.style.display != "none") {
		   x.style.display = "none";
		}
	}	
	function myFunction10(e) 
	{
	
    var x = document.getElementById("about10");
    if (x.style.display === "none") {
      x.style.display = "block";
    } //else {
      //x.style.display = "none";
    //}
	}
	function onMouseout10(e)
	{
		var x = document.getElementById("about10");
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
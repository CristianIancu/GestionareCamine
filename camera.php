<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Detalii camere</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/home.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body style="background:url(assets/images/background.jpg);background-repeat:no-repeat;background-size:100% 100%">
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <!-- ***** Preloader End ***** -->
    
      <div class = "overlay">
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
	   <div class="box">
       <div class="overlay_camere">
	   <div class="increase-imagemap">
            <div class="increase-imagemap-shape-container">
               <svg class="incrase-hs-poly-svg" viewbox="0 0 1902 1088" preserveaspectratio="none">
                <a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="31 267,189 266,188 483,31 483" ></polygon>
                </a>
                <a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="188 265,329 265,329 482,188 482" ></polygon>
                </a>
                <a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="334 264,474 266,474 481,333 480" ></polygon>
                </a>
                <a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="484 264,632 265,632 480,484 481" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="630 264,782 265,783 480,630 481" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="1210 262,1359 261,1359 482,1212 482" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="1364 264,1505 263,1505 483,1364 484" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="1507 263,1708 263,1707 485,1508 485" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="174 530,333 530,333 730,174 730" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="338 531,474 532,474 730,337 729" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="479 533,622 533,622 730,481 730" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="628 533,770 532,770 729,627 729" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="770 534,920 533,920 731,770 730" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="912 535,1070 534,1070 733,912 731" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="1058 536,1220 535,1220 735,1058 732" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="1220 537,1370 536,1370 736,1220 733" ></polygon>
                </a>
				<a xlink:href="#">
                 <polygon onmouseover="myFunction()" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="1368 538,1520 537,1520 737,1368 734" ></polygon>
                </a>
               </svg>
               
            </div>
            <img src="assets/images/rooms.jpg" class="increase-imagemap-image" id="increase-imagemap-image">
                             
            <!---<div class="bg"></div>--->
             </div>	
              <!--<img src="assets/images/rooms.jpg" alt="poza_camere" width="90%" height="90%"/>-->
      </div>
      </div>
	

    <!-- ***** About Area Starts ***** -->
    <!--<div id="myDIV">-->
      <div id="about">
      <div class="container_det">
           
                
				        
                  <b><p>Nr de camere:14</p></b>
                  <b><p>Id etaj:1234</p></b>
                  <b><p>Locuri ocupate</p></b>
                  
      </div>
           
    </div>
       
      <!--</div>-->
    
  
      <!-- ***** About Area Ends ***** -->
      
  
  

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script> 
  <script src="assets/js/slick.js"></script> 
  <script src="assets/js/lightbox.js"></script> 
  <script src="assets/js/isotope.js"></script> 
  
  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

  <script>
    function myFunction() {
    var x = document.getElementById("about");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  </script>
</body>
</html>
<?php 
    session_start();
	require_once ('component.php');
	require_once ('CreateDb.php');
	$database = new createDb("Camine", "Camin");
	
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Detalii cămin</title>

    
    <!-- Additional CSS Files -->
	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="css/home.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<?php
	if(isset($_POST['data1']))
							{
								echo "hello";
                            }	
	?>
    </head>
    
    <body style="background:url(images/background.jpg);background-repeat:no-repeat;background-size:100% 100%">
    
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
	<!--<div style="width:100%;
	   height:250px;
	   background:red;
	   margin:100px auto;">-->
	
	<!--</div>-->
	 <div class="overlay_cladire">
        <div class="increase-imagemap">
            <div class="increase-imagemap-shape-container">
               <svg class="incrase-hs-poly-svg" viewbox="0 0 1902 1088" preserveaspectratio="none">
                <a xlink:href="camera.php">
                 <polygon onmouseover="myFunction(<?php echo 1; ?>)" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="107 495,386 582,1489 376,1606 403,1789 360,1786 470,1603 513,1486 487,387 705,109 615" ></polygon>
                </a>
                <a xlink:href="camera.php">
                 <polygon onmouseover="" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="109 654,387 735,1487 497,1603 527,1786 489,1783 570,1603 609,1487 583,386 826,109 753" ></polygon>
                </a>
                <a xlink:href="camera.php">
                 <polygon onmouseover="" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="109 752,386 840,1487 597,1603 625,1786 585,1781 672,1603 712,1487 682,387 929,109 842" ></polygon>
                </a>
                <a xlink:href="camera.php">
                 <polygon onmouseover="" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                 points="108 859,388 946,1487 705,1602 737,1786 697,1784 766,1603 809,1487 779,388 1045,109 959" ></polygon>
                </a>
                <a xlink:href="camera.php">
                  <polygon onmouseover="" class="increase-imagemap-shape increase-imagemap-shape-poly increase-imagemap-tooltip" title="Etaj 1" data-shape-title="Etaj 1" style=" opacity: 0; fill: #e68a00; fill-opacity: 0.5; stroke: #e68a00; stroke-width: 2; stroke-opacity: 0.8; stroke-linecap: round; stroke-location: outside" data-index="0" id="shape-13" 
                  points="109 980,388 1064,1487 796,1603 826,1786 782,1786 870,1603 915,
                  1487 885,388 1161,109 1082" ></polygon>
                 </a>
               </svg>
               <!--331,972 480,936 487,939 578,918 578,913 718,880 744,890 758,888 758,883 893,851 901,854 914,851 914,840 965,827 965,822 1093,792 1099,794 1112,792 1112,766 1197,746 1205,749 1217,746 1257,731 1342,759 1493,724 1494,640 1343,676 1343,676 1267,650 1219,666 1206,669 1198,664 1114,684 713,711 1100,713 1093,709 966,739 966,746 900,762 893,759 758,791 758,796 743,799 718,788 578,822 578,828 485,849 479,846 328,881 328,888 311,392 190,834 190,824 117,788 120,876 192,911 193,922 310,980 331,977-->
            </div>
            <img src="assets/cladire.png" class="increase-imagemap-image" id="increase-imagemap-image">
                             
            <!---<div class="bg"></div>--->
             </div>	
              <!--<img src="images/cladire.png" alt="camin" width="900px" height="50px"/>-->
         </div>
	</div>
	
	    <?php
							
							
							
							$result = $database->getData($_SESSION['ID_CAAMIN'],1);
							while ($row = mysqli_fetch_assoc($result))
							{
								component($row['Etaj'], $row['SUMA'], $row['SUMA1']);
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
    
    function myFunction(e) {
	
	$.ajax({ 
	 method: "POST", 
	 url: "etaj1.php", 
	 data: { data1: e} 
					}).done(function(html){	
    //alert("ok");	
    var x = document.getElementById("about");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
	//function block runs if Ajax request was successful 
					}).fail(function(html){ 
	// function block runs if Ajax request failed 
	alert("neok");
    }); 
	//myJavascriptVar=e;
	//document.cookie = "myJavascriptVar = " + myJavascriptVar;
	//alert(myJavascriptVar);
    /*var x = document.getElementById("about");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }*/
  }
  
  
  </script>
</body>
</html>
        

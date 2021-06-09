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
	<title>Adaugare camin</title>
	<style>
              

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
              height: 350px;
              border-radius: 5px;
              background: rgba(3,3,3,0.63);
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
 
            .upload-btn-wrapper {
              margin-top: 10px;
              margin-left: 0px;
              overflow: hidden;
              display: inline-block;
            }

            
            input{
              font-family: 'Open Sans Condensed', sans-serif;
              text-decoration: none;
              position: relative;
              width: 80%;
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
              margin-left: 0px;
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
        
          
<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['plus']))
    {
        func();
    }
    function func()
    {
      $link = mysqli_connect("localhost", "root", "", "project");
    
      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      // Escape user inputs for security
        $camin_nume = mysqli_real_escape_string($link, $_REQUEST['camin_nume']);
        $adresa = mysqli_real_escape_string($link, $_REQUEST['adresa']);
        $localitate = mysqli_real_escape_string($link, $_REQUEST['localitate']);
        $judet = mysqli_real_escape_string($link, $_REQUEST['judet']);
        //$locuri_max = 15;//mysqli_real_escape_string($link, $_REQUEST['locuri_max']); 
        $gen=mysqli_real_escape_string($link, $_REQUEST['gen']);      
        $long=45.75009155273438;
        $lat=21.23913764953613;
        $locuri_min=0;
        

        

        $camere_pe_etaj=10;
        $etaje_pe_camin=5;
        $stud_pe_camera_min=0;
        $stud_pe_camera_max=4;
        $locuri_max = $etaje_pe_camin * $camere_pe_etaj * $stud_pe_camera_max;
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
<div id="map"></div>
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

<div class="container" id='form' >
    <form action="AdaugareCamin.php" method="post" class="input" >
	

      <p class='field'>
        <input id="fname" type="text"  name="camin_nume" autocomplete="false" placeholder="Numele caminului">
      </p>
      <p class='field'>
        <input id="lname" type="text" name="adresa" autocomplete="false" placeholder="Adresa">
      </p>
      <p class='field'>
        <input id="faculty" type="text"  name="localitate" autocomplete="false" placeholder="Localitatea">
      </p>
      <p class='field'>
        <input id="specialization" type="text"  name="judet" autocomplete="false" placeholder="Judet">
      </p>
      <p class='field'>
        <input id="gen" type="text"  name="gen"  autocomplete="false" placeholder="Barbati/Femei">
      </p>
      
      <div class="wrap">
        <input class='button' type="submit" id="add" value ="ADAUGA CAMINUL" name="plus"/>
      </div>
	  
    </form>
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
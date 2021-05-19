<!DOCTYPE html> 
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="JS/repartizare.js"></script>
	<title>Repartizare</title>
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
            a,
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
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['plus']))
    {
        func();
    }
    function func()
    {
      $link = mysqli_connect("localhost", "root", "", "camine");
    
      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      // Escape user inputs for security
        $camin_nume = mysqli_real_escape_string($link, $_REQUEST['camin_nume']);
        $adresa = mysqli_real_escape_string($link, $_REQUEST['adresa']);
        $localitate = mysqli_real_escape_string($link, $_REQUEST['localitate']);
        $judet = mysqli_real_escape_string($link, $_REQUEST['judet']);
        $locuri_max = 15;//mysqli_real_escape_string($link, $_REQUEST['locuri_max']); 
        $gen=mysqli_real_escape_string($link, $_REQUEST['gen']);      
        $long=45.75009155273438;
        $lat=21.23913764953613;
        $locuri_min=0;
        

        

        $camere_pe_etaj=3;
        $etaje_pe_camin=5;
        $stud_pe_camera_min=0;
        $stud_pe_camera_max=4;

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
<div class="dropdown">
		<button class="btn"><i class="fa fa-bars"></i></button>
		<div class="dropdown-content">
			<a href="#">Repartizare studenți</a>
			<a href="#">Vizualizare listă studenți</a>
			<a href="#">Deconectare</a>
		</div>
</div>

<div class="container" id='form' >
    <form action="repartizareCamin.php" method="post">

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

</body>
</html>
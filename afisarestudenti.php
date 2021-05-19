<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
require_once ('component_tabel.php');
?>
<!DOCTYPE html>
<html>
  
<head>
    <title>Afișare studenți</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link href="assets/css/home.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
 
  
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
		.overlay_afisare {     
	  width: 900px;
	  position: absolute;
	  top: 100px;
	  left: 190px;
	  bottom: 30px;      
	  background-color: rgba(255, 255, 255, 0.1);    
	}
    </style>
</head>
  
<body>
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
    <div class="overlay_afisare">
    <div id="wrapper">
  
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
</body>
  
</html>
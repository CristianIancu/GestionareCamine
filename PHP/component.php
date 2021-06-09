<?php


function component($etaj, $loc_ocup, $loc_max){
    $element = "
	<div id=\"about\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr etaj: $etaj</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Numărul de locuri ocupate: $loc_ocup</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function component2($etaj, $loc_ocup, $loc_max){
    $element = "
	<div id=\"about2\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr etaj: $etaj</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Numărul de locuri ocupate: $loc_ocup</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function component3($etaj, $loc_ocup, $loc_max){
    $element = "
	<div id=\"about3\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr etaj: $etaj</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Numărul de locuri ocupate: $loc_ocup</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function component4($etaj, $loc_ocup, $loc_max){
    $element = "
	<div id=\"about4\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr etaj: $etaj</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Numărul de locuri ocupate: $loc_ocup</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}
function component5($etaj, $loc_ocup, $loc_max){
    $element = "
	<div id=\"about5\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr etaj: $etaj</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Numărul de locuri ocupate: $loc_ocup</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}
/*
function componentcamera($nrcamera,$studenti,$loc_max)
{
	$element="<div id=\"about\" style=\"display: none;\">
	<b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
	<b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: </h4></p></b>";
	
	foreach($studenti as $student){
		$nume= $student['Nume'];
		$prenume= $student['Prenume'];
		echo $nume.$prenume;
		$element."<b><p style=\"text-align:center\"><h4>".$nume."</h4></p></b>";
	}
	$element."<b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	</div>";
	
    echo $element;
}
*/
function componentcamera($nrcamera,$studenti,$loc_max)
{
	$names=[];
	$pre=[];
	foreach($studenti as $value){
		array_push($names,$value["Nume"]);
		array_push($pre,$value["Prenume"]);
	}
	$element="<div id=\"about\" style=\"display: none;\">
	<b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
	<b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: </h4></p></b>
	<b><p style=\"text-align:center\"><h4>$names[0] $pre[0]</h4></p></b>
	<b><p style=\"text-align:center\"><h4>$names[1] $pre[1]</h4></p></b>
	<b><p style=\"text-align:center\"><h4>$names[2] $pre[2]</h4></p></b>
	<b><p style=\"text-align:center\"><h4>$names[3] $pre[3]</h4></p></b>
	<b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	</div>";

  echo $element;
}


function componentcamera2($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about2\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera3($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about3\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera4($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about4\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera5($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about5\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera6($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about6\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera7($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about7\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera8($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about8\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera9($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about9\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}

function componentcamera10($nrcamera,$studenti,$loc_max)
{
	$element = "
	<div id=\"about10\" style=\"display: none;\">
		   <b><p style=\"text-align:center\"><h4>Număr cameră: $nrcamera</h4></p></b>
		   <b><p style=\"text-align:center\"><h4>Studenții ce se află în cameră: $studenti</h4></p></b>
		   <b><p style=\"text-align:center\" ><h4>Numărul de locuri maxime: $loc_max</h4></p></b>
	
	</div>
	
	
	
    ";
    echo $element;
}






?>

<?php


function component($etaj, $loc_ocup, $loc_max){
    $element = "
	<div id=\"about\">
      <div class=\"container_det\">
           
                  <b><p>Nr etaj:$etaj</p></b>
                  <b><p>Nr locuri ocupate:$loc_ocup</p></b>
                  <b><p>Nr locuri maxime:$loc_max</p></b>
                  
      </div>
           
    </div>
	
	
	
    ";
    echo $element;
}
?>

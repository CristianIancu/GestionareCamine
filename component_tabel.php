<?php


function component_tabel($nume, $prenume, $universitate,$facultate,$specializare,$medie,$cnp,$nr_matricol,$serie,$sex,$adresa,$localitate,$judet,$tara,$email,$tel,$cheie){
    $element = "
	<tr onclick=\"showHideRow('hidden_row$cheie');\">
                <td>$nume</td>
				<td>$prenume</td>
                <td>$universitate</td>
                <td>$facultate</td>
                <td>$specializare</td>
				<td>$medie</td>
				<td>$cnp</td>
				<td>$nr_matricol</td>
				
            </tr>
			
            <tr id=\"hidden_row$cheie\" class=\"hidden_row\">
                <td>$serie</td>
				<td>$sex</td>
                <td>$adresa</td>
                <td>$localitate</td>
                <td>$judet</td>
				<td>$tara</td>
				<td>$email</td>
				<td>$tel</td>
            </tr>
	
	
	
    ";
    echo $element;
}
?>

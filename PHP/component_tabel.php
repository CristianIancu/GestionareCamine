<?php


function component_tabel($nume, $prenume, $universitate,$facultate,$specializare,$medie,$cnp,$nr_matricol,$serie,$Gen,$adresa,$localitate,$judet,$tara,$email,$tel,$cheie){
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
                <td><b>Serie</b>: $serie</td>
				<td><b>Gen:</b> $Gen</td>
                <td><b>Adresa:</b> $adresa</td>
                <td><b>Localitate:</b> $localitate</td>
                <td><b>Județ:</b> $judet</td>
				<td><b>Țara:</b> $tara</td>
				<td><b>Email:</b> $email</td>
				<td><b>Telefon:</b> $tel</td>
            </tr>
	
	
	
    ";
    echo $element;
}
?>

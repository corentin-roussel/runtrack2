<style><?php include 'style.css'?></style>


<?php
$str = "Salut !";
$int = 6;
$flo = 3.6;
$bool = true;



echo 
"<table> 
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>String</td>
            <td>str</td>
            <td>$str</td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>int</td>
            <td>$int</td>
        </tr>
        <tr>
            <td>Float</td>
            <td>float</td>
            <td>$flo</td>
        </tr>
        <tr>
            <td>Boolean</td>
            <td>bool</td>
            <td>$bool</td>
        </tr>
    </tbody>
</table>";
?>
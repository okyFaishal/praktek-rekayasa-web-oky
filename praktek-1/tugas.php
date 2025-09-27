<?php
// Buat sebuah variabel array, lalu encode ke format JSON.
$arrayNilai = array(80, 90, 85, 80, 70, 95, 90);
echo json_encode($arrayNilai);
echo '<hr>';


// Buat sebuah variabel yang berisi json, lalu decode variabel tersebut ke dalam bentuk PHP Object dan PHP Array, kemudian akses nilai pada variabel hasil decode tersebut masingmasing.

// json array
$jsonArrayNilai = '[80, 90, 85, 80, 70, 95, 90]';
$arrayNilai = json_decode($jsonArrayNilai);
echo $arrayNilai[0];
echo '<hr>';

// json object
$jsonObjNilai = '{"RPL": 90, "Rekayasa WEB": 95, "Machine Learning": 85}';
$objNilai = json_decode($jsonObjNilai);
echo $objNilai -> RPL

?>
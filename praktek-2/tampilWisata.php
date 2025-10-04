<?php
function curl ($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

// alamat localhost untuk dile getWisata.php, ambil hasil export JSON
$send = curl('http://localhost/praktek%20rekayasa%20web/praktek-2/getWisata.php');

// mengubah json menjadi array
$data = json_decode($send, TRUE);

foreach ($data as $row) {
  echo $row['id_wisata'].'<br/>';
  echo $row['kota'].'<br/>';
  echo $row['landmark'].'<br/>';
  echo $row['tarif'].'<br/>';
  echo '<hr/>';
}
?>
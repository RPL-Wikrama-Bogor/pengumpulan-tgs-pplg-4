<?php
  $td = 5440;

  $jam = $td / 3600;
  $menit = ($td % 3600) / 60; 
  $detik = $td % 60;

  // hasil tidak boleh decimal
  echo"Jam: " .$jam;
  echo"Menit: " .$menit;
  echo"Detik: " .$detik;

  return 0;
?>
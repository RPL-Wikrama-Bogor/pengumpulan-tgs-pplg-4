<?php

$inputDetik=10000;

$jumlahjam=floor($inputDetik/3600);
$jumlahmenit=floor($inputDetik%3600);
$jumlahmenit=floor($jumlahmenit/60);
$detik=floor($inputDetik%60);


echo "$jumlahjam jam $jumlahmenit menit $detik detik"
;
?>
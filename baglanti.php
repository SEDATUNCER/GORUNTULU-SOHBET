<?php

	### MYSQL VERİ TABANINA BAĞLANILIYOR 	##################################
	$vt_host	= 'localhost';
	$vt_user	= 'root';
	$vt_pass	= '12345678';
	$veritabani = 'veritabani';
	###################################################################
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysqli = new mysqli($vt_host, $vt_user, $vt_pass, $veritabani);
	$mysqli -> set_charset('utf8');
	$mysqli -> connect_error;
	
?>

<?php
	include "conn.php";
	
	$id = $_GET['id'];
	
	$q="DELETE FROM `historymotorbaru` WHERE id='$id'";
	mysqli_query($conn,$q);
	
	$warning="Riwayat berhasil dihapus";
	
	$url='riwayatmotorbaru.php?'.'&w='.urlencode($warning);
	//echo $url;
	header('location: ./'.$url);
?>

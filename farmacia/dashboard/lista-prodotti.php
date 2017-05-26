<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	
	

	$q = mysqli_query($con, "SELECT * FROM prodotto ORDER BY id_prodotto ASC") or die().mysqli_errno($con);

	while ($row = mysqli_fetch_assoc($q)) 
	{
		$prodotto[] = $row;
	}


	if (isset($_GET['canc'])) 
	{
		$q = mysqli_query($con, "DELETE FROM prodotto WHERE id_prodotto = '".$_GET['canc']."'  ") or die().mysqli_errno($con);
		header('location:lista-prodotti.php');
	}

	$smarty->assign('prodotto', $prodotto);

	$smarty->assign('titolo_pagina', 'lista prodottii');

	$smarty->display('lista-prodotti.tpl');

?>
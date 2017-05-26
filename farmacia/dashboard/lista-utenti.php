<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	
	

	$q = mysqli_query($con, "SELECT * FROM utente WHERE gruppo = 'user' ORDER BY id_utente ASC") or die().mysqli_errno($con);

	while ($row = mysqli_fetch_assoc($q)) 
	{
		$utente[] = $row;
	}


	if (isset($_GET['canc'])) 
	{
		$q = mysqli_query($con, "DELETE FROM utente WHERE id_utente = '".$_GET['canc']."'  ") or die().mysqli_errno($con);
		header('location:lista-utenti.php');
	}

	$smarty->assign('utente', $utente);

	$smarty->assign('titolo_pagina', 'lista utenti');

	$smarty->display('lista-utenti.tpl');

?>
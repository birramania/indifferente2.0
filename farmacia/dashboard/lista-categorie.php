<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	
	

	$q = mysqli_query($con, "SELECT * FROM categoria ORDER BY id_categoria ASC") or die().mysqli_errno($con);

	while ($row = mysqli_fetch_assoc($q)) 
	{
		$categoria[] = $row;
	}


	if (isset($_GET['canc'])) 
	{
		$q = mysqli_query($con, "DELETE FROM categoria WHERE id_categoria = '".$_GET['canc']."'  ") or die().mysqli_errno($con);
		header('location:lista-categorie.php');
	}

	$smarty->assign('categoria', $categoria);

	$smarty->assign('titolo_pagina', 'lista categorie');

	$smarty->display('lista-categorie.tpl');

?>
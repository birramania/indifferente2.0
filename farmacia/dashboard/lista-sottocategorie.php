<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	
	

	$q = mysqli_query($con, "SELECT * FROM sottocategoria ORDER BY nome ASC") or die().mysqli_errno($con);

	while ($row = mysqli_fetch_assoc($q)) 
	{
		$sottocategoria[] = $row;
	}


	if (isset($_GET['canc'])) 
	{
		$q = mysqli_query($con, "DELETE FROM sottocategoria WHERE id_sottocategoria = '".$_GET['canc']."'  ") or die().mysqli_errno($con);
		header('location:lista-sottocategorie.php');
	}

	

	$smarty->assign('sottocategoria', $sottocategoria);

	$smarty->assign('titolo_pagina', 'lista sottocategorie');

	$smarty->display('lista-sottocategorie.tpl');

?>
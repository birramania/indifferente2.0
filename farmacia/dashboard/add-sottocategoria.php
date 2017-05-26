<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	if (isset($_POST['submit'])) 
	{

		$nome = $_POST['nome'];

		$q = mysqli_query($con, "INSERT INTO sottocategoria(nome) VALUES ('$nome')") or die().mysqli_errno($con);
	}

	$smarty->assign('titolo_pagina', 'Nuova categoria');

	$smarty->display('add-sottocategoria.tpl');

?>
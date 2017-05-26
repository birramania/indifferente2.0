<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	if (isset($_POST['submit'])) 
	{
		$nome_gruppo = $_POST['nome'];

		$q = mysqli_query($con, "INSERT INTO gruppo(nome) VALUES ('$nome_gruppo')") or die().mysqli_errno($con);
	}

	$smarty->assign('titolo_pagina', 'Add gruppo');

	$smarty->display('add-gruppo.tpl');

?>
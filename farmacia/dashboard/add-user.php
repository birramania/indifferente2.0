<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	$q = mysqli_query($con, "SELECT nome FROM gruppo") or die().mysqli_errno($con);

	if (mysqli_num_rows($q) > 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$gruppo[] = $row;

			
		}
	}

	mysqli_close($con);

	if (isset($_POST['submit'])) 
	{

		$nome = $_POST['nome'];
		$cognome = $_POST['cognome'];
		$citta = $_POST['citta'];
		$cap = $_POST['cap'];
		$indirizzo = $_POST['indirizzo'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user_group = $_POST['gruppo'];

		$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

		$q = mysqli_query($con, "INSERT INTO utente(nome, cognome, citta, cap, indirizzo, telefono, email, username, password, gruppo) VALUES
													('$nome', '$cognome', '$citta', '$cap', '$indirizzo', '$telefono', '$email', '$username', md5('$password'), '$user_group')") or die().mysqli_errno($con);
	}

	$smarty->assign('gruppo', $gruppo);

	$smarty->assign('titolo_pagina', 'Add user');

	$smarty->display('add-user.tpl');

?>
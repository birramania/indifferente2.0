<?php
require '../libs/Smarty.class.php';
$smarty = new smarty;

$con = new mysqli('localhost', 'root', '', 'farmacia');

$q = mysqli_query($con, "SELECT nome FROM gruppo") or die().mysqli_errno($con);

	if (mysqli_num_rows($q) > 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$gruppo[] = $row;

			
		}
	}

if (isset($_GET['alter'])) 
	{

		$q = mysqli_query($con, "SELECT * FROM utente WHERE id_utente = '".$_GET['alter']."' ") or die().mysqli_errno($con);

		$row = mysqli_fetch_row($q);

		$smarty->assign('utente', $row);

	}

if (isset($_POST['alter'])) 
{
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$indirizzo = $_POST['indirizzo'];
	$cap = $_POST['cap'];
	$citta = $_POST['citta'];
	$telefono = $_POST['telefono'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$gruppo = $_POST['gruppo'];

	$query_modifica_utente = mysqli_query($con, "UPDATE utente SET nome = '$nome', 
																cognome = '$cognome',
																citta = '$citta',
																cap = '$cap',
																indirizzo = '$indirizzo',
																telefono = '$telefono',
																email = '$email',
																username = '$username',
																password = md5('$password'),
																gruppo = '$gruppo' ")
																or die().mysqli_errno($con);

	header('location:lista-utenti.php');
}

$smarty->assign('gruppo', $gruppo);

$smarty->assign('titolo_pagina', 'modifica utente');

$smarty->display('modifica-utente.tpl');

?>
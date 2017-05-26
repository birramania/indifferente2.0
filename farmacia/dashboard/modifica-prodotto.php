<?php
require '../libs/Smarty.class.php';
$smarty = new smarty;

$con = new mysqli('localhost', 'root', '', 'farmacia');


	$q = mysqli_query($con, "SELECT nome FROM categoria ORDER BY nome ASC") or die().mysqli_errno($con);

	if (mysqli_num_rows($q) > 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$categoria[] = $row;

			
		}
		$smarty->assign('categoria', $categoria);


	}


	$q = mysqli_query($con, "SELECT nome FROM sottocategoria ORDER BY nome ASC") or die().mysqli_errno($con);

	if (mysqli_num_rows($q) > 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$sottocategoria[] = $row;

			
		}
		$smarty->assign('sottocategoria', $sottocategoria);


	}



if (isset($_GET['alter'])) 
	{

		$q3 = mysqli_query($con, "SELECT * FROM prodotto WHERE id_prodotto LIKE '".$_GET['alter']."' ") or die().mysqli_errno($con);

		$row = mysqli_fetch_row($q3);

		$smarty->assign('prodotto', $row);

	}

if (isset($_POST['alter'])) 
{
	$nome = $_POST['nome'];
	$codice = $_POST['codice'];
	$categoria = $_POST['categoria'];
	$sottocategoria = $_POST['sottocategoria'];
	$descrizione = $_POST['descrizione'];
	$prezzo_f = $_POST['prezzo_f'];
	$prezzo_o = $_POST['prezzo_o'];
	$quantita = $_POST['quantita'];
	$immagine = $_POST['immagine'];

	$query_modifica_utente = mysqli_query($con, "UPDATE prodotto SET nome = '$nome', 
																codice = '$codice',
																categoria = '$categoria',
																sottocategoria = '$sottocategoria',
																descrizione = '$descrizione',
																prezzo_f = '$prezzo_f',
																prezzo_o = '$prezzo_o',
																quantita = '$quantita',
																immagine = '$immagine'
																WHERE codice = '".$_POST['codice']."' ") or die().mysqli_errno($con);

	header('location:lista-prodotti.php');
}



$smarty->assign('titolo_pagina', 'modifica utente');

$smarty->display('modifica-prodotto.tpl');

?>
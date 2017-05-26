<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	$q = mysqli_query($con, "SELECT nome FROM categoria ORDER BY nome ASC") or die().mysqli_errno($con);

	if (mysqli_num_rows($q) > 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$categoria[] = $row;

			
		}
	}

	mysqli_close($con);


	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	$q = mysqli_query($con, "SELECT nome FROM sottocategoria ORDER BY nome ASC") or die().mysqli_errno($con);

	if (mysqli_num_rows($q) > 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$sottocategoria[] = $row;

			
		}
	}

	mysqli_close($con);

$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	

if (isset($_POST['submit'])) 
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

	$q = mysqli_query($con, "INSERT INTO prodotto(nome, codice, categoria, sottocategoria, descrizione, prezzo_f, prezzo_o, quantita, immagine) VALUES 
											('$nome', '$codice', '$categoria', '$sottocategoria', '$descrizione', '$prezzo_f', '$prezzo_o', '$quantita', '$immagine')")	or die().mysqli_errno($con);

	header('location:add-prodotto.php');

}


mysqli_close($con);


	$smarty->assign('categoria', $categoria);

	$smarty->assign('sottocategoria', $sottocategoria);

	$smarty->assign('titolo_pagina', 'Add prodotto');

	$smarty->display('add-prodotto.tpl');

?>
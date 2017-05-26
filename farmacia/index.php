<?php
	require('libs/SmartyBC.class.php');

	$smarty = new SmartyBC;

	$con = new mysqli('localhost', 'root', '', 'farmacia') or die().mysqli_errno($con);

	# <===== ESEGUO LA QUERY NEL DATABASE =====>

	$num_elementi = 12;

	if (isset($_GET['page'])) 
	{
		if ($_GET['page'] > 1) 
		{
			$start = ($_GET['page']-1) * $num_elementi;
		}else{
			$start = 0;
		}
	}else{
		$start = 0;
	}

	$p = mysqli_query($con, "SELECT COUNT(*) AS conteggio FROM prodotto") or die().mysqli_errno($con);

	$array = mysqli_fetch_assoc($p);

	$tot_righe= $array['conteggio'];

	$tot_pag = ceil(($tot_righe / $num_elementi)+1);



	$q = mysqli_query($con, "SELECT * FROM prodotto LIMIT ".$start.", ".$num_elementi) or die().mysqli_errno($con);

	if (mysqli_num_rows($q) != 0)
	{
		while ($row = mysqli_fetch_assoc($q)) 
		{
			$prodotto[] = $row;
		}
	}

	for ($x=1; $x < $tot_pag; $x++) 
	{ 
		$pag[] = $x;
	}

	$smarty->assign('pag', $pag);

	$smarty->assign('prodotto', $prodotto);

	$smarty->assign('titolo_pagina', 'index');

	$smarty->display('index.tpl');

?>
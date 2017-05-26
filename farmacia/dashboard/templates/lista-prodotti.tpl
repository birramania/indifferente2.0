<!DOCTYPE html>
<html>
<head>
	<title>{$titolo_pagina}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/default1.css">
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <link rel="stylesheet" type="text/css" href="../css/span.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<div class="container-fluid" id="header">
	<div class="row">
		<div class="col-sm-12">
			<span id="logo"></span>
			<h1>FARMACIAONLINE</h1>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2" id="main">
			{include file='main.tpl'}
		</div>

		<div class="col-sm-8 wrapper" id="wrapper">
			<table>
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>CODICE</th>
			<th>CATEGORIA</th>
			<th>SOTTOCATEGORIA</th>
			<th>PREZZO_F</th>
			<th>PREZZO_O</th>
			<th>QUANTITA'</th>
			<th colspan="2"></th>
		</tr>

		{section name=i loop=$prodotto}
		<tr>
			<td>{$prodotto[i].id_prodotto}</td>
			<td>{$prodotto[i].nome}</td>
			<td>{$prodotto[i].codice}</td>
			<td>{$prodotto[i].categoria}</td>
			<td>{$prodotto[i].sottocategoria}</td>
			<td>{$prodotto[i].prezzo_f}</td>
			<td>{$prodotto[i].prezzo_o}</td>
			<td>{$prodotto[i].quantita}</td>
			<td><a href="modifica-prodotto.php?alter={$prodotto[i].id_prodotto}">alter</a></td>
			<td><a href="lista-prodotti.php?canc={$prodotto[i].id_prodotto}">delate</a></td>
		</tr>
		{/section}
	</table>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>


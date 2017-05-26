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
			
			<form method="POST" action="add-prodotto.php" id="form">
				<h3>NUOVO PRODOTTO</h3>
				<input type="text" name="nome" value="" placeholder="Nome">
				<input type="text" name="codice" value="" placeholder="Codice">

				<select name="categoria">
		{foreach from=$categoria item=item key=key}
			<option value="{$item.nome}">{$item.nome}</option>
		{/foreach}
	</select>
				
				<select name="sottocategoria">
		{foreach from=$sottocategoria item=item key=key}
			<option value="{$item.nome}">{$item.nome}</option>
		{/foreach}
	</select>

				<input type="text" name="descrizione" value="" placeholder="Descrizione">
				<input type="number" step="0.01" name="prezzo_f" value="" placeholder="Prezzo di fabbrica">
				<input type="number" step="0.01" name="prezzo_o" value="" placeholder="Prezzo scontato">
				<input type="number" step="1" name="quantita" value="" placeholder="Quantità">
				<input type="text" name="immagine" value="" placeholder="Immagine">
	
				<input type="submit" name="submit" value="aggiungi prodotto">
			</form>

		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>


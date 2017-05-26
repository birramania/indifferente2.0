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
			
	<form method="POST" action="modifica-prodotto.php" id="form">
		<label>ID</label><input type="number" name="id_prodotto" value="{$prodotto[0]}">
		<label>Nome</label><input type="text" name="nome" value="{$prodotto[1]}">
		<label>Codice</label><input type="text" name="codice"  value="{$prodotto[2]}">
		<label>Categoria</label>
		<select name="categoria">
					{foreach from=$categoria item=item key=key}
						<option value="{$item.nome}" >{$item.nome}</option>
					{/foreach}
				</select>
		<label>Sottocategoria</label>
				<select name="sottocategoria">
					{foreach from=$sottocategoria item=item key=key}
						<option value="{$item.nome}">{$item.nome}</option>
					{/foreach}
				</select>
		<label>Descrizione</label><input type="text" name="descrizione" value="{$prodotto[5]}">
		<label>Prezzo_f</label><input type="text" name="prezzo_f" value="{$prodotto[6]}">
		<label>Prezzo_o</label><input type="text" name="prezzo_o" value="{$prodotto[7]}">
		<label>Quantità</label><input type="number" name="quantita" value="{$prodotto[8]}">
		<label>Immagine</label><input type="text" name="immagine" value="{$prodotto[9]}">

		<input type="submit" name="alter" value="Modifica">
	</form>


		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>


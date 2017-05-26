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
			<form method="POST" action="modifica-utente.php" id="form">
	
		<label>Nome</label><input type="text" name="nome" value="{$utente[1]}">
		<label>Cognome</label><input type="text" name="cognome" value="{$utente[2]}">
		<label>Città</label><input type="text" name="citta" value="{$utente[3]}">
		<label>CAP</label><input type="text" name="cap" maxlength="5" step="00000" value="{$utente[4]}">
		<label>Indirizzo</label><input type="text" name="indirizzo" value="{$utente[5]}">
		<label>Telefono</label><input type="text" name="telefono" value="{$utente[6]}">
		<label>Email</label><input type="email" name="email" maxlength="60" value="{$utente[7]}">
		<label>Username</label><input type="text" name="username" readonly="readonly" value="{$utente[8]}">
		<label>Password</label><input type="password" name="password" readonly="readonly" value="{$utente[9]}">
		<select name="gruppo">
		{foreach from=$gruppo item=item key=key}
			<option value="{$item.nome}">{$item.nome}</option>
		{/foreach}
	</select>

		<input type="submit" name="alter" value="Modifica">

	</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>


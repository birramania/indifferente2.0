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
			<form method="POST" action="add-user.php" id="form">
<h3>CREAZIONE NUOVO ACCOUNT</h3>
	<input type="text" name="nome" value="" placeholder="Nome">
	
	<input type="text" name="cognome" value="" placeholder="Cognome">
	
	<input type="text" name="citta" value="" placeholder="Città">
	
	<input type="text" name="cap" value="" placeholder="CAP">
	
	<input type="text" name="indirizzo" value="" placeholder="Indirizzo">

	<input type="text" name="telefono" value="" placeholder="Telefono">
	
	<input type="email" name="email" value="" placeholder="Email">

	<input type="text" name="username" value="" placeholder="Username">

	<input type="password" name="password" value="" placeholder="Password">

	<select name="gruppo">
		{foreach from=$gruppo item=item key=key}
			<option value="{$item.nome}">{$item.nome}</option>
		{/foreach}
	</select>
	<input type="submit" name="submit" value="Aggiungi">
</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>


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
			<th colspan="2"></th>
		</tr>

		{section name=i loop=$sottocategoria}
		<tr>
			<td>{$sottocategoria[i].id_sottocategoria}</td>
			<td>{$sottocategoria[i].nome}</td>
			<td><a href="modifica-sottocategorie.php?alter={$sottocategoria[i].id_sottocategoria}">alter</a></td>
			<td><a href="lista-sottocategorie.php?canc={$sottocategoria[i].id_sottocategoria}">delate</a></td>
		</tr>
		{/section}
	</table>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>


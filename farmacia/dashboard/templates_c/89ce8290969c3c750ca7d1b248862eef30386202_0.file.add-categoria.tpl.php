<?php
/* Smarty version 3.1.30, created on 2017-05-24 13:06:14
  from "C:\xampp\htdocs\farmacia\dashboard\templates\add-categoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59256926ea7927_46110577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ce8290969c3c750ca7d1b248862eef30386202' => 
    array (
      0 => 'C:\\xampp\\htdocs\\farmacia\\dashboard\\templates\\add-categoria.tpl',
      1 => 1495552608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_59256926ea7927_46110577 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titolo_pagina']->value;?>
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

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
			<?php $_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>

		<div class="col-sm-8 wrapper" id="wrapper">
			<form method="POST" action="add-categoria.php" id="form">
		
		<h3>NUOVA CATEGORIA</h3>
	
	<input type="text" name="nome" value="" placeholder="Nome Categoria">
	
	<input type="submit" name="submit" value="Aggiungi">
</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>

<?php }
}

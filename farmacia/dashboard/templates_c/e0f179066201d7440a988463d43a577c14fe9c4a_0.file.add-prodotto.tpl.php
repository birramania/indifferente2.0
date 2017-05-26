<?php
/* Smarty version 3.1.30, created on 2017-05-24 13:06:11
  from "C:\xampp\htdocs\farmacia\dashboard\templates\add-prodotto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592569236d5052_53511750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f179066201d7440a988463d43a577c14fe9c4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\farmacia\\dashboard\\templates\\add-prodotto.tpl',
      1 => 1495623871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_592569236d5052_53511750 (Smarty_Internal_Template $_smarty_tpl) {
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
			
			<form method="POST" action="add-prodotto.php" id="form">
				<h3>NUOVO PRODOTTO</h3>
				<input type="text" name="nome" value="" placeholder="Nome">
				<input type="text" name="codice" value="" placeholder="Codice">

				<select name="categoria">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</select>
				
				<select name="sottocategoria">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sottocategoria']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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

<?php }
}

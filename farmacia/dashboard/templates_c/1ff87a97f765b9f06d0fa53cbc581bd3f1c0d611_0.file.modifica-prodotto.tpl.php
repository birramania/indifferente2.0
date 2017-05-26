<?php
/* Smarty version 3.1.30, created on 2017-05-24 13:14:30
  from "C:\xampp\htdocs\farmacia\dashboard\templates\modifica-prodotto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59256b1643fa87_35509027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff87a97f765b9f06d0fa53cbc581bd3f1c0d611' => 
    array (
      0 => 'C:\\xampp\\htdocs\\farmacia\\dashboard\\templates\\modifica-prodotto.tpl',
      1 => 1495624465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_59256b1643fa87_35509027 (Smarty_Internal_Template $_smarty_tpl) {
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
			
	<form method="POST" action="modifica-prodotto.php" id="form">
		<label>ID</label><input type="number" name="id_prodotto" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[0];?>
">
		<label>Nome</label><input type="text" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[1];?>
">
		<label>Codice</label><input type="text" name="codice"  value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[2];?>
">
		<label>Categoria</label>
		<select name="categoria">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
		<label>Sottocategoria</label>
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
		<label>Descrizione</label><input type="text" name="descrizione" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[5];?>
">
		<label>Prezzo_f</label><input type="text" name="prezzo_f" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[6];?>
">
		<label>Prezzo_o</label><input type="text" name="prezzo_o" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[7];?>
">
		<label>Quantità</label><input type="number" name="quantita" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[8];?>
">
		<label>Immagine</label><input type="text" name="immagine" value="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[9];?>
">

		<input type="submit" name="alter" value="Modifica">
	</form>


		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

</body>
</html>

<?php }
}

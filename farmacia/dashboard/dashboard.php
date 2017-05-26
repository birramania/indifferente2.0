<?php

	require('../libs/SmartyBC.class.php');

	$smarty = new SmartyBc;

	$smarty->assign('titolo_pagina', 'Dashboard');

	$smarty->display('dashboard.tpl');

?>
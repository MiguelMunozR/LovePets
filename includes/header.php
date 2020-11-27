<!DOCTYPE html>
<html lang="sp" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0, shirt-to-fit=no">
        <title>Pagina</title>
        <?php
        require_once('Public/includes/scripts.php');
        if (!isset($_SESSION)) session_start();
        if (!isset($_SESSION['Active']))$_SESSION['Active'] = false;
        ?>
    </head>
        <header class="row mx-auto">
             <img class="col-lg-2 col-5" src="Public/img/logo.png" alt="Logotipo de pagina">
            <div id="right" class="align-self-center" <?php if($_SESSION['Active']){?> style="display: block"<?php }else{ ?> style="display: none"<?php } ?>>
	<div id="btn-logout" class="btn col-11" onclick="logout()">
		logout
	</div>
            </div>
        </header>

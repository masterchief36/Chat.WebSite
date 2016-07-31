<?php
require 'init.php';

if(!isset($_GET['f'])) {	

	$page = isset($_GET['p']) ? $_GET['p'] : 'home';
	$page = rtrim($page, "/");
	$folder = "view/$page/";

	$content = "view/$page/content.php";
	$pre = "view/$page/pre.php"

	if(file_exists($content)) {

		if(file_exists($pre)){
			require $pre;
		}

		require_once 'view/shared/header.php';
    	require_once $ContentURL;
    	require_once 'view/shared/footer.php';
	} else {
		require_once 'view/shared/header.php';
    	require_once 'view/shared/404.php';
    	require_once 'view/shared/footer.php';
	}
}



?>

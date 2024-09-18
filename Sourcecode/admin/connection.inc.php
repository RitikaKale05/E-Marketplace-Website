<?php
session_start();
$con=mysqli_connect("localhost:3308","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/phpeCom/');
define('SITE_PATH','http://localhost/phpeCom/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
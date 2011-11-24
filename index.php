<?php
$data = array();
$data['title'] = 'dynamiskt som bara den...';
$data['header'] = '<h1>Worst. Frontcontroller. Ever.</h1>';
$data['menu'] = "<ul><li><a href='?s=0'>Zero</a></li><li><a href='?s=1'>One</a></li><li><a href='?s=2'>Two</a></li><li><a href='?s=3'>Three</a></li><li><a href='?s=4'>Four</a></li></ul><input type=search placeholder='Search...'>";
$data['main'] = file_get_contents('article.php');
$data['footer'] = '<p>&copy;2k11 ake1</p>';
$data['style'] = isset($_REQUEST['s']) ? $_REQUEST['s'] : '0';
include('page.tpl.php');
exit;

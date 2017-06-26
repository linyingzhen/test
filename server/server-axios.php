<?php 
// header('Content-Type:text/xml; charset=utf-8');

// GET
$id = @$_GET['id']?$_GET['id']:'noid';
$name = @$_GET['name']?$_GET['name']:'noname'; //如果有name则接收，无name则为''

// POST
$c = @$_POST['c']?$_POST['c']:'noc';
$d = @$_POST['d']?$_POST['d']:'nod';

$arr = array('a'=>$id, 'b'=>$name, 'c'=>$c,'d'=>$d);
$json = json_encode($arr);
exit($json);

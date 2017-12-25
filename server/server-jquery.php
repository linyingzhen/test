<?php 
//json
/*$arr = array('a'=>1,'b'=>2,'c'=>3);
$json = json_encode($arr);
exit($json);*/



// jsonp
// header('Content-Type:text/xml; charset=utf-8');
$arr = array('a'=>1, 'b'=>2, 'c'=>3);
$json = json_encode($arr);
$callback = $_GET['callback'];
exit($callback."($json)");
//注意callback是js传过来的参数名称

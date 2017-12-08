<?php
//使用 die() 函数
if (!file_exists("welcome.txt")) {
    die("File not found");
} else {
    $file = fopen("welcome.txt", "r");
}
?>

<!--创建自定义错误处理器-->

<?php
////error handler function
//function customError($errno, $errstr)
//{
//    echo "<b>Error:</b> [$errno] $errstr";
//}
//
////set error handler
//set_error_handler("customError");
//
////trigger error
//echo($test);
//?>

<!--触发错误-->
<?php
//error handler function
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br />";
    echo "Ending Script";
    die();
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>1)
{
    trigger_error("Value must be 1 or below",E_USER_WARNING);
}
?>

<!--通过 E-Mail 发送错误消息-->
<?php
////error handler function
//function customError($errno, $errstr)
//{
//    echo "<b>Error:</b> [$errno] $errstr<br />";
//    echo "Webmaster has been notified";
//    error_log("Error: [$errno] $errstr",1,
//        "someone@example.com","From: webmaster@example.com");
//}
//
////set error handler
//set_error_handler("customError",E_USER_WARNING);
//
////trigger error
//$test=2;
//if ($test>1)
//{
//    trigger_error("Value must be 1 or below",E_USER_WARNING);
//}
//?>





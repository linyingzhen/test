<?php
session_start();

if (isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views'] + 1;

else
    $_SESSION['views'] = 1;
echo "Views=" . $_SESSION['views'];
?>

<html>
<body>

<?php
//retrieve session data
echo "Pageviews=" . $_SESSION['views'];
?>

<?php
//unset() 函数用于释放指定的 session 变量
unset($_SESSION['views']);

//session_destroy() 函数彻底终结 session
session_destroy();
?>


</body>
</html>
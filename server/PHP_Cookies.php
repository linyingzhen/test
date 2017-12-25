<!--创建 cookie:setcookie(name, value, expire, path, domain)-->
<?php
setcookie("user", "Alex Porter", time() + 3600);
setcookie("phone", "123456", time() + 3600);
?>

<html>
<body>
<!--取回 Cookie 的值-->
<?php
// Print a cookie
echo $_COOKIE["user"];
echo $_COOKIE["phone"];

// A way to view all cookies
print_r($_COOKIE);
?>

<!--使用 isset() 函数来确认是否已设置了 cookie-->
<?php
if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
    echo "Welcome guest!<br />";
?>

<!--删除 cookie 删除 cookie 时，您应当使过期日期变更为过去的时间点-->
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
</body>
</html>


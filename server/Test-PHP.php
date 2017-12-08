<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test-PHP</title>
    <style>
        .error {
            color: #FF0000;
        }

        .formbox {
            display: none;
        }
    </style>
</head>

<body>

<div class="Basicsbox">
    <?php
    //hello
    #hello
    /*
     * hello
    hello
    */
    echo "hello";

    //函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。
    echo "a";
    ECHO "a";
    eChO "a";
    //    所有变量都对大小写敏感。
    $color = "red";
    echo $color . "<br>";
    echo $Color . "<br>";
    echo $cOLoR . "<br>";

    //    变量
    /*
     * 变量以 $ 符号开头，其后是变量的名称
    变量名称必须以字母或下划线开头
    变量名称不能以数字开头
    变量名称只能包含字母数字字符和下划线（A-z、0-9 以及 _）
    变量名称对大小写敏感（$y 与 $Y 是两个不同的变量）
    */
    $x20170914100816 = 1;
    $y20170914100832 = 2;
    $z = $x20170914100816 + $y20170914100832;
    echo $z;

    //    变量作用域
    /*local（局部）
global（全局）
static（静态）*/


    ?>

    <?php
    // global 关键词用于访问函数内的全局变量。
    $x = 5; // 全局作用域

    function myTest20170914101439()
    {
        $y = 10; // 局部作用域
        echo "<p>测试函数内部的变量：</p>";
        echo "变量 x 是：$x";
        echo "<br>";
        echo "变量 y 是：$y";
    }

    myTest20170914101439();

    echo "<p>测试函数之外的变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
    ?>

    <?php
    // PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。
    $x20170916103453=5;
    $y20170916103453=10;

    function myTest20170914101351() {
      global $x20170916103453,$y20170916103453;
      $y20170916103453=$x20170916103453+$y20170916103453;
    }

    myTest20170914101351();
    echo $y20170916103453; // 输出 15
    ?>

    <?php
    $x20170916103528=5;
    $y20170916103618=10;

    function myTest20170914101517() {
      $GLOBALS['y20170916103618']=$GLOBALS['x20170916103528']+$GLOBALS['y20170916103618'];
    } 

    myTest20170914101517();
    echo $y20170916103618; // 输出 15
    ?>

    <?php
    /*通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
要完成这一点，请在您首次声明变量时使用 static 关键词：*/

    function myTest20170914101816() {
      static $x=0;
      echo $x;
      $x++;
    }

    myTest20170914101816();
    myTest20170914101816();
    myTest20170914101816();

    ?>

    <!-- echo print -->
    <?php 
    /*echo 和 print 之间的差异：
echo - 能够输出一个以上的字符串
print - 只能输出一个字符串，并始终返回 1
提示：echo 比 print 稍快，因为它不返回任何值。*/
// echo 是一个语言结构，有无括号均可使用：echo 或 echo()。

// 显示字符串
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";

// 显示变量
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "My car is a {$cars[0]}";

// print 也是语言结构，有无括号均可使用：print 或 print()。
// 显示字符串
print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
// 显示变量
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "My car is a {$cars[0]}";

/*数据类型：字符串、整数、浮点数、逻辑、数组、对象、NULL。*/
//字符串 单引号内变量不会执行
echo "<br>";
$name = 'hello';
echo "the $name" . "<br>";
echo 'the $name' . '<br>';

// 整数
$x20170914151524 = 5985;
var_dump($x20170914151524);
echo "<br>"; 
$x20170914151524 = -345; // 负数
var_dump($x20170914151524);
echo "<br>"; 
$x20170914151524 = 0x8C; // 十六进制数
var_dump($x20170914151524);
echo "<br>";
$x20170914151524 = 047; // 八进制数
var_dump($x20170914151524);
echo "<br>";

// 浮点数
$x20170914152330 = 10.365;
var_dump($x20170914152330);
echo "<br>"; 
$x20170914152330 = 2.4e3;
var_dump($x20170914152330);
echo "<br>"; 
$x20170914152330 = 8E-5;
var_dump($x20170914152330);

// 逻辑
$x20170914152346 = true;
$y20170914152355 = false;

// 数组
$arr20170914154153 = array("A","B","C");
var_dump($arr20170914154153);

// 对象
class Car
{
    var $color;
    function Car($color="green") {
      $this->color = $color;
    }
    function what_color() {
      return $this->color;
    }
}

function print_vars($obj) {
   foreach (get_object_vars($obj) as $prop => $val) {
     echo "\t$prop = $val\n";
   }
}

// instantiate one object
$herbie = new Car("white");

// show herbie properties
echo "\herbie: Properties\n";
print_vars($herbie);

// NULL值
$x20170914155530="Hello world!";
$x20170914155530=null;
var_dump($x20170914155530);

// 字符串函数
// strlen() 函数返回字符串的长度，以字符计。
echo strlen("Hello world!");

/*strpos() 函数用于检索字符串内指定的字符或文本。
如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE。*/
echo strpos('abc ddd', 'ddd');

// 常量
// 对大小写敏感的常量
define("ABC", "abc");
echo ABC;

// 对大小写不敏感的常量
define("SSS","sss",true);
echo sSs;

//算术运算符 + - * / %
$x20170915172158=10; 
$y20170915172206=6;
echo ($x20170915172158 + $y20170915172206 ."<br>"); // 输出 16
echo ($x20170915172158 - $y20170915172206 ."<br>"); // 输出 4
echo ($x20170915172158 * $y20170915172206 ."<br>"); // 输出 60
echo ($x20170915172158 / $y20170915172206 ."<br>"); // 输出 1.6666666666667
echo ($x20170915172158 % $y20170915172206 ."<br>"); // 输出 4

// 赋值运算符 = += -= *= /= %=
$x20170915172607=10; 
echo $x20170915172607; // 输出 10

$y20170915172607=20; 
$y20170915172607 += 100;
echo $y20170915172607; // 输出 120

$z20170915172607=50;
$z20170915172607 -= 25;
echo $z20170915172607; // 输出 25

$i20170915172607=5;
$i20170915172607 *= 6;
echo $i20170915172607; // 输出 30

$j20170915172607=10;
$j20170915172607 /= 5;
echo $j20170915172607; // 输出 2

$k20170915172607=15;
$k20170915172607 %= 4;
echo $k20170915172607; // 输出 3


// 字符串运算符 . .= 串接 串接赋值
$a20170916101817 = "Hello";
$b20170916101823 = $a20170916101817 . " world!";
echo $b20170916101823; // 输出 Hello world!

$x20170916101830="Hello";
$x20170916101830 .= " world!";
echo $x20170916101830; // 输出 Hello world!

// 递增/递减运算符
/*++$x  前递增 $x 加一递增，然后返回 $x
$x++    后递增 返回 $x，然后 $x 加一递增
--$x    前递减 $x 减一递减，然后返回 $x
$x--    后递减 返回 $x，然后 $x 减一递减*/
$x20170916102207 = 10;
echo ++$x20170916102207;

$y20170916102207 =10;
echo $y20170916102207++;

$z20170916102207=5;
echo --$z20170916102207;

$i20170916102207=5;
echo $i20170916102207--;

// 比较运算符
/*==    等于  $x == $y    如果 $x 等于 $y，则返回 true。
=== 全等（完全相同）    $x === $y   如果 $x 等于 $y，且它们类型相同，则返回 true。
!=  不等于 $x != $y    如果 $x 不等于 $y，则返回 true。
<>  不等于 $x <> $y    如果 $x 不等于 $y，则返回 true。
!== 不全等（完全不同）   $x !== $y   如果 $x 不等于 $y，或它们类型不相同，则返回 true。
>   大于  $x > $y 如果 $x 大于 $y，则返回 true。
<   大于  $x < $y 如果 $x 小于 $y，则返回 true。
>=  大于或等于   $x >= $y    如果 $x 大于或者等于 $y，则返回 true.
<=  小于或等于   $x <= $y    如果 $x 小于或者等于 $y，则返回 true。*/
$x20170916102627=100; 
$y20170916102627="100";

var_dump($x20170916102627 == $y20170916102627);
echo "<br>";
var_dump($x20170916102627 === $y20170916102627);
echo "<br>";
var_dump($x20170916102627 != $y20170916102627);
echo "<br>";
var_dump($x20170916102627 !== $y20170916102627);
echo "<br>";

$a20170916102627=50;
$b20170916102627=90;

var_dump($a20170916102627 > $b20170916102627);
echo "<br>";
var_dump($a20170916102627 < $b20170916102627);

// 逻辑运算符
/*and   与   $x and $y   如果 $x 和 $y 都为 true，则返回 true。
or  或   $x or $y    如果 $x 和 $y 至少有一个为 true，则返回 true。
xor 异或  $x xor $y   如果 $x 和 $y 有且仅有一个为 true，则返回 true。
&&  与   $x && $y    如果 $x 和 $y 都为 true，则返回 true。
||  或   $x || $y    如果 $x 和 $y 至少有一个为 true，则返回 true。
!   非   !$x 如果 $x 不为 true，则返回 true。*/

$x20170916103231=true;
$y20170916103231=false;
$z20170916103231=true;
$i20170916103231=false;

var_dump($x20170916103231 and $y20170916103231);
var_dump($x20170916103231 && $z20170916103231);
var_dump($x20170916103231 || $y20170916103231);
var_dump($x20170916103231 or $y20170916103231);

// 数组运算符
/*+ 联合  $x + $y $x 和 $y 的联合（但不覆盖重复的键）
==  相等  $x == $y    如果 $x 和 $y 拥有相同的键/值对，则返回 true。
=== 全等  $x === $y   如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回 true。
!=  不相等 $x != $y    如果 $x 不等于 $y，则返回 true。
<>  不相等 $x <> $y    如果 $x 不等于 $y，则返回 true。
!== 不全等 $x !== $y   如果 $x 与 $y 完全不同，则返回 true。*/
$x20170916104117 = array("a" => "red", "b" => "green"); 
$y20170916104117 = array("c" => "blue", "d" => "yellow"); 
$z20170916104117 = $x20170916104117 + $y20170916104117; // $x20170916104117 与 $y20170916104117 的联合
var_dump($z20170916104117);
var_dump($x20170916104117 == $y20170916104117);
var_dump($x20170916104117 === $y20170916104117);
var_dump($x20170916104117 != $y20170916104117);
var_dump($x20170916104117 <> $y20170916104117);
var_dump($x20170916104117 !== $y20170916104117);

// 条件语句
/*
if 语句 - 如果指定条件为真，则执行代码
if...else 语句 - 如果条件为 true，则执行代码；如果条件为 false，则执行另一端代码
if...elseif....else 语句 - 选择若干段代码块之一来执行
switch 语句 - 语句多个代码块之一来执行
*/
//  if 语句
/*
if (条件) {
  当条件为 true 时执行的代码;
}
*/
$t20170916104900=date("H");

if ($t20170916104900<"20") {
  echo "Have a good day!";
}

// if...else 语句
/*
if (条件) {
  条件为 true 时执行的代码;
} else {
  条件为 false 时执行的代码;
}
*/
$t20170916111429=date("H");

if ($t20170916111429<"20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// if...elseif....else 语句
/*
if (条件) {
  条件为 true 时执行的代码;
} elseif (condition) {
  条件为 true 时执行的代码;
} else {
  条件为 false 时执行的代码;
}
*/
$t20170916111247=date("H");

if ($t20170916111247<"10") {
  echo "Have a good morning!";
} elseif ($t20170916111247<"20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// switch 语句用于基于不同条件执行不同动作
/*
switch (expression)
{
case label1:
  code to be executed if expression = label1;
  break;  
case label2:
  code to be executed if expression = label2;
  break;
default:
  code to be executed
  if expression is different 
  from both label1 and label2;
}
*/

$favcolor="red";

switch ($favcolor) {
   case "red":
     echo "Your favorite color is red!";
     break;
   case "blue":
     echo "Your favorite color is blue!";
     break;
   case "green":
     echo "Your favorite color is green!";
     break;
   default:
     echo "Your favorite color is neither red, blue, or green!";
}

// 循环
/*
while - 只要指定条件为真，则循环代码块
do...while - 先执行一次代码块，然后只要指定条件为真则重复循环
for - 循环代码块指定次数
foreach - 遍历数组中的每个元素并循环代码块
*/

// while 循环 while 循环在指定条件为 true 时执行代码块。
/*
while (条件为真) {
  要执行的代码;
}
*/

$i20170916112448 = 10;
while($i20170916112448<20){
    echo "i的值为：$i20170916112448 <br>";
    $i20170916112448++;
}

// do...while 循环 do...while 循环首先会执行一次代码块，然后检查条件，如果指定条件为真，则重复循环。
/*
do {
  要执行的代码;
} while (条件为真);
*/

$i = 10;
do {
    echo "i的值为：$i <br>";
    $i++;
} while ($i<20);

// for 循环
/*
for (init counter; test counter; increment counter) {
  code to be executed;
}
*/

for($i20170916142954=0; $i20170916142954<10;$i20170916142954++){
    echo $i20170916142954;
}

// foreach 循环 foreach 循环只适用于数组，并用于遍历数组中的每个键/值对。
/*
foreach ($array as $value) {
  code to be executed;
}
*/
$colors20170916143145 = array("red","green","blue","yellow"); 

foreach ($colors20170916143145 as $value) {
  echo "$value <br>";
}

// 函数 PHP 的真正力量来自它的函数：它拥有超过 1000 个内建的函数。
// 创建用户定义函数
/*
function functionName() {
  被执行的代码;
}
*/
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // 调用函数
// 函数参数
function familyName20170916143839($fname) {
  echo "$fname Zhang.<br>";
}

familyName20170916143839("Li");
familyName20170916143839("Hong");
familyName20170916143839("Tao");
familyName20170916143839("Xiao Mei");
familyName20170916143839("Jian");
// 2个参数
function familyName20170916143825($fname,$year) {
  echo "$fname Zhang. Born in $year <br>";
}

familyName20170916143825("Li","1975");
familyName20170916143825("Hong","1978");
familyName20170916143825("Tao","1983");

// 默认参数值
function setHeight($minheight=50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // 将使用默认值 50
setHeight(135);
setHeight(80);

// 函数 - 返回值 如需使函数返回值，请使用 return 语句
function sum20170916144124($x,$y) {
  $z=$x+$y;
  return $z;
}

echo "5 + 10 = " . sum20170916144124(5,10) . "<br>";
echo "7 + 13 = " . sum20170916144124(7,13) . "<br>";
echo "2 + 4 = " . sum20170916144124(2,4) . "<br>";

// 数组 数组能够在单独的变量名中存储一个或多个值
$cars=array("Volvo","BMW","SAAB");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/*
索引数组 - 带有数字索引的数组
关联数组 - 带有指定键的数组
多维数组 - 包含一个或多个数组的数组
*/
// 索引数组
$cars20170916150725=array("Volvo","BMW","SAAB");
// 或
$cars20170916150736[0]="Volvo";
$cars20170916150736[1]="BMW";
$cars20170916150736[2]="SAAB";

// 获得数组的长度 - count() 函数
$cars20170916150948=array("Volvo","BMW","SAAB");
echo count($cars20170916150948);
// 遍历索引数组
$cars20170916151059=array("Volvo","BMW","SAAB");
$arrlength=count($cars20170916151059);

for($x=0;$x<$arrlength;$x++) {
  echo $cars20170916151059[$x];
  echo "<br>";
}

/*关联数组
关联数组是使用您分配给数组的指定键的数组。*/

// 有两种创建关联数组的方法：
$age20170916151356=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// 或者：
$age20170916151403['Peter']="35";
$age20170916151403['Ben']="37";
$age20170916151403['Joe']="43";

echo "Peter is " . $age20170916151356['Peter'] . " years old." . "<br>";
echo "Joe is " . $age20170916151403['Joe'] . " years old." . "<br>";

// 遍历关联数组 foreach 循环
foreach($age20170916151356 as $x=>$x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// 多维数组 多维数组指的是包含一个或多个数组的数组。
// 两维数组
$cars = array
   (
   array("Volvo",33,20),
   array("BMW",17,15),
   array("Saab",5,2),
   array("Land Rover",15,11)
   );
   
echo $cars[0][0].": 库存：".$cars[0][1].", 已售：".$cars[0][2].".<br>";
echo $cars[1][0].": 库存：".$cars[1][1].", 已售：".$cars[1][2].".<br>";
echo $cars[2][0].": 库存：".$cars[2][1].", 已售：".$cars[2][2].".<br>";
echo $cars[3][0].": 库存：".$cars[3][1].", 已售：".$cars[3][2].".<br>";

for ($row = 0; $row <  count($cars); $row++) {
   echo "<p><b>行数 $row</b></p>";
   echo "<ul>";
   for ($col = 0; $col <  3; $col++) {
     echo "<li>".$cars[$row][$col]."</li>";
   }
   echo "</ul>";
}



// 数组排序 数组中的元素能够以字母或数字顺序进行升序或降序排序。
/*
sort() - 以升序对数组排序
rsort() - 以降序对数组排序
asort() - 根据值，以升序对关联数组进行排序
ksort() - 根据键，以升序对关联数组进行排序
arsort() - 根据值，以降序对关联数组进行排序
krsort() - 根据键，以降序对关联数组进行排序
*/

$arr20170919110017 = array('a','b','c','f','e');
$arr20170919110607 = array('a'=>1,'b'=>3,'c'=>2,'e'=>7,'d'=>3);

// 普通数组
sort($arr20170919110017);
// rsort($arr20170919110017);

// 关联数组
asort($arr20170919110607);
// ksort($arr20170919110607);
// arsort($arr20170919110607);
// krsort($arr20170919110607);



// 普通数组
for($i=0;$i<count($arr20170919110017);$i++){
  echo $arr20170919110017[$i] . "<br>";
}

// 关联数组
foreach ($arr20170919110607 as $key => $value) {
  echo $key . ": " . $value . "<br>";
}

// 全局变量 - 超全局变量 超全局变量 在 PHP 4.1.0 中引入，是在全部作用域中始终可用的内置变量。
/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

// $GLOBALS — 引用全局作用域中可用的全部变量
$x20170919155100 = 75; 
$y20170919155108 = 25;
 
function addition() { 
  $GLOBALS['z20170919155122'] = $GLOBALS['x20170919155100'] + $GLOBALS['y20170919155108']; 
}
 
addition(); 
echo $z20170919155122; 

// $_SERVER $_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

/*
$_SERVER['PHP_SELF']  返回当前执行脚本的文件名。
$_SERVER['GATEWAY_INTERFACE'] 返回服务器使用的 CGI 规范的版本。
$_SERVER['SERVER_ADDR'] 返回当前运行脚本所在的服务器的 IP 地址。
$_SERVER['SERVER_NAME'] 返回当前运行脚本所在的服务器的主机名（比如 www.w3school.com.cn）。
$_SERVER['SERVER_SOFTWARE'] 返回服务器标识字符串（比如 Apache/2.2.24）。
$_SERVER['SERVER_PROTOCOL'] 返回请求页面时通信协议的名称和版本（例如，“HTTP/1.0”）。
$_SERVER['REQUEST_METHOD']  返回访问页面使用的请求方法（例如 POST）。
$_SERVER['REQUEST_TIME']  返回请求开始时的时间戳（例如 1577687494）。
$_SERVER['QUERY_STRING']  返回查询字符串，如果是通过查询字符串访问此页面。
$_SERVER['HTTP_ACCEPT'] 返回来自当前请求的请求头。
$_SERVER['HTTP_ACCEPT_CHARSET'] 返回来自当前请求的 Accept_Charset 头（ 例如 utf-8,ISO-8859-1）
$_SERVER['HTTP_HOST'] 返回来自当前请求的 Host 头。
$_SERVER['HTTP_REFERER']  返回当前页面的完整 URL（不可靠，因为不是所有用户代理都支持）。
$_SERVER['HTTPS'] 是否通过安全 HTTP 协议查询脚本。
$_SERVER['REMOTE_ADDR'] 返回浏览当前页面的用户的 IP 地址。
$_SERVER['REMOTE_HOST'] 返回浏览当前页面的用户的主机名。
$_SERVER['REMOTE_PORT'] 返回用户机器上连接到 Web 服务器所使用的端口号。
$_SERVER['SCRIPT_FILENAME'] 返回当前执行脚本的绝对路径。
$_SERVER['SERVER_ADMIN']  该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。
$_SERVER['SERVER_PORT'] Web 服务器使用的端口。默认值为 “80”。
$_SERVER['SERVER_SIGNATURE']  返回服务器版本和虚拟主机名。
$_SERVER['PATH_TRANSLATED'] 当前脚本所在文件系统（非文档根目录）的基本路径。
$_SERVER['SCRIPT_NAME'] 返回当前脚本的路径。
$_SERVER['SCRIPT_URI']  返回当前页面的 URI。
*/

// PHP $_REQUEST PHP $_REQUEST 用于收集 HTML 表单提交的数据。

/*
PHP $_POST
PHP $_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。
*/

/*
PHP $_GET
PHP $_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据。
*/







    ?>


</div>

<input type="text" autofocus>

<div class="formbox">
    <!-- post -->
    <form action="server/welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <!--get-->
    <form action="server/welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <!--表单验证-->
    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h2>PHP 验证实例</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        姓名：<input type="text" name="name">
        <br><br>
        电邮：<input type="text" name="email">
        <br><br>
        网址：<input type="text" name="website">
        <br><br>
        评论：<textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        性别：
        <input type="radio" name="gender" value="female">女性
        <input type="radio" name="gender" value="male">男性
        <br><br>
        <input type="submit" name="submit" value="提交">
    </form>

    <?php
    echo "<h2>您的输入：</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

    <?php
    // 定义变量并设置为空值
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "姓名是必填的";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "电邮是必填的";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "性别是必选的";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    /*function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }*/
    ?>

    <h2>PHP 验证实例</h2>
    <p><span class="error">* 必需的字段</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        姓名：<input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        电邮：<input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        网址：<input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        评论：<textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        性别：
        <input type="radio" name="gender" value="female">女性
        <input type="radio" name="gender" value="male">男性
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="提交">
    </form>

    <?php
    echo "<h2>您的输入：</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>


    <!--PHP - 验证 Name、E-mail、以及 URL-->
    <?php
    // 定义变量并设置为空值
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "姓名是必填的";
        } else {
            $name = test_input($_POST["name"]);
            // 检查姓名是否包含字母和空白字符
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "只允许字母和空格";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "电邮是必填的";
        } else {
            $email = test_input($_POST["email"]);
            // 检查电子邮件地址语法是否有效
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                $emailErr = "无效的 email 格式";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // 检查 URL 地址语法是否有效（正则表达式也允许 URL 中的斜杠）
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "无效的 URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "性别是必选的";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    /*function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }*/
    ?>

    <h2>PHP 验证实例</h2>
    <p><span class="error">* 必需的字段</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        姓名：<input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        电邮：<input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        网址：<input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        评论：<textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        性别：
        <input type="radio" name="gender" value="female">女性
        <input type="radio" name="gender" value="male">男性
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="提交">
    </form>

    <?php
    echo "<h2>您的输入：</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

    <!--表单完成-->
    <div>表单完成</div>
    <?php
    // 定义变量并设置为空值
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "姓名是必填的";
        } else {
            $name = test_input($_POST["name"]);
            // 检查姓名是否包含字母和空白字符
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "只允许字母和空格";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "电邮是必填的";
        } else {
            $email = test_input($_POST["email"]);
            // 检查电子邮件地址语法是否有效
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                $emailErr = "无效的 email 格式";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // 检查 URL 地址语法是否有效（正则表达式也允许 URL 中的斜杠）
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "无效的 URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "性别是必选的";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    /*function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }*/
    ?>

    <h2>PHP 验证实例</h2>
    <p><span class="error">* 必需的字段</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        姓名：<input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        电邮：<input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        网址：<input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        评论：<textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        性别：
        <input type="radio" name="gender" value="female">女性
        <input type="radio" name="gender" value="male">男性
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="提交">
    </form>

    <?php
    echo "<h2>您的输入：</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

</div>


<div class="seniorbox">
  <?php
  // 日期和时间
  // date(format,timestamp)
  echo "今天是 " . date("Y/m/d") . "<br>";
  echo "今天是 " . date("Y.m.d") . "<br>";
  echo "今天是 " . date("Y-m-d") . "<br>";
  echo "今天是 " . date("l");

/*
h - 带有首位零的 12 小时小时格式
i - 带有首位零的分钟
s - 带有首位零的秒（00 -59）
a - 小写的午前和午后（am 或 pm）
*/
  echo "现在时间是 " . date("h:i:sa");

  // 获得时区
  date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("h:i:sa");

// mktime() 创建日期
// mktime(hour,minute,second,month,day,year)
$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);

// strtotime() 用字符串来创建日期
$d20170929153214=strtotime("10:38pm April 15 2015");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d20170929153214);

// include 和 require 语句
/*
include 'filename';
或
require 'filename';
*/
include 'footer.php';
include 'menu.php';

/*
操作文件
PHP 拥有的多种函数可供创建、读取、上传以及编辑文件。
readfile() 函数
readfile() 函数读取文件，并把它写入输出缓冲。
*/
echo readfile("server/webdictionary.txt");

// 文件打开/读取/读取
// 打开文件的更好的方法是通过 fopen() 函数。此函数为您提供比 readfile() 函数更多的选项。
// fopen()  读取文件 - fread()  关闭文件 - fclose()
$myfile = fopen("server/webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("server/webdictionary.txt"));
fclose($myfile);

//  读取单行文件 - fgets()
/*
检查 End-Of-File - feof()
feof() 函数检查是否已到达 "end-of-file" (EOF)。
feof() 对于遍历未知长度的数据很有用。
*/

/*
读取单字符 - fgetc()
fgetc() 函数用于从文件中读取单个字符。
下例逐字符读取 "webdictionary.txt" 文件，直到 end-of-file：
*/


   ?>
</div>


</body>
</html>
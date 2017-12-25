<?php

// 创建文件 - fopen()
//  写入文件 - fwrite()

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Bill Gates \n";
fwrite($myfile, $txt);
$txt = "Steve Jobs \n";
fwrite($myfile, $txt);
fclose($myfile);

// PHP 覆盖（Overwriting）
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse \n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse \n";
fwrite($myfile, $txt);
fclose($myfile);

?>
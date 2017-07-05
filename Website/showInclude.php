<?php
include("encryptor.php");
 
echo "<br / >";
$e = new Encrypt;
echo "code: ";
for ($i = 0; $i < 26; $i++) {
    echo $e->cArray[$i];
}
echo "<br / >";
$input = "There is no spoon.";
echo "input : ".$input."<br / >";
$r1 = $e->toEncode("There is no spoon.");
echo "encode: ".$r1."<br / >";
$r2 = $e->toDecode($r1);
echo "decode: ".$r2."<br / >";
echo "<br / ><br / >";
 
/* 《程式語言教學誌》的範例程式
    http://pydoing.blogspot.com/
    檔名：encryptdemo5.php
    功能：示範 PHP 程式 
    作者：張凱慶
    時間：西元 2012 年 11 月 */
?>
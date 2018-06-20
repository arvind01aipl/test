<?php
echo microtime(true)* 1000,"<br>";
echo strtotime("now")."<br>";
$digits = 4;
echo rand(pow(10, $digits-1), pow(10, $digits)-1);
?>
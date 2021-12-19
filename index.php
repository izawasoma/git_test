<?php 
require_once './function/function.php';
$num1 = [5,3,6,8,1,0,7,9,4,2];
$num2 = [6,1,9,8,0,7,9,9,4,7];
$add_ans = get_add($num1,$num2);
require_once './tpl/index.php';
?>
<?php
function get_add($num1,$num2){
    $add_ans = [];
    for($i=0;$i<10;$i++){
        $add_ans[$i] = $num1[$i] + $num2[$i];
    }
    return $add_ans;
}
?>
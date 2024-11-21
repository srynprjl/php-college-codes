<?php
    // reverse string

    function reverseStr($str){
        $len = strlen($str) - 1;
        $newStr = "";
        $i = $len;
        while($i >= 0){
            $val = $str[$i];
            echo $val;
            $i--;       
        }
    }

    echo reverseStr("Shreyan");


?>

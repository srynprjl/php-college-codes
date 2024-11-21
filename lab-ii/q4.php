<?php
    function isLower($str){
        $val = strcmp($str, strtolower($str));

        return $val;
    }
    $val = isLower("hLllo");
    if($val == 1){
        echo "Lower";
    } else {
        echo "Not Lower";
    }
?>
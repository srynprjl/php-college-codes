<?php
    function showDateTime(){
        echo date("d M Y H:i:s", time()) . "<br />";
        echo date ("d/m/Y h:i:s", time())  . "<br />";
        echo date("d m y H:i:s", time())  . "<br />";
        echo date("d-M-Y h:i:s", time())  . "<br />";
        echo date("d M y h:i:s", time())  . "<br />");
    }

    showDateTime();

?>
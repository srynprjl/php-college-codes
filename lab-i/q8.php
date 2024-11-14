<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="num">Number: </label>
        <input type="text" name="num">
        <input type="submit" name="sub"/>
    </form>

    <?php

        if(isset($_POST['sub'])){
            $num = $_POST['num'];
            for($i=1;$i<=10;$i++){
                $mul = $num*$i;
                echo "$num * $i = $mul";
                echo "<br />";
            }
        }
     ?>
</body>
</html>
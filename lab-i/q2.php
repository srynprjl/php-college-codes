<?php
    $num = $_POST['num'];
    $fact = 1;
    for($i=1;$i<=$num;$i++){
        $fact *= $i;
    }
?>

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
       echo "Factorial of $num is $fact"; 
    }
    ?>
</body>
</html>
<?php 
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];

        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Numbers</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="num1">Num 1</label>
        <input type="text" name="num1" value='<?php echo "$n1" ?>'/>
        <label for="num2">Num 2</label>
        <input type="text" name="num2" value='<?php echo "$n2" ?>'/>
        <input type="submit">
    </form>

</body>
</html>
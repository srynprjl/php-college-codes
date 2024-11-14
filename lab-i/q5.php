<!-- palindrome -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num">Number: </label>
        <input type="text" name="num">
        <input type="submit" name="sub"/>
    </form>

    <?php
            $num = $_POST['num'];
            $newNum = $num;
            $dig = 0;
            $sum = 0;

            while($newNum != 0){
                $dig = $newNum % 10;
                $sum += $dig;
                $newNum = floor($newNum / 10);
            }

            echo "Sum of digit: $sum";
    ?>

</body>
</html>
<!-- palindrome -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Indivual Digits</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="num">Number: </label>
        <input type="text" name="num">
        <input type="submit" name="sub"/>
    </form>

    <?php
            $num = $_POST['num'];
            for($i=1;$i<=$num;$i++){
                $sum += $i;
            }

            echo "Sum of digit: $sum";
    ?>

</body>
</html>

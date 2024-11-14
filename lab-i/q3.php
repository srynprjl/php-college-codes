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
            $rev = 0;

            while($newNum != 0){
                $dig = $newNum % 10;
                $rev = $rev * 10 + $dig;
                $newNum = floor($newNum / 10);
            }

            
            if($num == $rev){
                echo "It is a palindrome";
            } else {
                echo "It is not a palindrome";
            }
    ?>

</body>
</html>
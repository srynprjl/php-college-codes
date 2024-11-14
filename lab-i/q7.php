<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="num">Age: </label>
        <input type="text" name="num">
        <input type="submit" name="sub"/>
    </form>

    <?php
        if(isset($_POST['sub'])){
            $age = $_POST['num'];
            if($age >= 18){
                echo "Eligible to Vote";
            } else {
                echo "Not Eligible to Vote";
            }
        }
     ?>
</body>
</html>
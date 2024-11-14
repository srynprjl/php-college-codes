<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- simple calculatr -->
<body>
    <form action="" method="POST">
        <label for="num1">Num 1</label>
        <input type="text" name="num1" value='<?php echo "$n1" ?>'/>
        <label for="num2">Num 2</label>
        <input type="text" name="num2" value='<?php echo "$n2" ?>'/>

        <select name="opt" id="opt">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="submit" name="submit">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $opt = $_POST['opt'];
    

            switch($opt){
                case "add":
                    $num = $num1 + $num2;
                    break;
                case "sub":
                    $num = $num1 - $num2;
                    break;
                case "mul":
                    $num = $num1 * $num2;
                    break;

                case "div":
                    $num = $num1 / $num2;
                    break;
            }
        }

        echo "Calculated Value: $num";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "For Loop: ";
        $num = 2;
        for($i = 0; $i< 30; $i++){
            echo "$num ";
            $num = $num + 2;
        }
        echo "<br /> While: ";
        $num = 2;
        $i = 0;
        while($i<30){
            echo "$num ";
            $num = $num + 2;
            $i++;
        }
        echo "<br /> Do While: ";
        $num = 2;
        $i = 0;
        do{
            echo "$num ";
            $num = $num + 2;
            $i++;
        }while($i<30);
    ?>
</body>
</html>
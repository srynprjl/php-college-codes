<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
        echo "<table>";
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            for($j=1;$j<=10;$j++){
                $num = $i*$j;
                echo "<td> $num </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
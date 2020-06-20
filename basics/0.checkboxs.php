<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="learning.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit" name="send" value="Send it">
    
    
    </form>

    <?php

        if(isset($_POST["send"])){
            $fruits = $_POST["fruits"];
            echo $fruits[0] . "</br>";
            echo $fruits[1] . "</br>";
            echo $fruits[2] . "</br>";
        }
    
    
    ?>



</body>
</html>
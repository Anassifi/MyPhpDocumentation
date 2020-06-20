<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Include php</title>
</head>
<body>
    <!-- this doesn't need to much explanation its just a simple method -->
    <?php
        //simple includes
        $title = "My First Post";
        $author = "Hakime";
        $wordCount = 400;
        include "article-header.php";
        echo "<hr>";

        //more includes
        include "useful-tools.php";
        sayHi("Hakime");
        echo "<br>";
        echo $feetInMile;
    
    ?>
    
</body>
</html>
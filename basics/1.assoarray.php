<head>
<body>
    

    <form action="assoarray.php" method="post">
        <input type="text" name="student"> <br>
        
        <input type="submit" value="grade">

    </form>

    <?php

        $grades = array("Hakime"=>"A+", "Adnane"=>"B-", "Salim"=>"C+");
        $grades["Salim"] = "A-"; 
        echo $grades[$_POST["student"]];
        /* $grades["Hakime"] = "S";
        echo $grades["Hakime"] . "<br/>";
        echo $grades["Salim"]. "<br/>";
        echo count($grades); */
    
    
    
    ?>



</body>
</head>
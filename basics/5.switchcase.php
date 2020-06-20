<head>
<body>
    <form action="switchcase.php" method="post">
        what was your grade ?
        <input type="text" name="grade">
        <input type="submit" value="get grade">
    </form>

    <?php 
        $grade = $_POST["grade"];

        switch($grade){
            case "A":
                echo "You did very well";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You could do better";
                break;
            case "D":
                echo "You did poorly";
                break;
            case "F";
                echo "You failed!";
                break;
            default:
                echo "Invalid grade";
            
        }
        

    ?>




</body>
</head>
<head>
    <body>
        <!-- <form action="functions.php" method="post">
            <input type="text" name="user"> <br>
            <input type="submit">

        </form> -->
        
        <?php
            /* $user = $_POST["user"]; */
            function greetin($user, $age){
                echo "Hello! $user, you are $age <br>";
            }
        
            greetin("Hakime", 23);
            greetin("Salim", 26);
            greetin("Adnane", 22);
            /* greetin("Hello!");
            greetin("<br/>");
            greetin("That's awesome!"); */
        ?>



    </body>
</head>
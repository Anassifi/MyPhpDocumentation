<head>
<body>

    <form action="calculator.php" method="post">
        First num : <input type="number" step="0.1" name="num1"> <br>
        OP: <input type="text" name="op"><br>
        Second num : <input type="number" name="num2"><br>
        <input type="submit" value="calculate">
    </form>
    

    <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        }elseif($op == "-"){
            echo $num1 - $num2;
        }elseif($op == "*"){
            echo $num1 * $num2;
        }elseif($op == "/"){
            echo $num1 / $num2;
        }else{
            echo "please fill in the OP (operator) you want!";
        }
        
        //echo "this is $num1 and $num2 and $op";
    ?>




</body>
</head>
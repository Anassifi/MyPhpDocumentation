<head>
<body>
    

    <?php 
        //keep printing index
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++; //if we delete this line.
        }
        //infinite loop might happen.

        //do while test

        $human = 0;
        do{
            echo "you are a human <br>";
            $human++;
        }while($human < 5);
    ?>




</body>
</head>
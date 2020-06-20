<head>
<body>
 
    <?php 
    //Here in this example of inheritance I tried to make a chef who can make some bunche of plates

    class Chef {
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }
        function makeSalad(){
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>";
        }
    }

    // Here I want another chef that can make the same dishes but with some other different ones
    class ItalianChef extends Chef {

        function makePasta(){
            echo "The chef make pasta <br>";
        }

        //uncomment this after you reach the override part
        //here we override the function by using the same name of the normal chef function
        /* function makeSpecialDish(){
            echo "The chef makes chicken parm";
        } */
    }

    $chef = new Chef();
    $chef->makeChicken();

    //Here I'm gonna print an ItalianChef
    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    /* and It works because Chef can make chicken also my italian chef can make that because he inherited all the functions from chef*/

    //Now as the ItalianChef can make what the chef makes he can also make other things he know
    // Like pasta
    $italianChef = new ItalianChef();
    $italianChef->makePasta();
    // but the normal chef can't make pasta only the Italian one can

    //Now here we will use the concept overRiding
    // both chefs are going to use the same function but with different result
    echo "<hr>";
    $chef = new Chef();
    $chef->makeSpecialDish();

    // our italianChef special dish is different
    $italianChef = new ItalianChef();
    $italianChef->makeSpecialDish();

    ?>


</body>
</head>
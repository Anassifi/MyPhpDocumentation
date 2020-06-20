<!DOCTYPE html>
<title></title>
<head>
<body>
    

    <?php
        class Book{

            var $title;
            var $author;
            var $pages;

// You will notice that I added "a" to the variables but just to make a slight difference between vars
            function __construct($aTitle, $aAuthor, $aPages){

                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;

            }

        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
//Instead of typing all this code manually we did it inside the constructor
        /* $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400; */

        $book2 = new Book("Lord Of the Rings", "Tolkien", 700);

        // Again same thing here
        /* $book2->title = "Lord Of the Rings";
        $book2->author = "Tolkien";
        $book2->pages = 700; */

        //example printing title book1
        echo $book1->title;

        //also we can change something easy like this :
        $book1->title = "Hunger games";
        echo "<br> ====New title==== <br>";
        echo $book1->title;

    ?>


</body>
</head>
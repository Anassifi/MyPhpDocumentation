<!DOCTYPE html>
<title></title>
<head>
<body>
    

    <?php
        class Book{

            var $title;
            var $author;
            var $pages;

        }

        $book1 = new Book;
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        $book2 = new Book;
        $book2->title = "Lord Of the Rings";
        $book2->author = "Tolkien";
        $book2->pages = 700;

        //book1 
        echo $book1->title;
        echo "<br>";
        echo $book1->author;
        echo "<br>";
        echo $book1->pages;
        
        echo "<hr>";

        //book2 
        echo $book2->title;
        echo "<br>";
        echo $book2->author;
        echo "<br>";
        echo $book2->pages;

        

    ?>


</body>
</head>
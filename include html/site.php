<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PhpIncludeHTML</title>
</head>
<body>
    <!-- Here I included my html header -->
    <header>
        <?php include "header.html" ?>
    </header>

    <!-- content -->
    <h3 style="color:teal">here is my content</h3>
    <p>Hello World!!</p>

    <!-- Included my footer -->
    <footer>
        <?php include "footer.html" ?>
    </footer>
    
</body>
</html>
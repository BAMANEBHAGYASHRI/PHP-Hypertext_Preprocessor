<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // String Length
    echo strlen("Hello world!");
    // String Word count
    echo str_word_count("Hello world!");
    // String Position
    echo strpos("Hello  world!", "world"); 
    // String Replace
    echo str_replace("world", "bvit", "Hello world!");
    // String Upper  frist Character
    echo ucwords("Welcome to php world");
    // String Uppercase
    echo strtoupper("information technology");
    // String Lowercase
    echo strtolower("INFORMATION TECHNOLOGY");
    // String Repeat
    echo str_repeat("*",10);
    // String Campare
    echo strcmp("Hello world!", "Hello world");
    
    ?>

</body>
</html>
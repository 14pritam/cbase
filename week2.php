 <?php
    // Length of String program
    $len = strlen("Hello, world!");
    echo "Length of string is $len <br>";

    // No. of words program
    $num = str_word_count("Hello, world!");
    echo "Number of words is $num <br>";

    // Postion of word program
    $pos = strpos("Hello, world!", "Hello");
    if(is_numeric($pos)) {
        echo "Postion of word is $pos <br>";
    }
    else {
        echo "String not present <br>";
    }

    // Reverse a string program
    $rev = strrev("Hello, world!");
    echo "Reversed string is $rev <br>";
    ?>
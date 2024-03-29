<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            $x = "Hello";
            echo "The value is a " . gettype($x) . "<br>";
            $x = 4.25;
            echo "The value is a " . gettype($x) . "<br>";
            $x = true;
            echo "The value is a " . gettype($x) . "<br>";
            $x = 19;
            echo "The value is a " . gettype($x) . "<br>";
            $x = NULL;
            echo "The value is a " . gettype($x) . "<br>";
        ?>
    </body>
</html>
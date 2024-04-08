<!DOCTYPE html>
<html>
 <head>

 </head>

 <body>
    <?php

        $colors = ["blue", "red", "green", "yellow"];

        foreach($colors as $x) {
            echo "<br> $x is a color <br>";
        }

        $onePiece = ["author" => "Eiichiro Oda", "MC" => "Luffy", "theme" => "pirate"];

        foreach($onePiece as $x => $y) {
            echo "<br> The $x of One Piece is $y <br>";
        }

    ?>

 </body>
</html>
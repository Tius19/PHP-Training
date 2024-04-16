<!DOCTYPE html>
<html>
 <head>

 </head>

 <body>
    <?php

        function toLine() {
            echo "<br> ------------ <br>";
        }

        $colors = ["blue", "red", "green", "yellow"];

        foreach($colors as $x) {
            echo "<br> $x is a color <br>";
        }

        
        toLine();

        array_push($colors, "orange", "purple");

        sort($colors);

        foreach($colors as $x) {
            echo "<br> $x is a color <br>";
        }

        toLine();

        $onePiece = ["author" => "Eiichiro Oda", "MC" => "Luffy", "theme" => "pirate"];

        foreach($onePiece as $x => $y) {
            echo "<br> The $x of One Piece is $y <br>";
        }

        toLine();

        $onePiece += ["swordmaster" => "Zoro", "navigator" => "Nami"];


        foreach($onePiece as $x => $y) {
            echo "<br> The $x of One Piece is $y <br>";
        }

    ?>

 </body>
</html>
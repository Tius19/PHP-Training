<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>
        Welcome Stranger !
    </h1>

      <?php

        class Manga {

          public $author;
          public $MC;
          public function __construct($author, $MC)
          {
            $this->author = $author;
            $this->MC = $MC;
          }
        }

        $One_Piece = new Manga("Eichiro Oda", "Luffy");
        $Gunnm = new Manga("Yukito Kishiro", "Gally");

        echo "The author of One Piece is $One_Piece->author <br>";

        echo strpos("It's a beautiful day", "day");

        foreach ($One_Piece as $x => $y ) {
          echo "<br> $x : $y <br>";
        }

        echo "<br>";
      ?> 

      <?php
        $greetings = "Hello World !";

        function Hi() {
          global $greetings;
          echo "$greetings How are you ? Nice weather today, isn't it ? <br>";
        }

        Hi();

        function Math() {
          static $x = 2;
          echo "$x <br>";
          $x++;
        }

        Math();
        Math();
        Math();

        echo "<br>";

        $number = 5;

        var_dump($number);

        echo "<br>";

        $number = (string) $number;

        var_dump($number);

        echo "<br>";

      

        function rating($x) {
          if ($x < 40 ) {
          echo "Not really high... <br>";
        } elseif ( $x < 58 ) {
          echo "Not bad ! <br>";
        } else {
          echo "Impressive !!! <br>";
        }}



        rating(rand(24,72));

        $a = rand(0,50);
        $b = rand(0,50);
        $c = rand(0,50);

        function check($a, $b, $c) {
          if($a < $c && $b < $c) {
            echo "$c is the biggest number <br>";
          } elseif( $b < $a && $c < $a ) {
            echo "$a is the biggest number <br>";
          } else {
            echo "It is a mystery <br>";
          }
          echo "$a <br>";
          echo "$b  <br>";
          echo "$c <br>";
        }

        check($a, $b, $c);

        $l = 8;

        if($l < 10) $m = "Hey";

        echo "$m <br>";

        $k = 7;

        $j = $k < 9 ? "Hello" : "Bye";

        echo $j;

        define("Jean", "Prenom coMMun");
        define("Kevin", "Veuillez choisir un autre prenom", false);

        echo "<br>" . Jean;
        echo "<br>" . Kevin;

        echo "<br>";

        

        switch ($human) {
          case "baby" :
            echo "You're between zero and four years old <br>";
            break;
          case "child" :
            echo "You're between five and twelve years old <br>";
          break;
          case "teenager" :
            echo "You're between thirteen and seventeen years old <br>";
          break;
          default :
          echo "You're an adult <br>";
        }

        $p = 4;

        do {
          echo $p;
          $p++;
        } while ($p < 3 );

        for ($d = 2; $d < 8; $d+=2) {
          echo "<br> The number is : $d <br>";
        }

        $city = array("Port-Louis", "Curepipe", "Tamarin");

        foreach($city as $x) {
          echo "<br> $x est une ville de Maurice <br>";
        }

        $god = "None";

        switch($god) {
          case "Jesus" :
            echo "<br> You're a christian <br>";
            break;
          case "Allah" :
            echo "<br> You're a muslim <br>";
            break;
          case "Yahweh" :
            echo "<br> You're jewish <br>";
            break;
          default :
          echo "<br> You're an atheist <br>";  
        }

        $fruits = ["banana", "apple", "grapes"];
        foreach($fruits as $x) {
          echo "$x <br>";
        }

        $mauritius = ["capital" => "Port Louis", "population" => "1.3 millions", "continent" => "Africa"];
        foreach($mauritius as $x => $y) {
          echo "<br> The $x of Mauritius is $y <br>";
        }



      ?>
  </div>
</body>

</html>
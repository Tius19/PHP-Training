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

        $x = (rand(24,73));

        if ($x < 40 ) {
          echo "Not really high...";
        } elseif ( $x < 58 ) {
          echo "Not bad !";
        } else {
          echo "Impressive !!!";
        }



      ?>
  </div>
</body>

</html>
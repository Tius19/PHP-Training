<!DOCTYPE html>
<html>

<head>

</head>

<body>

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

  ?>

</body>

</html>
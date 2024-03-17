<!DOCTYPE html>
<html>

<head>

</head>

<body>

<h1>
    Welcome Stranger !
</h1>

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
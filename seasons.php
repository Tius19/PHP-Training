<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php

            $x = date("F");

                if($x = "June" || "July" || "August") {
                    echo "We're in summer";
                } elseif($x = "September" || "October" || "November") {
                    echo "We're in fall";
                } elseif($x = "December" || "January" || "February") {
                    echo "We're in winter";
                } else {
                    echo "We're in spring";
                }
        ?>
    </body>
</html>
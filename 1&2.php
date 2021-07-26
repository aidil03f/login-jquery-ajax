<!DOCTYPE html>
<html>
<body>
<?php
    $numbers = array(9000000, 300000, 20000, 7000, 400, 20, 1);
    foreach ($numbers as $number)
    print ($number)."<br>";
?>
    <br>
<?php
    for ($i=1; $i <= 15; $i++) {
        if ($i % 2 == 0) {
            echo "output = 7 <br />";
        } elseif ($i % 3 == 0) {
            echo "output = 3 <br />";
        } else {
            echo $i . "<br />";
         }
    }
?>
</body>
</html>

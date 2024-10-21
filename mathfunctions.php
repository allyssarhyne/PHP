<!DOCTYPE html>
<html>
<body>

    <form action="index.php" method="POST">
    <label>x: </label>
    <input type="text" name="x"><br>
    <label>y: </label>
    <input type="text" name="y"><br>
    <label>z: </label>
    <input type="text" name="z">
    <input type="submit" value="total">
    </form>


</body>
</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x); -- abs means total absolute function that returns a positive number when you enter negative
    //$total = round($x); -- rounding the number
    //$total = floor($x); -- round down
    //$total = ceil($x); 
    //$total = sqrt($x); -- square root function
    //$total = pow($x, $y); -- raising $x to the power of $y
    //$total = max($x, $y, $z); -- highest number (maximum)
    //$total = min($x, $y, $z); -- lowest number (minumum)
    //$total = pi();
    //$total = rand(1, 100); --- giving random numbers from 1 to 100





    echo  $total;


?>
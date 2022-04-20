<?php
$x = 40;
$y = 6;


if (!is_numeric($x) || !is_numeric($y)) {
    echo "L'un des deux nombres n’est pas valide";
} elseif ($x > $y) {
    echo "Le premier nombre $x est plus grand que le deuxième nombre $y";
} elseif (empty($x) && empty($y)) {
    echo "Aucun des deux nombres n’est valide";
} elseif ($x == $y) {
    echo "Les deux nombres sont égaux";
} else {
    echo "Le premier nombre $x est plus petit que le deuxième nombre $y";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
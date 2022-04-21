<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php

    $tab = [];

    for ($i = 0; $i < 10; $i++) {
        $tab[$i] = "information n°" . $i+1;
    }

    print_r($tab);

    ?>
    </pre>

</body>

</html>
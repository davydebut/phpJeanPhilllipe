<?php
$role = ["Public", "rédacteur", "modérateur", "admin"];
$role = "admin";
switch ($role) {
    case 'Public':
        echo "Vous êtes un public.";
        break;
    case 'rédacteur':
        echo "Vous êtes un rédacteur.";
        break;
    case 'modérateur':
        echo "Vous êtes un modérateur.";
        break;
    case 'admin':
        echo "Vous êtes un admin.";
        break;
    default:
        echo "Vous n'êtes pas autorisé.";
        break;
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

<?php echo "Vous êtes connecté en tant que " . $role; ?>


</body>

</html>
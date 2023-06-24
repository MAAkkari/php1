<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 1</h1>
    <p> soit la phrase « Notre formation DL commence aujourd'hui ».
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
    (espaces inclus) </p>
    <h2>résultat</h2>
    <?php
        $phrase="Notre formation DL commence aujourd'hui";
        $length=strlen($phrase);
        echo " la phrase << $phrase >> contient $length caractères.";
    ?>
</body>
</html>
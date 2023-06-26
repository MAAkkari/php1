<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 4</h1>
    <p> Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>
    <h2>résultat</h2>
    <?php
        $phrase="Engage le jeu que je le gagne";
        $x=$phrase ;
            $x=str_replace(" ", "", "$phrase"); //supprime les espaces dans la string 
            $x=strtolower($x); //met la string en minuscule 
        if ($x == strrev($x)) //inverse le contenue de la string si elle colle palindrome si elle ne colle pas alors pas palindrome
            echo("La phrase << $phrase >> est palindrome");
        else
            echo("La phrase << $phrase >> n'est pas palindrome");
        
        ?>


        
</body>
</html>


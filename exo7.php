<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 7</h1>
        <p> Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :
            Poussin : entre 6 et 7 ans
            Pupille : entre 8 et 9 ans
            Minime : entre 10 et 11 ans
            Cadet : à partir de 12 ans
            Si la catégorie n'est pas gérée, merci de le préciser.
        </p>
        <h2>résultat</h2>
        <?php
        $age=10; // boucle si qui affiche la categorie selon l'intervale dans le quel se trouve l'age
        if (6<=$age && $age<=7) echo"L'enfant qui a $age ans appartient a la categorie << Poussin >>";
        else if (8<=$age && $age<=9) echo"L'enfant qui a $age ans appartient a la categorie << Pupille >>";
        else if (10<=$age && $age<=11) echo"L'enfant qui a $age ans appartient a la categorie << Minime >>";
        else if (12<=$age) echo"L'enfant qui a $age ans appartient a la categorie << Cadet >>";
        else echo"la categorie n'est pas gérée";
        ?>
    </body>
</html>
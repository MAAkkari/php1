<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 12</h1>
        <p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>
        <h2>résultat</h2>
        <?php
        $i;
        $FRA="Mickaël";
        $ESP="Virgile";
        $ENG="Marie-Claire";
        $tab=[$FRA,$ESP,$ENG];
        for ($i=0;$i<sizeof($tab);$i++) {
            if ($tab[$i]==$FRA){
                Echo"<br>".("Salut $FRA");}
            elseif ($tab[$i]==$ENG){
                Echo"<br>".("Hello $ENG");}
            else{Echo"<br>".("Hola $ESP");}
        }
        ?>
    </body>
</html>
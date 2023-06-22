<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 15</h1>
        <p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge
</p>
        <h2>résultat</h2>
        <?php
        class Personne {
            private string $_nom;
            private string $_prenom;
            private string $_sexe;
            private datetime $_dateNaissance;
        
            public function __construct(string $nom, string $prenom, string $sexe, $dateNaissance){
                $this->_nom=$nom;
                $this->_prenom=$prenom;
                $this->_sexe=$sexe;
                $this->_dateNaissance=new Datetime ($dateNaissance);
            }
            public function getNom(){
                return $this->_nom;
            }
            public function setNom(string $nom){
                $this->_nom = $nom;
            }
        }
        Function calcul (datetime $x){
            $origin = date_create();
            $target = $x;
            $age = $origin->diff($target);
            echo "Age de la personne : $age->y ans";


        }
        $p1 = new Personne ("DUPONT", "Michel", "M", "1980-02-19");
        $p2 = new Personne ("DUCHEMIN", "Alice", "M", "1985-01-17");
        
        echo $p1->getNom(); die;" ";$p1->$_nom; "a";
        $date=$sp1->$_dateNaissance;
        calcul($date);
        
        ?>
        
    </body>
</html>


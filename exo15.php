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
        
            public function __construct(string $nom, string $prenom, string $sexe, $dateNaissance){ // constructeur de la class Personne
                $this->_nom=$nom;
                $this->_prenom=$prenom;
                $this->_sexe=$sexe;
                $this->_dateNaissance=new Datetime ($dateNaissance);
            }
            //getters et setters des elements de la classe Personne
            public function getNom(){ 
                return $this->_nom;
            }
            public function setNom(string $nom){
                $this->_nom = $nom;
            }
            public function getDateNaissance(){
                return $this->_dateNaissance;
        }
        public function getPrenom(){
            return $this->_prenom;}
        }
        //calcul la date de naissance comme dans l'exo precedent
        function calcul ($dateNaissance){
            $origin = date_create();
            $target = $dateNaissance;
            $age = $origin->diff($target);
            echo " a $age->y ans";}

        $p1 = new Personne ("DUPONT", "Michel ", "M", "1980-02-19");
        $p2 = new Personne ("DUCHEMIN", "Alice ", "M", "1985-01-17");
        //Affichage des informations
        echo $p1->getPrenom();
        echo $p1->getNom();
        $date=$p1->getDateNaissance();
        calcul($date);
        echo "<br>".$p2->getPrenom();
        echo $p2->getNom(); 
        $date=$p2->getDateNaissance();
        calcul($date);
        ?>
        
    </body>
</html>



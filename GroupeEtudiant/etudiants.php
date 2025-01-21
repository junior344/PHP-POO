<?php
    class Etudiant {
        private string $nom;
        private int  $note;

        public function __construct($nom, $note) {
            $this->nom = $nom;
            $this->note = $this->setNote($note);
        }
        public function setNote($note){
            return $note < 0 ? 0 : $note;
        }
        public function getNom() {
            return $this->nom;
        }
        public function getNote() {
            return $this->note;
        }
    }

    class Groupe  {
        private $etudiants;

        public function __construct() {
            $this->etudiants = [];
        }

        public function ajouterEtudiant(Etudiant $etudiant) {
            $this->etudiants[] = $etudiant;
        }

        public function calculMoyenne($etudiants) {
            $somme = 0;
            if(isset($etudiants)){ 
                foreach ($etudiants as $etudiant) {
                    $somme += $etudiant->getNote();
                }
                $somme = $somme / count($etudiants);
            }
            return $somme ;
        }
    }
?>
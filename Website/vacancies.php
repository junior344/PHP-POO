<?php
    require_once 'Articles.php';
    class vacancies extends Article {

        public function afficheTitre(): string{
            return $this->getTitle();
        }
    }
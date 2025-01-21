
<?php
    require_once 'Articles.php';
    class Ads extends Article {
        public function afficheTitre(): string{
            return $this->getTitle();
        }
    }
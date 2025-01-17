<?php
    class beverage {
        private string $color;
        private float $price;
        private string $temperature;

       
        public function __construct(string $Mycolor, float $Myprice, ?string $Mytemperature ) {
            $this->color = $Mycolor;
            $this->price = $Myprice;
            $this->temperature = $this->setTemperature($Mytemperature);
        }

        private function setTemperature(?string $Mytemperature): string {

            return !$Mytemperature ? "cold" : $Mytemperature;
        }
        public function getColor() {
            return $this->color;    
        }
        public function getPrice() {
            return $this->price;
        }
        public function getTemperature() {
            return $this->temperature;
        }

        public function getInfo() {
            return "This beverage is " . $this->temperature . " and " . $this->color . ".";
        }


    }
?>
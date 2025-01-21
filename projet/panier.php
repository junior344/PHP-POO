<?php
    class panier {
        private  int $banana;
        private  int $apple;
        private int $bottle;
        private bool $reduction = false;

        public function __construct(int $banana, int $apple, int $bottle, bool $reduction) {
            $this->banana = $banana;
            $this->apple = $apple;
            $this->bottle = $bottle;
            $this->reduction = $reduction;
        }

        function priceTotal() {
            if(!$this->reduction) {
                $somme = (($this->banana * 1) + ( $this->apple*1.5) * 1.06 )+ ($this->bottle * 10) * 1.21;
            }else {
                $somme = (($this->banana * 0.5) + ( $this->apple*0.75) * 1.06 )+ ($this->bottle * 10) * 1.21;
            }
            return $somme; 
        }
    }
<?php
 class beer extends beverage {
    private string $name;
    private float $alcoholPercentage;
    public function __construct(string $Myname, float $MyalcoholPercentage, string $Mycolor, float $Myprice , string $Mytemperature) {
        
        parent::__construct($Mycolor, $Myprice,  $Mytemperature );

        $this->name = $Myname;
        $this->alcoholPercentage = $MyalcoholPercentage;
       
    }
    public function getInfo() {
        return "This beverage is " . $this->getTemperature() . " and " . $this->getColor() . ".";
    }
 }
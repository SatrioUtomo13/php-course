<?php 

    class car {
        public $color;

        public function __construct($color){
            $this->color = $color;
        }
    }

    class car2 extends car{
        public function turbo(){
            return "turbo activated";
        }
    }

    $car = new car ("red");
    $car2 = new car2("blue");
    echo $car2->turbo();
?>
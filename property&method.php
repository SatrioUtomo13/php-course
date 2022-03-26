<?php 

    /* 
    property
    - is data inside of class
    - property built likes variable, with accsebility (public, private, protect)
    method
    - is function inside of class
    - likes commond function with accesibility
    */

    //continue study case: adding property and method with default value
    class Users {
        public  $name = 'name',
                $id = 'id',
                $hp = 'hp';
        
        public function sayHello(){
            return "Hi $this->name";
        }

        public function advantage(){
            switch ($this->currency) {
                case "Rupiah":
                    return "your profit is Rp.$this->adv";
                    break;
                
                default : 
                    return "your Profit is sdfsf $this->adv";
                    break;
            }
        }
    }
    $buyer = new Users();
    $buyer->name = "satrio";
    $buyer->id = "01";
    $buyer->hp = "08881227665";
    $buyer->bank = "BCA";
    $buyer->address = "jakarta-indonesia";

    $seller = new Users();
    $seller->name = "utomo";
    $seller->id = "02";
    $seller->hp = "0853212023";
    $seller->bank = "BRI";
    $seller->currency = "Rupiah";
    $seller->adv = 0;
    
    echo $buyer->sayHello() . ",welcome back";

    echo "<br>";
    echo "<br>";

    echo $seller->advantage();
    

?>
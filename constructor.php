<?php 

    /* 
    Constructor
    - is special method were automatically running when you instance the object
    - __construct when you want to use it
    */

    //study case : continue

    class Users {
        public  $name = 'name',
                $id = 'id',
                $hp = 'hp',
                $bank = 'bank';

        public function __construct($name, $id, $hp, $bank){
            $this->name = $name;
            $this->id = $id;
            $this->hp = $hp;
            $this->bank = $bank;
        }
        
        public function call_buyer(){
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
    $buyer = new Users("satrio", "01", "08881227665", "BCA");
    $buyer->address = "jakarta-indonesia";

    $seller = new Users("utomo", "02", "0853212023", "BRI");
    $seller->currency = "Rupiah";
    $seller->adv = 0;
    
    echo "I'am Buyer";
    echo "<br>";
    echo $buyer->call_buyer() . ",welcome back";

    echo "<br>";
    echo "<br>";

    echo "I'am Seller";
    echo "<br>";
    echo $seller->advantage();

?>
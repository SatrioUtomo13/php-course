<?php 

    //we can use an object to be argument in method of another object
    
    // study case : continue constructor

    //create class
    class getInfoProduct {
        //make property
        public  $name = "name",
                $type = "type",
                $width = "width",
                $price = 0;
            
        //make constructor
        public function __construct($name, $type, $width, $price){
            $this->name = $name;
            $this->type = $type;
            $this->width = $width;
            $this->price = $price;
        }
    }

    //instance object
    $product = new getInfoProduct("freezer", "electronic", "200cm", 4000000);


    class Users { //create class
        //make property
        public  $name = 'name',
                $id = 'id',
                $hp = 'hp',
                $bank = 'bank';

        //make special method using constructor
        public function __construct($name, $id, $hp, $bank){
            $this->name = $name;
            $this->id = $id;
            $this->hp = $hp;
            $this->bank = $bank;
        }
        
        //make method
        public function call_buyer(){
            return "Hi $this->name welcome back";
        }

        //make method
        public function advantage(){
            switch ($this->currency) {
                case "Rupiah":
                    return "your profit is Rp.$this->adv";
                    break;
                
                default : 
                    return "your Profit is $$this->adv";
                    break;
            }
        }

        //object type
        public function infoProduct( getInfoProduct $getInfoProduct){
            $show = "{$getInfoProduct->name} | {$getInfoProduct->type} | {$getInfoProduct->width} | {$getInfoProduct->price} ";
            return $show;
        }
    }

    //instance object
    $buyer = new Users("satrio", "01", "08881227665", "BCA");
    //add property
    $buyer->address = "jakarta-indonesia";


    //instance object and add property
    $seller = new Users("utomo", "02", "0853212023", "BRI");
    $seller->currency = "dollar";
    $seller->adv = 0;
    
    echo "I'am Buyer";
    echo "<br>";
    //call object
    echo $buyer->call_buyer();
    echo "<br>";
    //add method infoProduct with object type
    echo $buyer->infoProduct($product);

    echo "<br>";
    echo "<br>";

    echo "I'am Seller";
    echo "<br>";
    //call object
    echo $seller->advantage();
    echo "<br>";


?>
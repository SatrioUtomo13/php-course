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
    }
    $user1 = new Users();
    $user1->name = "satrio";
    $user1->id = "01";
    $user1->hp = "08881227665";
    
    echo $user1->sayHello() . ",welcome back";
    

?>
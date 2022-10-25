<?php 
    echo "<h1 style='display:flex;align-items: center;justify-content: center;'>OOP - Object Orinted Programming </h1><br>";
    class User{
        //properties
        private $id;
        protected $name;
        public $age;
        //method
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        public function __construct($name,$age)
        {
             $this->name=$name;
             $this->age=$age;
        }
    };
    //
    //Ke thua
    //
    class Employee extends User{
        public function __construct($name,$age,$email)
        {
            //cua lop cha
            parent::__construct($name,$age);
            $this->email=$email;
        }
        public function get_email(){return $this->email;}
    }
    $user1 = new User('duon2g','18');
   // $user1->name='Duong';
    $user1->age='12';
    //$user1->set_name('Duong123123');
    $user3 = new User('duong','18');
    print_r($user3);
    echo $user1->get_name();

    echo "<br>Ke thua";
    $employee1 = new Employee('con','12','con@gmail.com');
    print_r($employee1);
?>
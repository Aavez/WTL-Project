<!DOCTYPE html>
<html>
    <head>
        <title>Object oriented php</title>
</head>
<body>
   <?php
      class User{
        public $name,$city,$email,$phoneno;
        
        function __construct($name=null,$city=null,$email=null,$phoneno=null) {
            $this->name=$name;
            $this->city=$city;
            $this->email=$email;
            $this->phoneno=$phoneno;
        }


        function setDetails($a,$b,$c=null,$d=null){
            $this->$email=$a;
            $this->$phoneno=$b;
            if($c!=null)
                $this->email=$c;
            if($d!=null)
                $this->phoneno=$d;
            
        }
        function printDetails(){
            echo "<br>Name is $this->name";
            echo "<br>City  $this->city";
            echo "<br>Email  $this->email";
            echo "<br>Phoneno  $this->phoneno";
            echo "<br>-----------------------<br>";
        }
        
    }
    $user1=new User('John Smith','London');
    $user2=new User('John Doe','Paris','johndoe@eg.com','9898989898');
    echo "\$user1 object<br>";
    $user1->printDetails(); 
    echo "\$user2 object<br>";
    $user2->printDetails();
    $user1->setDetails('john nash', 'NY','johnnash@eg.com','8787524645');
    echo "\$user1 after calling setDetails()<br>";
    $user1->printDetails();
    ?>
    </body>
</html>


<?php


class Person {
    public function __construct() {
        echo "Constructor Function";
    }

    public function info(){
        echo "Information";
    }
}

class Student {
    public function __construct() {
        echo "Constructor Function Student";
    }

    public static function courses(){
        echo "This is a Static Function";
    }
}


$p1 = new Person();

$p1->info();

$s1 = new Student();


Student::courses();
?>

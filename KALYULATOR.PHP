<?php

class calculator {
    public $result;

    public $num1;

    public $num2;

    public function result() {
        return $this->result;
    }
    public function addition ($num1 , $num2) {
        $this->result = $num1 + $num2;
        $this->result;
    }
}
    $result = new calculator();
    $result->num1 = 0;

    echo $result->addition(5,2);
    echo "The Sum is:" . $result->result();

?>

<?php
class sub {
    public $result;

    public $num1;

    public $num2;

    public function result() {
        return $this->result;
    }
    public function subtraction($num1 , $num2) {
        $this->result = $num1 - $num2;
        $this->result;
    }
}
    $result = new sub();
    $result->num1 = 0;

    echo $result->subtraction(5,2);
    echo "The Difference is:" . $result->result();

?>

<?php
class multiply {
    public $result;

    public $num1;

    public $num2;

    public function result() {
        return $this->result;
    }
    public function multiplication($num1 , $num2) {
        $this->result = $num1 * $num2;
        $this->result;
    }
}
    $result = new multiply();
    $result->num1 = 0;

    echo $result->multiplication(5,2);
    echo "The Product is:" . $result->result();

?>

<?php
class divide {
    public $result;

    public $num1;

    public $num2;

    public function result() {
        return $this->result;
    }
    public function division($num1 , $num2) {
        $this->result = $num1 / $num2;
        $this->result;
    }
}
    $result = new divide();
    $result->num1 = 0;

    echo $result->division(8,8);
    echo "The quotient is:" . $result->result();

?>
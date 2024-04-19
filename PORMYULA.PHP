<?php
class Rectangle {
    public $result;

    public $num1;

    public $num2;

    public $num3;

    public function result() {
        return $this->result;
    }
    public function volume($num1, $num2, $num3) {
        $this->result = $num1 * $num2 * $num3;
    }
}
    $formula = new Rectangle();

    echo $formula->volume(3,5,5);
    echo "The Volume is:" . $formula->result();

?>
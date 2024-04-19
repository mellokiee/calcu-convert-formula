<?php

class Temperature {
    public $result;

public function result() {
    return $this->result;
}
public function celsius($num1) {
    $this->result = $num1 + 273.15;
    return $this;
}
}
$convert = new Temperature();
$convert->celsius(88
);
echo "Convertion of Kelvin to Celsius is:" . $convert->result();

?>
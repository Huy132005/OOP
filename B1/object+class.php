<?php
class Car {
    public $brand;
    public $color;

    public function drive(){
        echo "Drving $this->brand car" . PHP_EOL;
        echo "Drving $this->color car" . PHP_EOL;
    }
}
echo '<pre>';

$myCar1 = new Car();
$myCar1->brand = "hi";
$myCar1->color = "den";
$myCar1->drive();

echo'<pre>';

$myCar2 = new Car();
$myCar2->brand = "ha";
$myCar2->color = "do";
$myCar2->drive();


?>
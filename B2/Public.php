<?php
class Car
{
    public $brandS = "Honda";

    public function showBrand()
    {
        echo $this->brandS;
    }


}
class Mec extends Car
{
    public function abc()
    {
        $this->brandS;
    }
}
$car = new Car();
echo $car->showBrand();
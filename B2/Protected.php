<?php
class Vehicle
{
    protected $brand = "Honda";

    protected function honk()
    {
        echo $this->brand;
    }
}
class Car extends Vehicle
{
    public function display()
    {
        $this->honk();
    }
}

$car = new Car();
$car->display();
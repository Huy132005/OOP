<?php 

abstract class AnimalMoon
{
    abstract public function sound();

    public function sleep(){
        echo "Sleeping" . PHP_EOL;
    }
}
class DogMoon extends AnimalMoon
{
    public function sound(){
        echo "Bark" . PHP_EOL;
    }
}
echo "<pre>";
$dog = new DogMoon();
echo $dog->sleep();
echo $dog->sound();

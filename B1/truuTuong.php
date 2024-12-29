<?php 
 abstract class Shape
 {
    abstract protected function getArea();
 }
 class Circle extends Shape
 {
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }
 }
 class  Rectangle extends Shape
 {
    private $dai;
    private $rong;

    public function __construct($dai, $rong)
    {
        $this->$dai = $dai;
        $this->$rong= $rong;
    }
    public function getArea()
    {
        return $this->dai * $this->rong;
    }
 }
 $circle = new Circle(5);
 
 $circle1 = new Rectangle(5, 100);
 
 echo $circle->getArea();
 
 echo $circle1->getArea();

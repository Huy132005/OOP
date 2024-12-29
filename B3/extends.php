<?php 
class ParentClass{
    public function great(){
        echo "Hello";
    }
}
class ChildClass extends ParentClass{
    public function great(){
        echo "Xin chao";
    }
}
$child = new ChildClass();
$child->great();

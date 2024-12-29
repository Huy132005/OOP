<?php 
class MyClass{
    public static $name = "PHP";
    public static function getName(){
        return self::$name;
}
}
echo MyClass::getName();
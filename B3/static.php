<?php  
class MyClass {
    public static $count = 2;

    public static function increment() {
        self::$count++; // $this->count
    }
}
MyClass::increment();
echo MyClass::$count;
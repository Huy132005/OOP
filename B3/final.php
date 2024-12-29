<?php 

final class BaseClassX {
    public function sayHello(){
        echo "Hello";
    }

}
class DerivedClassX extends BaseClassX {
    public function sayHello(){
        echo "Xin chao";
    }
}
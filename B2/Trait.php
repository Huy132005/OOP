<?php 
 
 trait Logger{
    public function log($message){
        echo $message . PHP_EOL;
    }
 }
 trait FileUpLoader{
    public function upload($file){
        echo $file . PHP_EOL;
    }
 }
 class User{
    use Logger, FileUpLoader;
    public function createUser(){
        $this->log("Creating user");
        $this->upload("Uploading file");
    }
 }
 echo '<pre>';
 $user = new User();
 $user->createUser();

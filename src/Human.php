<?php

class  Human {

    protected $age;
    protected $name;
    public $sex;

    public static $pensionAge = 60;



    const TOOTH = 32;
    //public function __construct(public $name, public $age, public $sex){}

    public function __construct( $name,  $age,  $sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function beforeDelete(){
        ///
    }

    public static function getPensionAge(){

        return self::$pensionAge;
    }

    public function sayHello(){
       return $this->name." ".$this->age." ".self::TOOTH;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if (mb_strlen($name)< 3){
            return false;
        }else{
            $this->name = ucfirst($name);
            return true;
        }
    }


}

<?php
abstract class Shape{
    public $name;
    public function __construct($name) {
        $this->name=$name;
    }
    abstract function getArea();
}
?>
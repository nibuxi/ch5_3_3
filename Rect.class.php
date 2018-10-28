<?php
class Rect extends Shape{
    protected $length,$width;
    public function __construct($name,$length,$width) {
        parent::__construct($name);
        $this->length=$length;
        $this->width=$width;
    }
    public function getArea(){
        return $this->length*$this->width;
    }
    function __toString(){
        return $this->name.':长：'.$this->length.', 宽：'.$this->width.', 面积：'.$this->getArea().'<br/>';
    }
}
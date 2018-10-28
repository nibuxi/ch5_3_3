<?php
class Square extends Rect{
    public function __construct($name,$length){
        $this->name=$name;
        $this->length=$length;
        $this->width=$length;
    }
    function __toString(){
        return $this->name.':边长：'.$this->length.', 面积：'.$this->getArea().'<br/>';
    }
}
?>
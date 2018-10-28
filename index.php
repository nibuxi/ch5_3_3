<?php
header('Content-Type:text/html;charset=utf-8');
function loader($classname){
    require_once "$classname".".class.php";
}
spl_autoload_register("loader");
$rect=new Rect("长方形",4,2);
echo $rect;
$sqare=new Square("正方形", 4);
echo $sqare;
?>
<?php
interface shape{
    public function getarea();
}
class rect implements shape {
    private $width;
    private $height;

    function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    function getarea(){
        return $this->width * $this->height;    
    }
}
class circle  implements shape {
    private $radius;

    function __construct($radius){
        $this->radius=$radius;
    }
    function getarea(){
        return $this->radius * $this->radius * 3.14156;    
    }
}
?>

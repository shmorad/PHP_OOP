<?php
class StringUtility{
    private $string;
    private $search;
    function __construct($string){
        $this->string = $string;
    }
    function search($string){
        $this->search = $string;
        return $this;
    }
    function replace($string){
        if(!isset($this->search)){
            throw new Exception("Nothing To Replace");
        }
        $this->string = str_replace($this->search,$string,$this->string);
        return $this;
    }
    function upperCase(){
        $this->srting = strtoupper($this->string);
        return $this;
    }
    function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }
    function print(){
        echo $this->string;
    }
}

$s = new StringUtility("Hello World");
$s->search("World")->replace("Earth")->upperCase()->lowerCase()->print();

?>
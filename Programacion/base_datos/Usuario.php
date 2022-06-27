<?php
class Usuario {
    private $nombre;
    private $contrasenia;
    private $ingreso;

    public function __construct($nombre,$contrasenia,$ingreso){
        $this->nombre = $nombre;
        $this->contrasenia = $contrasenia;
        $this->ingreso = $ingreso;    
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setContrasenia($c) {
        $this->contrasenia = $c;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function setIngreso($i) {
        $this->ingreso = $i;
    }
    public function getIngreso(){
        return $this->ingreso;
    }

    public function __toString(){
        return $this->nombre.",".$this->contrasenia.",".$this->ingreso;
    }
}
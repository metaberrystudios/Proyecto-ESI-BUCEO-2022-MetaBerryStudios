<?php
    date_default_timezone_set('America/Montevideo');
    require_once 'Usuario.php';
    require_once 'BaseDatos.php';
    class Controlador{
    
        private $base;
    
        public function __construct(){
            $this->base = new BaseDatos();
        }               

        /* Casos de uso */

        public function altaUsuario($nombre,$pass) {
            $ingreso = date("d/m/y - H:i:s");
            $user = new Usuario($nombre,$pass,$ingreso);
            $this->base->ingresar($user);
        }
        public function bajaUsuario($nombre){
            $this->base->baja($nombre);

        }

        public function traerTabla() {
            echo('<pre>');
            print_r($this->base->seleccionarTodos());
            echo('</pre>');
        }
    
    }

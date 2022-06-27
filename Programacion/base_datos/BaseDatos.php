<?php
class BaseDatos {
/********************************************************************************/
    private $servidor;      // En Xampp es "localhost"
    private $usuario;       // En Xampp es "root"
    private $password;      // En Xampp es ""
    private $base_datos;    // base datos en phpmyadmin
    private $conexion;      // Para las operaciones con MySQL
/********************************************************************************/	
    public function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
		$this->password = "";
		$this->base_datos = "usuarios";
		$this->conexion = $this->nueva("localhost","root","","usuarios");
    }
/*******************************************************************************/	
    private function nueva($server,$user,$pass,$base) {
        try {
            $conectar = mysqli_connect($server,$user,$pass,$base);
	    } catch (Exception $ex) {
            die($ex->getMessage());
	    }
	    return $conectar;
    }	
/********************************************************************************/
    public function ingresar($user) {
        $nombre = $user->getNombre();
        $pass = $user->getContrasenia();
        $ing = $user->getIngreso();	
        $insertar = "insert into usuario values('$nombre','$pass','$ing','True')";
    	return mysqli_query($this->conexion, $insertar);
    }
/********************************************************************************/
    public function baja($nombre){
       
        $insertar = "UPDATE usuario set activo='False' WHERE nombre='$nombre'";
    	return mysqli_query($this->conexion, $insertar);
    }
/********************************************************************************/
    public function seleccionarTodos() {
    	$resultado = mysqli_query($this->conexion, "select * from usuario");
    	$arreglo = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
    	return $arreglo;
    }
/********************************************************************************/
}
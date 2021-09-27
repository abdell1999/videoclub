<?php
require_once 'Conexion.php';


class Pelicula{
    public $id;
    public $titulo;
    public $genero;
    public $pais;
    public $anyo;
    public $cartel;


    public function __construct()
    {
        $this->conexion = new Conexion();
    }


    public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM peliculas');
		$conexion->cerrar();
		return $listado;
	}








}







?>
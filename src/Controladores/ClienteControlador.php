<?php 
namespace mjaimen\Controladores;

//require_once "/home/vagrant/Code/pruebas/Modelos/Cliente.php";
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/Modelos/Cliente.php'); 
use mjaimen\Modelos\Cliente;


//echo dirname("/home/vagrant/Code/pruebas/Modelos/Cliente.php") . PHP_EOL;
 


class ClienteControlador{

	public static function crear($fechaPrimeraCompra,$fechaUltimaCompra,$cantidadTotal,$cantidadUltimaCompra)
	{
		$cliente = new Cliente($fechaPrimeraCompra,$fechaUltimaCompra,$cantidadTotal,$cantidadUltimaCompra);
		
		echo '<pre>';
		print_r($cliente);
		echo '</pre>';
		return $cliente;
		//echo $prueba2 -> fechaUltimaCompra;
		//echo json_encode($prueba2);
	}

	public static function diferenciaDias($cliente)
		{
			$fechaPrimeraCompra = new \DateTime($cliente -> fechaPrimeraCompra);
			$fechaUltimaCompra = new \DateTime($cliente -> fechaUltimaCompra);
			$interval = $fechaPrimeraCompra->diff($fechaUltimaCompra);
			//echo $interval;
			$fecha = $interval->format('%R%a');

			return (int)$fecha;
		}

	public static function demandaDiaria($cliente){
		
		/*
		Dd = (cantidadProductoToal - cantidadUltimaCompra) / difencia()
		*/

		$demandaDiaria = ($cliente -> cantidadTotal ) / self::diferenciaDias($cliente);
		//echo "($cliente -> cantidadTotal - $cliente -> cantidadUltimaCompra) / self::diferenciaDias($cliente)";
		echo "(".$cliente -> cantidadTotal ."-". $cliente -> cantidadUltimaCompra.")/". self::diferenciaDias($cliente)."<br/>";

		return $demandaDiaria;
	}
	
	public static function factorNico(){
		/*
		Fn = 
		*/	
	}

	public static function puntoReorden($cliente){

		/*
		PR = (denmadaDiaria() * tiempoEntrega) + stokSeguridad
		*/

		$puntoReorden = (self::demandaDiaria($cliente) * 1) + (20* $cliente -> cantidadUltimaCompra /100);
		return $puntoReorden;

	}

	public static function algoritmoX($cliente){

		/*
		dias = ((#CF - PR) / #dD) + factorNico
		*/
		$algoritmoX = ($cliente -> cantidadUltimaCompra - self::puntoReorden($cliente))/ self::demandaDiaria($cliente)+0;
		return $algoritmoX;
	}



}


 ?>
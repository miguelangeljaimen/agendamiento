
 <?php 

 	require "Controladores/ClienteControlador.php";
 	use Controladores\ClienteControlador;

 	$cliente = ClienteControlador::crear('2009-10-10','2009-10-20',10,10);

 
 	echo "diferencia = ".ClienteControlador::diferenciaDias($cliente)." <br/>";
 	echo "punto de reorden = ".ClienteControlador::puntoReorden($cliente)." <br/>";
 	echo "demanda diaria  = ".ClienteControlador::demandaDiaria($cliente)." <br/>";
 	echo "AlgoritmoX ".ClienteControlador::algoritmoX($cliente)." <br/>";


  ?>
<?php 
namespace mjaimen\Modelos;

class Cliente
{
	public $fechaPrimeraCompra;
	public $fechaUltimaCompra;
	public $cantidadTotal;
	public $cantidadUltimaCompra;

		public function __construct($fechaPrimeraCompra,$fechaUltimaCompra,$cantidadTotal,$cantidadUltimaCompra)
		{
			$this -> fechaPrimeraCompra = $fechaPrimeraCompra;
			$this -> fechaUltimaCompra = $fechaUltimaCompra;			
			$this -> cantidadTotal = $cantidadTotal;			
			$this -> cantidadUltimaCompra = $cantidadUltimaCompra;			
		}




    /**
     * @return mixed
     */
    public function getFechaPrimeraCompra()
    {
        return $this->fechaPrimeraCompra;
    }

    /**
     * @param mixed $fechaPrimeraCompra
     *
     * @return self
     */
    public function setFechaPrimeraCompra($fechaPrimeraCompra)
    {
        $this->fechaPrimeraCompra = $fechaPrimeraCompra;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimaCompra()
    {
        return $this->fechaUltimaCompra;
    }

    /**
     * @param mixed $fechaUltimaCompra
     *
     * @return self
     */
    public function setFechaUltimaCompra($fechaUltimaCompra)
    {
        $this->fechaUltimaCompra = $fechaUltimaCompra;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCantidadTotal()
    {
        return $this->cantidadTotal;
    }

    /**
     * @param mixed $cantidadTotal
     *
     * @return self
     */
    public function setCantidadTotal($cantidadTotal)
    {
        $this->cantidadTotal = $cantidadTotal;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCantidadUltimaCompra()
    {
        return $this->cantidadUltimaCompra;
    }

    /**
     * @param mixed $cantidadUltimaCompra
     *
     * @return self
     */
    public function setCantidadUltimaCompra($cantidadUltimaCompra)
    {
        $this->cantidadUltimaCompra = $cantidadUltimaCompra;

        return $this;
    }
}
 ?>

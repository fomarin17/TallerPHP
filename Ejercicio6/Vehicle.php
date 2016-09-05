<?php
require_once ('Rental.php');

/**
 * @version 1.0
 * @created 05-sep.-2016 13:43:10
 */
class Vehicle
{

	private $mileage;
	private $plaque;

	function __construct()
	{
	}

	function __destruct()
	{
	}

    /**
     * @return mixed
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @param mixed $mileage
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    /**
     * @return mixed
     */
    public function getPlaque()
    {
        return $this->plaque;
    }

    /**
     * @param mixed $plaque
     */
    public function setPlaque($plaque)
    {
        $this->plaque = $plaque;
    }



}
?>
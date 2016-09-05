<?php
require_once ('Main.php');

/**
 * @version 1.0
 * @created 05-sep.-2016 13:43:09
 */
class Rental
{

	private $Person;
	private $Vehicle;

	function __construct()
	{
	}

	function __destruct()
	{
	}

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param mixed $Person
     */
    public function setPerson($Person)
    {
        $this->Person = $Person;
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }

    /**
     * @param mixed $Vehicle
     */
    public function setVehicle($Vehicle)
    {
        $this->Vehicle = $Vehicle;
    }



}
?>
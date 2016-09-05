<?php
require_once ('Rental.php');

/**
 * @version 1.0
 * @created 05-sep.-2016 13:43:09
 */
class Person
{

	private $name;

	function __construct()
	{
	}

	function __destruct()
	{
	}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}
?>
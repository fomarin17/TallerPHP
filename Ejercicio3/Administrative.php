<?php
require_once ('Employee.php');

/**
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
class Administrative extends Employee
{

	private $coordination;

    function __construct($id, $name, $lastName, $civilStatus, $yearIncorporation, $coordination)
    {
        parent::__construct($id, $name, $lastName, $civilStatus, $yearIncorporation);
        $this->setCoordination($coordination);
	}

	function __destruct()
	{
	}

    function __toString()
    {
        return $this->getId()." ".$this->getName()." ".$this->getLastName()." ".$this->getCivilStatus()." ".$this->getYearIncorporation()." ".$this->getCoordination().'<br/>';
    }


    /**
     * @return mixed
     */
    public function getCoordination()
    {
        return $this->coordination;
    }

    /**
     * @param mixed $coordination
     */
    public function setCoordination($coordination)
    {
        $this->coordination = $coordination;
    }



}
?>
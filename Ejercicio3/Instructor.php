<?php
require_once ('Employee.php');
require_once ('Coordination.php');

/**
 * @author Fredy
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
class Instructor extends Employee
{

	private $coordination;
	private $program;

	function __construct($id, $name, $lastName, $civilStatus, $yearIncorporation, $coordination)
	{
	    parent::__construct($id, $name, $lastName, $civilStatus, $yearIncorporation);
        $this->coordination = new Coordination($coordination);
	}

	function __destruct()
	{
	}

	function __toString()
    {
        return $this->getId()." ".$this->getName()." ".$this->getLastName()." ".$this->getCivilStatus()." ".$this->getYearIncorporation()." ".$this->coordination->getName().'<br/>';
    }

    /**
     * @return Coordination
     */
    public function getCoordination()
    {
        return $this->coordination;
    }

    /**
     * @param Coordination $coordination
     */
    public function setCoordination($coordination)
    {
        $this->coordination = $coordination;
    }

    /**
     * @return mixed
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * @param mixed $program
     */
    public function setProgram($program)
    {
        $this->program = $program;
    }



}
?>
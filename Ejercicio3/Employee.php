<?php
require_once ('User.php');

/**
 * @author Fredy
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
abstract class Employee extends User
{

	private $yearIncorporation;

	function __construct($id, $name, $lastName, $civilStatus, $yearIncorporation)
	{
        parent::__construct($id, $name, $lastName, $civilStatus);
        $this->setCivilStatus($civilStatus);
	}

	function __destruct()
	{
	}

    function __toString()
    {
        return parent::__toString();
    }
    /**
     * @return mixed
     */
    public function getYearIncorporation()
    {
        return $this->yearIncorporation;
    }

    /**
     * @param mixed $yearIncorporation
     */
    public function setYearIncorporation($yearIncorporation)
    {
        $this->yearIncorporation = $yearIncorporation;
    }



}
?>
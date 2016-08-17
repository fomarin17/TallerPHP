<?php

/**
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
abstract class User
{

	private $civilStatus;
	private $id;
	private $lastName;
	private $name;

	function __construct($id, $name, $lastName, $civilStatus )
	{
	    $this->setId($id);
        $this->setName($name);
        $this->setLastName($lastName);
        $this->setCivilStatus($civilStatus);
	}

	function __destruct()
	{
	}

    abstract function __toString();


    /**
     * @return mixed
     */
    public function getCivilStatus()
    {
        return $this->civilStatus;
    }

    /**
     * @param mixed $civilStatus
     */
    public function setCivilStatus($civilStatus)
    {
        $this->civilStatus = $civilStatus;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
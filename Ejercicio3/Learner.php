<?php

require_once ('User.php');

/**
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
class Learner extends User
{

	private $group;

	function __construct($id, $name, $lastName, $civilStatus, $group)
	{
        parent::__construct($id, $name, $lastName, $civilStatus);
        $this->setGroup($group);
	}

	function __destruct()
	{
	}
	public function __toString()
    {
        return $this->getId()." ".$this->getName()." ".$this->getLastName()." ".$this->getCivilStatus()." ".$this->getGroup().'<br/>';
    }


    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }



}
?>
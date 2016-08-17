<?php

/**
 * @author Fredy
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
class Coordination
{

	private $name;

	function __construct($name)
	{
        $this->setName($name);
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
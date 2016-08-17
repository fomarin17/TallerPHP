<?php

class Seller
{

	private $name;
    private $listItems = array();
    private $salaryBase;

	function __construct($name, $salaryBase)
	{
	    $this->name = $name;
        $this->salaryBase = $salaryBase;
	}

	function __destruct()
	{
	}

	public function addItem($item){
	    $this->listItems[] = $item;
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

    /**
     * @return mixed
     */
    public function getListItems()
    {
        return $this->listItems;
    }

    /**
     * @return mixed
     */
    public function getSalaryBase()
    {
        return $this->salaryBase;
    }

    /**
     * @param mixed $salaryBase
     */
    public function setSalaryBase($salaryBase)
    {
        $this->salaryBase = $salaryBase;
    }

}
?>
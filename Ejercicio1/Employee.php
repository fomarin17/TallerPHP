<?php

/**
 * @version 1.0
 * @created 23-jul.-2016 22:02:54
 */
abstract class Employee
{

	private $basicSalary;
	private $identityCard;
	private $lastName;
	private $name;
    private $salary;

	public function __construct($basicSalary,$identityCard,$name,$lastName)
	{
        $this->setBasicSalary($basicSalary);
        $this->setIdentityCard($identityCard);
        $this->setLastName($lastName);
        $this->setName($name);
	}

	function __destruct()
	{
	}

	abstract public function calculateSalary($commissionForSales, $salesNumber);

    public function __toString()
    {
        $toString = 'Name: '.$this->getName().'<br>Last name: '.$this->getLastName().'<br>Salary: '.$this->getSalary().'<br><br>';
        return $toString;
    }


    /**
     * getters and setters
     *
     */

    /**
     * @return mixed
     */
    public function getBasicSalary()
    {
        return $this->basicSalary;
    }

    /**
     * @param mixed $basicSalary
     */
    public function setBasicSalary($basicSalary)
    {
        $this->basicSalary = $basicSalary;
    }

    /**
     * @return mixed
     */
    public function getIdentityCard()
    {
        return $this->identityCard;
    }

    /**
     * @param mixed $identityCard
     */
    public function setIdentityCard($identityCard)
    {
        $this->identityCard = $identityCard;
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

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
{
    $this->salary = $salary;
}

}
?>
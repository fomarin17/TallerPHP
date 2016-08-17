<?php
require_once ('Employee.php');

/**
 * @version 1.0
 * @created 23-jul.-2016 22:02:54
 */
class BasePlusCommissionEmployee extends Employee
{

	private $commission;
	private $salary;
	private $sales;

	function __construct($basicSalary,$identityCard,$name,$lastName)
	{
	    parent::__construct($basicSalary,$identityCard,$name,$lastName);
	}

	function __destruct()
	{
	}

    public function calculateSalary($commissionForSales, $salesNumber)
    {
        $this->setSalary($commissionForSales * $salesNumber + $this->getBasicSalary());
    }
}
?>
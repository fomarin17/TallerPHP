<?php
require_once ('Employee.php');

/**
 * @version 1.0
 * @created 23-jul.-2016 22:02:54
 */
class EmployedByCommission extends Employee
{

	private $commissionForSales;
	private $salesNumber;

	function __construct($basicSalary,$identityCard,$name,$lastName)
	{
        parent::__construct($basicSalary = 0,$identityCard,$name,$lastName);
	}

	function __destruct()
	{
	}

	/**
	 * 
	 * @param commissionForSales
	 * @param salesNumber
	 */
	public function calculateSalary($commissionForSales, $salesNumber)
	{
        $this->setSalary($commissionForSales * $salesNumber);
	}

    /**
     * @return mixed
     */
    public function getCommissionForSales()
    {
        return $this->commissionForSales;
    }

    /**
     * @param mixed $commissionForSales
     */
    public function setCommissionForSales($commissionForSales)
    {
        $this->commissionForSales = $commissionForSales;
    }

    /**
     * @return mixed
     */
    public function getSalesNumber()
    {
        return $this->salesNumber;
    }

    /**
     * @param mixed $salesNumber
     */
    public function setSalesNumber($salesNumber)
    {
        $this->salesNumber = $salesNumber;
    }
}
?>
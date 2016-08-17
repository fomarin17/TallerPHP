<?php
require_once ('BasePlusCommissionEmployee.php');
require_once ('EmployedByCommission.php');
/**
 * @author Fredy
 * @version 1.0
 * @created 23-jul.-2016 22:02:54
 */
class TestEmployee
{
	private $employeeBaseCommision1;
	private $employeeBaseCommision2;
	private $employeeCommision1;
	private $employeeCommision2;
	public $m_Employee;

	function __construct()
	{
		$this->employeeBaseCommision1 = new BasePlusCommissionEmployee(800,123,"Fredy","Marín");
		$this->employeeBaseCommision1->calculateSalary(100,10);
		$this->employeeBaseCommision2 = new BasePlusCommissionEmployee(800,456,"Marcela","Acevedo");
		$this->employeeBaseCommision2->calculateSalary(100,20);
		$this->employeeCommision1 = new EmployedByCommission(0,789,"Yeimid","Pardo");
		$this->employeeCommision1->calculateSalary(500,20);
		$this->employeeCommision2 = new EmployedByCommission(0,147,"Sofia","Duarte");
		$this->employeeCommision2->calculateSalary(500,15);
		echo $this->employeeBaseCommision1;
		echo $this->employeeBaseCommision2;
		echo $this->employeeCommision1;
		echo $this->employeeCommision2;

	}

	function __destruct()
	{
	}
}
?>

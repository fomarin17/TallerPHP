<?php
require_once('Seller.php');
require_once ('Item.php');
require_once ('Commission.php');

class Payment implements Commission
{

	private $seller;

	function __construct()
	{
	}

	function __destruct()
	{
	}

    public function getCommission(Seller $seller)
    {
        $totalSel = $this->calculatorTotalSel($seller->getListItems());
        $valueCommission = $totalSel * 0.09;
        return $valueCommission;
    }
    public function calculatorTotalSel($listItems){
        $total = 0;
        foreach ($listItems as $item) {
          $total += $item->getValue();
        }
        return $total;
    }

}
?>
<?php

require_once ('seller.php');
require_once ('items.php');
class Main
{
    public $seller;
    public $item;

	function __construct($name,$salaryBase)
	{
	    $this->seller = new Seller($name,$salaryBase);
	}

	function __destruct()
	{
	}

	function addItem($name,$price,$quantity){
	    $this->item = new Item($name,$price,$quantity);
        $this->seller->addItem($this->item);
    }



}
?>
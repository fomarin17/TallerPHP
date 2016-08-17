<?php
require_once ('seller.php');



class Payment implements commission
{

	private $seller;

	function __construct()
	{
	}

	function __destruct()
	{
	}

    public function getCommission()
    {

    }

    /**
     * @return mixed
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param mixed $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }



}
?>
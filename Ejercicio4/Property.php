<?php


/**
 * @version 1.0
 * @created 31-jul.-2016 18:56:47
 */
abstract class Property
{

	private $address;
	private $area;
	private $basicPrice;
	private $old;
	private $type;

	function __construct($address,$area,$basicPrice,$old,$type)
	{
	    $this->address = $address;
        $this->area = $area;
        $this->basicPrice = $basicPrice;
        $this->old = $old;
        $this->type = $type;
	}

	function __destruct()
	{
	}

	abstract public function __toString();

	abstract public function getPrice();

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getBasicPrice()
    {
        return $this->basicPrice;
    }

    /**
     * @param mixed $basicPrice
     */
    public function setBasicPrice($basicPrice)
    {
        $this->basicPrice = $basicPrice;
    }

    /**
     * @return mixed
     */
    public function getOld()
    {
        return $this->old;
    }

    /**
     * @param mixed $old
     */
    public function setOld($old)
    {
        $this->old = $old;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}
?>
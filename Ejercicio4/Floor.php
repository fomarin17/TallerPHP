<?php
require_once ('Property.php');


/**
 * @version 1.0
 * @created 31-jul.-2016 18:56:47
 */
class Floor extends Property
{

	private $level;

	function __construct($address, $area, $basicPrice, $old, $type, $level)
	{
	    parent::__construct($address,$area,$basicPrice,$old,$type);
        $this->level = $level;
	}

	function __destruct()
	{
	}

    public function __toString()
    {
        return "";
    }

    public function getPrice()
    {
        $var = $this->getBasicPrice();
        //Validación de 15 años
        if ($this->getOld() < 15){
            $var = $var - ($var * 0.01);
        }else{
            $var = $var - ($var * 0.02);
        }
        //Validación nivel
        if ($this->getLevel() >= 3){
            $var = $var + ($var * 0.03);
        }
        return $var;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }


}
?>
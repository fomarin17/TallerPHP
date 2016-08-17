<?php
require_once ('Property.php');

/**
 * @version 1.0
 * @created 31-jul.-2016 18:56:47
 */
class Local extends Property
{

	private $windows;

	function __construct($address,$area,$basicPrice,$old,$type,$windows)
	{
        parent::__construct($address,$area,$basicPrice,$old,$type);
        $this->windows = $windows;
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
        //Validación de metros cuadrados
        if ($this->getArea() > 50){
            $var = $var + ($var * 0.01);
        }
        //Validación de ventanas
        if ($this->getWindows() < 2){
            $var = $var - ($var * 0.02);
        }
        if ($this->getWindows() > 4){
            $var = $var + ($var * 0.02);
        }
        return $var;

    }

    /**
     * @return mixed
     */
    public function getWindows()
    {
        return $this->windows;
    }

    /**
     * @param mixed $windows
     */
    public function setWindows($windows)
    {
        $this->windows = $windows;
    }



}
?>
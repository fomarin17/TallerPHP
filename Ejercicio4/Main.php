<?php
require_once ('Floor.php');
require_once ('Local.php');


/**
 * @author Fredy
 * @version 1.0
 * @created 31-jul.-2016 18:56:47
 */
class Main
{

	private $floor1;
	private $floor2;
	private $local1;
	private $local2;

	function __construct()
	{
	    $this->floor1 = new Floor("address1",60,1500,17,'PisoA',5);
        $this->floor2 = new Floor("address2",60,1500,10,'PisoB',2);
        $this->local1 = new Local("address3",60,1500,10,'LocalA',2);
        $this->local2 = new Local("address4",60,1500,10,'LocalB',5);
	}

	function __destruct()
	{
	}

    /**
     * @return Floor
     */
    public function getFloor1()
    {
        return $this->floor1;
    }

    /**
     * @param Floor $floor1
     */
    public function setFloor1($floor1)
    {
        $this->floor1 = $floor1;
    }

    /**
     * @return Floor
     */
    public function getFloor2()
    {
        return $this->floor2;
    }

    /**
     * @param Floor $floor2
     */
    public function setFloor2($floor2)
    {
        $this->floor2 = $floor2;
    }

    /**
     * @return Local
     */
    public function getLocal1()
    {
        return $this->local1;
    }

    /**
     * @param Local $local1
     */
    public function setLocal1($local1)
    {
        $this->local1 = $local1;
    }

    /**
     * @return Local
     */
    public function getLocal2()
    {
        return $this->local2;
    }

    /**
     * @param Local $local2
     */
    public function setLocal2($local2)
    {
        $this->local2 = $local2;
    }


}
?>
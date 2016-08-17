<?php


/**
 * @version 1.0
 * @created 24-jul.-2016 18:09:04
 */
abstract class Call
{

	private $callValue;
	private $destinationNumber;
	private $duration;
	private $originNumber;

	function __construct()
    {
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param duration
	 */
	abstract function calculateValue();

	public function toString()
	{
	}

    /**
     * @return mixed
     */
    public function getCallValue()
    {
        return $this->callValue;
    }

    /**
     * @param mixed $callValue
     */
    public function setCallValue($callValue)
    {
        $this->callValue = $callValue;
    }

    /**
     * @return mixed
     */
    public function getDestinationNumber()
    {
        return $this->destinationNumber;
    }

    /**
     * @param mixed $destinationNumber
     */
    public function setDestinationNumber($destinationNumber)
    {
        $this->destinationNumber = $destinationNumber;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getOriginNumber()
    {
        return $this->originNumber;
    }

    /**
     * @param mixed $originNumber
     */
    public function setOriginNumber($originNumber)
    {
        $this->originNumber = $originNumber;
    }


}
?>
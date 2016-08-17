<?php
require_once ('Call.php');

/**
 * @version 1.0
 * @created 24-jul.-2016 18:09:04
 */
class Mobile extends Call
{

	const COSTTIMEZONEONE = 200;
	const COSTTIMEZONETHREE = 100;
	const COSTTIMEZONETWO = 150;
    private $timeZone;

    function calculateValue()
    {
        $this->setCallValue( $this->getTimeZone() * $this->getDuration());
    }

    function __construct($var)
    {
        parent::__construct();
        if($var == 1)
            $var = self::COSTTIMEZONEONE;
        if($var == 2)
            $var = self::COSTTIMEZONETWO;
        if($var == 3)
            $var = self::COSTTIMEZONETHREE;
        $this->setTimeZone($var);
    }

	function __destruct()
	{
	}

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param mixed $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
}
?>
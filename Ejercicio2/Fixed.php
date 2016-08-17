<?php
require_once ('Call.php');

/**
 * @version 1.0
 * @created 24-jul.-2016 18:09:04
 */
class Fixed extends Call
{

	const COST = 200;

    function calculateValue()
    {
        $var = self::COST;
        $var *= $this->getDuration();
        $this->setCallValue($var);
    }

	function __construct()
	{
        parent::__construct();
	}

	function __destruct()
	{
	}
}
?>
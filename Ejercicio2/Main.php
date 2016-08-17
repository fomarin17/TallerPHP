<?php
require ('Fixed.php');
require_once ('Mobile.php');

session_start();
$main = new Main();
/**
 * @author Fredy
 * @version 1.0
 * @created 24-jul.-2016 18:09:04
 */
class Main
{

	private $callType;
	private $countCall = 0;
	private $totalCost;
    private $obj;

	function __construct()
	{
        if ($_POST["callType"] == "1"){
            $this->obj = new Fixed();
        }else{
            $this->obj = new Mobile($_POST["callType"]);
        }
        if (isset($_SESSION["totalCost"])){
            $this->setTotalCost($_SESSION["totalCost"]);
            $this->setCountCall($_SESSION["countCall"]);
        }
        $this->obj->setDuration($_POST["duration"]);
        $this->obj->setDestinationNumber($_POST["destination"]);
        $this->obj->setOriginNumber($_POST["origin"]);
        $this->obj->calculateValue();
        $this->setTotalCost($this->getTotalCost() + $this->obj->getCallValue());
        $this->setCountCall($this->getCountCall() + 1);

        $_SESSION["begin"] = "begin";

        $this->viewDatos();
	}

	function __destruct()
	{
	}

    /**
     *
     */
    function viewDatos(){
        $_SESSION['totalCost'] = $this->getTotalCost();
        $_SESSION['countCall'] = $this->getCountCall();
        $_SESSION['total'] = '<br><br><label>Cost total: </label><input name="totalCost" id="totalCost" type="text" value="'.$this->getTotalCost().'" disabled><br>'.
        '<br><br><label>Call total: </label><input name="countCall" id="countCall" type="text" value="'.$this->getCountCall().'" disabled><br>';
	    header("Location: index.php");
    }

    /**
     * @return mixed
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * @param mixed $callType
     */
    public function setCallType($callType)
    {
        $this->callType = $callType;
    }

    /**
     * @return mixed
     */
    public function getCountCall()
    {
        return $this->countCall;
    }

    /**
     * @param mixed $countCall
     */
    public function setCountCall($countCall)
    {
        $this->countCall = $countCall;
    }

    /**
     * @return mixed
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * @param mixed $totalCost
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;
    }
}
?>
<?php

require_once('Seller.php');
require_once('Item.php');
require_once ('Payment.php');

session_start();
if($_GET['pay'] == true){
    $main = new Main();
    $main->setSeller($_SESSION["Seller"]);
    echo $main->getPay();
}
else{
    if (isset($_SESSION["Seller"])) {
        $nameItem = $_POST['nameItem'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $main = new Main();
        $main->setSeller($_SESSION["Seller"]);
        $main->addItem($nameItem, $quantity, $price);
        $_SESSION["Seller"] = $main->getSeller();
        header("Location: index.php");
    } else {
        $nameUser = $_POST['nameUser'];
        $salaryBase = $_POST['salaryBase'];
        $nameItem = $_POST['nameItem'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $main = new Main();
        $main->seller->setName($nameUser);
        $main->seller->setSalaryBase($salaryBase);
        $main->addItem($nameItem, $quantity, $price);
        $_SESSION["Seller"] = $main->getSeller();
        header("Location: index.php");
    }
}
class Main
{
    public $seller;
    public $item;
    public $payment;

	function __construct()
	{
        $this->seller = new Seller();
        $this->payment = new Payment();
	}

	function __destruct()
	{

	}

	function addItem($nameItem, $price, $quantity){
	    $this->item = new Item($nameItem,$price,$quantity);
        $this->seller->addItem($this->item);

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

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {

    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    function getPay(){
        $pay = $this->payment = $this->payment->getCommission($this->seller);
        return $pay;
    }

}
?>
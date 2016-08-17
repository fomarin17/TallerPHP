<?php
require_once ('Learner.php');
require_once ('Administrative.php');
require_once ('Instructor.php');

/**
 * @author Fredy
 * @version 1.0
 * @created 31-jul.-2016 12:32:58
 */
class Main
{
	private $userAdministrative;
    private $userLearner;
    private $userInstructor;

	function __construct()
	{
        $this->userLearner = new Learner(1,'Fredy','Marin','union libre',4539);
        $this->userAdministrative = new Administrative(2,"Marcela","Acevedo","casada","2015/01/01","cad");
        $this->userInstructor = new Instructor(3,"Manuel","Gonzalez","Soltero","2014/05/05","cad");

        echo $this->userLearner;
        echo $this->userAdministrative;
        echo $this->userInstructor;

	}

	function __destruct()
	{
	}

}
?>
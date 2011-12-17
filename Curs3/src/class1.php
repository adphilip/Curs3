<?php


define('PI', '3.14');
echo 'valoarea lui PI: '.PI."<br />";

/**
 * Class
 * Enter description here ...
 * @author dell
 *
 */
class TestOne {
	/**
	 * Atribute
	 * Enter description here ...
	 * @var unknown_type
	 */
	var $varZero;
	static public $varStatic = 56;
	public $varOne;
	protected $varThree = 56.6;
	private  $varFour = 'fadfa';
	private $varFive = 'five';
	//constante
	const NR_VAR = 34;


	/**
	 * Methods
	 * Enter description here ...
	 */

	function __construct($zero, $one){
		$this->varZero = $zero;
		$this->varOne = $one;
		self::$varStatic = 456;

	}


	final function sumVariables() {
		return ($this->varOne + $this->varZero);
	}
	// suprascriere
	function radicalOne($inputRad){
		self::NR_VAR;
		echo "Radicalul 2 al lui $inputRad este: ". sqrt($inputRad)."<br />";
	}

}

//instanta pentru clasa

$instanceTestOne = new TestOne(45, 34);

$sumOne = $instanceTestOne->sumVariables();

echo "Suma este: ".$sumOne." si ".TestOne::$varStatic."<br />";
//overriding
$instanceTestOne->radicalOne(4);




?>
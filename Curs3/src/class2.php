<?php
include_once 'class1.php';
/**
 * 
 * Class mostenita
 * @author dell
 *
 */
class TestTwo extends TestOne  {
	
	private $varPrivate;
	
	function __construct() {
		$this->varPrivate = 235667;
	}
	
	function echoTwo() {
		echo "YES... mostenire .... $this->varPrivate<br/>";
		echo TestOne::NR_VAR."<br/>";
		
	}
	
	//suprascrire
	function radicalOne($inputRad){
		 $outputRad = sqrt($inputRad);
		 return $outputRad;
	}
	
	//overload
	function __call($name, $arguments){
		echo "function name:".$name."<br />";
		print_r($arguments);
		echo "<br />";
	}
}


//instanta

$instTestTwo = new TestTwo();

$instTestTwo->echoTwo();

echo "Constanta: ".TestOne::NR_VAR."<br />";

$outputRad = $instTestTwo->radicalOne(34);

echo "outputRAD: " .$outputRad."<br />";

$instTestTwo->TestOverload('Overload method');
$instTestTwo->TestOverload('Overload method 2222222222222','4');

?>
<?php

interface InterfaceOne{
	//error
	//public foundOne;
	
	function modulo3($varModulo3);
	
	function didi();
}

interface InterfaceTwo{
	//error
	//public foundOne;
	
	function modulo4($varModulo3);
	

}

/**
 * 
 * Enter description here ...
 * @author dell
 *
 */
class ThreeClass implements InterfaceOne, InterfaceTwo {
	
	function didi(){
		echo "didi <br />";
	}
	
	function modulo3($varModulo3) {
		if ($varModulo3 %3 == 0) {
			echo "Multiplu de 3 <br />";
		}
		else {
			echo "NU Multiplu de 3 <br />";
		}
	}
	//second interface
	function modulo4($varModulo3){
		echo "Modulo 4 second interface <br />";
	}
	
}

$instantaTrei = new ThreeClass();
$instantaTrei->modulo3(45);
$instantaTrei->didi();
$instantaTrei->modulo4(453);

//abstract

abstract class abstractTrei{
	abstract function treiBas();
}

class TreiNoAbs extends abstractTrei{
	public $varOne = 56;
	
	function treiBas(){
		echo "Trei Bas <br />";
	}
}

?>
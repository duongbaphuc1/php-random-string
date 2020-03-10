<?php 
namespace RandomStrings;

/**
 * author Phuc Duong
 */
class RandomStrings
{
	
	public function getRandomStrings(){

		$string = "ABCDEF"; 
		$countString = strlen($string) - 1;
		$stringArr = explode("", $tring);
		$stringReturn = "";
		$lengh = rand(1,100);

		for($i = 0; $i < $lengh; $i++){
			$stringReturn .= $stringArr[rand(1,$countString)];
		}

		return $stringReturn;
	}

	public function generate(){
		return $this->getRandomStrings();
	}
}
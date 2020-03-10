<?php 
namespace RandomStrings;

/**
 * author Phuc Duong
 */
class RandomStrings
{
	
	public function getRandomStrings(){

		$string = "ABCDEFabcd"; 
		$countString = strlen($string) - 1;
		$stringArr = str_split($string);
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
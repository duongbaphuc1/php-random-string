<?php 
namespace RandomStrings;

/**
 * author Phuc Duong
 */
class RandomStrings
{
	
	public function getRandomStrings($length = 0){

		$string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
		$countString = strlen($string) - 1;
		$stringArr = str_split($string);
		$stringReturn = "";
		
		if($length == 0){
			$length = rand(1,100);
		}

		for($i = 0; $i < $length; $i++){
			$stringReturn .= $stringArr[rand(1,$countString)];
		}

		return $stringReturn;
	}

	public function generate(){
		return $this->getRandomStrings();
	}
}
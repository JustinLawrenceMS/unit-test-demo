<?php

namespace App;

class Slugify
{

	public $string;

	public function trimString($string){

		$this->string = trim($string);

		return $this->string;	

	}

	public function changeSpacesToHyphens($string){

		$this->string = preg_replace([
						'/ /',
						'/,/',
						'/!/' ], 
							'-', $string);

		return $this->string;

	}

}
?>

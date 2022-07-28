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

		$this->string = str_replace(' ', '-', $string);

		return $this->string;

	}

}

$slug = new Slugify;

$slugified = $slug->changeSpacesToHyphens("be excellent to eachother, and party on!");

echo $slugified;

?>

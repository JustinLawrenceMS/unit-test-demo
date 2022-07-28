<?php

use App\Slugify;
use PHPUnit\Framework\TestCase;


class SlugifyTest extends TestCase
{
	
	public $string = "Be excellent to one another, and party on, dudes!";
	public $slug;

	public function helperSetSlug(){

		$slug = new Slugify;

		$this->slug = $slug->changeSpacesToHyphens($this->string);

	}

	public function test_spaces_are_changed_to_hyphens(){

		
		if(empty($this->slug)){

			$this->helperSetSlug();

		}
		echo "\n\n$this->slug\n\n";

		$this->assertSame(false, strpos($this->slug, ' '));

	}
	public function test_double_hyphens_removed(){

		if(empty($this->slug)){

			$this->slug = $this->helperSetSlug();//TODO write setter

		}
		$slug = new Slugify;

		$this->slug = $slug->removeDoubleHyphens($this->slug);

		echo "\n\n$this->slug\n\n";

		$this->assertSame(false, strpos($this->slug, '--'));

	}

}

?>

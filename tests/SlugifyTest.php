<?php

use App\Slugify;
use PHPUnit\Framework\TestCase;


class SlugifyTest extends TestCase
{
	
	public $string = "Be excellent to one another, and party on, dudes!";

	
	public function test_spaces_are_changed_to_hyphens(){

		$slugify = new Slugify;

		$slug = $slugify->changeSpacesToHyphens($this->string);

		$this->assertSame(false, strpos($slug, ' '));


		print "\n\n$slug\n\n"; 

		return $slug;

	}

	/**
	* @depends test_spaces_are_changed_to_hyphens
	*/

	public function test_double_hyphens_removed(string $slug): string

	{

		$slugify = new Slugify;

		$slug = $slugify->removeDoubleHyphens($slug);

		$this->assertSame(false, strpos($slug, '--'));
		

		print "\n\n$slug\n\n"; 

		return $slug;

	}

	/**
	* @depends test_double_hyphens_removed
	*/

	public function test_string_is_trimmed(string $slug): string

	{

		$slugify = new Slugify;

		$slug = $slugify->trimString($slug);

		$finalChar = substr($slug, -1);
		
		$this->assertNotSame('-', $finalChar);

		$this->assertNotSame(' ', $finalChar);

		print "\n\n$slug\n\n";

		return $slug;

	}

}

?>

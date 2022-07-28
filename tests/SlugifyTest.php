<?php

use App\Slugify;
use PHPUnit\Framework\TestCase;


class SlugifyTest extends TestCase
{

	public function test_spaces_are_changed_to_hyphens(){

		$string = "Be excellent to one another, and party on, dudes!";

		$slugify = new Slugify;

		$slug = $slugify->changeSpacesToHyphens($string);

		echo "\n\n$slug\n\n";

		$this->assertSame(false, strpos($slug, ' '));

	}

}

?>

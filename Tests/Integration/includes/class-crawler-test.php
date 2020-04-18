<?php
namespace WpMedia\Crawler\Tests\Integration;

use WpMedia\Crawler\Tests\Integration\TestCase as TestCase;
use \Brain\Monkey\Functions;
use Actions\Crawler as Crawler;

class CrawlerTest extends TestCase {
	
	public function test_enqueue_scripts_and_styles() {
		
		Crawler::enqueue_scripts_and_styles();
		$this->assertTrue( wp_script_is( 'wpmedia-crawler-js' ) );
	}
}

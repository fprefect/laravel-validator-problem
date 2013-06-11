<?php

class ExampleTest extends TestCase {

    public function setUp()  
    {  
        parent::setUp();  
        \Artisan::call('migrate');  
    } 

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}

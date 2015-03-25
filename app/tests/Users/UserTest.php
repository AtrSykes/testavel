<?php

use \Mockery as m;

class UserTest extends TestCase {

	public function setUp(){
		parent::setUp();

//		$this->mock('User');
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/users');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testIndex()
	{
		$user = m::mock('User');
		$me = new UsersController($user);

		$user->shouldReceive('all')->once();

		$me->index();
	}

	public function testUserControllerAdmin()
	{
		$user = m::mock('User');
		$me = new UsersController($user);

		$user->shouldReceive('getAttribute')->once()->andReturn(2);
		$this->assertTrue($me->isAdmin());

		$user->shouldReceive('getAttribute')->once()->andReturn(1);
		$this->assertFalse($me->isAdmin());
	}

	public function tearDown()
	{
		  Mockery::close();
	}

}

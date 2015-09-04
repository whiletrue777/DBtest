<?php
App::uses('UserInfosController', 'Controller');

/**
 * UserInfosController Test Case
 *
 */
class UserInfosControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_info',
		'app.user_infos'
	);
	public function setUp(){
		$this->UserInfosController = new UserInfosController();
		parent::setUp();
	}
/**
 * testTop method
 *
 * @return void
 */
	public function testTop() {

	}

/**
 * testShow method
 *
 * @return void
 */
	public function testShow() {
		$this->testAction('/user_infos/show');
		echo $this->view;

	}

/**
 * testVerify method
 *
 * @return void
 */
	public function testVerify() {
		
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testDel method
 *
 * @return void
 */
	public function testDel() {
		$this->markTestIncomplete('testDel not implemented.');
	}

/**
 * testUpdate method
 *
 * @return void
 */
	public function testUpdate() {
		$this->markTestIncomplete('testUpdate not implemented.');
	}

}

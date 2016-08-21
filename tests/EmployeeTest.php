<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmployeeTest extends TestCase
{
    /**
     * A basic test case for employee module.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
         ->click('Add New Employee')
         ->seePageIs('/create');
    }

    public function testNewUserRegistration()
	{
	    $this->visit('/create')
	         ->type('Camille', 'name')
	         ->type('wee@waa.com', 'email')
	         ->type('science', 'department')
	         ->seePageIs('/');
	}
}

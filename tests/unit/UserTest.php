<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	/** @test */
	public function ThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Billy');

		$this->assertEquals($user->getFirstName(), 'Billy');
	}

	/** @test */
	public function ThatWeCanGetTheLastName()
	{
		$user = new \App\Models\User;

		$user->setLastName('Garrett');

		$this->assertEquals($user->getLastName(), 'Garrett');
	}

	/** @test */
	public function FullNameReturned()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Ali');
		$user->setLastName('Mohebbi');

		$this->assertEquals($user->getFullName(), 'Ali Mohebbi');
	}

	/** @test */
	public function FirstAndLastNameAreTrimmed()
	{
		$user = new \App\Models\User;

		$user->setFirstName("    Ali      ");
		$user->setLastName("       Mohebbi          ");

		$this->assertEquals($user->getFirstName(), 'Ali');
		$this->assertEquals($user->getLastName(), 'Mohebbi');
	}

	/** @test */
	public function EmailAddressCanBeSet()
	{
		$user = new \App\Models\User;
		$email = 'ali@best.cool';
		$user->setEmail($email);

		$this->assertEquals($user->getEmail(), $email);
	}
}

?>
<?php  


class UserTest extends TestCase {

	public function testFirstNameIsProperlyFormatted()
	{

		$originalName = 'eRiC';
		$expectedResult = 'Eric';

		$user = new User();

		$result = $user->capitalize($originalName);

		$this->assertEquals($expectedResult, $result);
	}


	
}
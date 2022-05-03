<?php 

interface RegisterService{
	public function register($user);
}

class RegisterServiceImpl implements RegisterService
{
	public function register($user){
		$con = new DatabaseAdapterImpl();
		$con = $con->getDatabaseConnection();
		$service = new UserService();		
		$service->saveUser($user);
	}
}

 ?>
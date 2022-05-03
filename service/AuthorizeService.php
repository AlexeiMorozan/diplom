<?php 

interface AuthorizeService{
	public function authorize($user);
}

class AuthorizeServiceImpl implements AuthorizeService
{	
	public function authorize($user){
		$con = new DatabaseAdapterImpl();
		$con = $con->getDatabaseConnection();
		
		$query = "SELECT * from users where users.username='".$user->getUsername()."' and users.password='".$user->getPassword()."'";
		$statement=mysqli_query($con,$query) or die(mysqli_error($con));
		$rowsCount=mysqli_num_rows($statement);
		if($rowsCount==1){
			echo("<script>alert('Authorised');</script>");
		}
	}
}


 ?>
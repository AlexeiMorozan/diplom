<?php 
interface CrudUserRepo{
	public function save(User $user);
	public function delete($id);
	public function update($user);
	public function updatePublicFields($name,$surname,$id);
	public function find($id);
	public function findAll();
}

class CrudUserRepoImpl implements CrudUserRepo{
	//READY
	public function save(User $user){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$validator = new UserDataValidator();

		$selector=new SqlQueryFactory();
		$result=mysqli_query($con,$selector->findMaxId('users'));
		if(mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)) {
    			$maxId = $row["id"];
			}
		}
		$maxId+=1;

		$user->setName(
			$validator->clearData($user->getName())
		);
		$user->setSurname(
			$validator->clearData($user->getSurname())
		);
		$user->setIdnp(
			$validator->clearData($user->getIdnp())
		);
		$user->setUsername(
			$validator->clearData($user->getUsername())
		);
		$user->setPassword(
			$validator->clearData($user->getPassword())
		);

		$id= $maxId;
		$name=$user->getName();
		$surname=$user->getSurname();
		$idnp=$user->getIdnp();
		$username= $user->getUsername();
		$passwordHash = $user->getPassword();

		$query = "INSERT INTO users (id,name,surname,idnp,username,password) 
		VALUES ($id,'$name','$surname','$idnp','$username','$passwordHash') ";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	//READY
	public function delete($id){
		$con = new DatabaseAdapterImpl();
		$con = $con->getDatabaseConnection();

		$validator = new UserDataValidator();

		$factory = new SqlQueryFactory();
		//$query = $factory->buildDeleteSqlQuery("users",$id);

		$query="DELETE FROM users WHERE id=$id";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	//READY
	public function update($user){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$validator = new UserDataValidator();

		$id= $user->getId();
		$name=$user->getName();
		$surname=$user->getSurname();
		$idnp=$user->getIdnp();
		$username= $user->getUsername();
		$passwordHash = $user->getPassword();

		$query="UPDATE users SET 
		name='$name',
		surname='$surname',
		idnp='$idnp' 
		WHERE id=$id";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	public function updatePublicFields($name,$surname,$id){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$validator = new UserDataValidator();
		
		$query="UPDATE users SET 
		name='$name',
		surname='$surname' 
		WHERE id=$id";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	//READY
	public function find($id){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$factory=new SqlQueryFactory();
		$query =$factory->buildSelectSqlQuery("users",$id);
		$statement = mysqli_query($con,$query);

		$user = new User("","","","","");

		if(mysqli_num_rows($statement)>0){
			while($row = mysqli_fetch_assoc($statement)) {
				$user->setId($row["id"]);
				$user->setName($row["name"]);
				$user->setSurname($row["surname"]);
				$user->setIdnp($row["idnp"]);
				$user->setUsername($row["username"]);
				$user->setPassword($row["password"]);
			}
		}
		mysqli_close($con);
		return $user;
	}
	//READY
	public function findAll(){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$statement = mysqli_query($con,"SELECT * from users");
		return $statement;		
	}
	
}

?>
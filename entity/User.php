<?php 

class User
{
	private $id;
	private $name;
	private $surname;
	private	$idnp;

	private $password;
	private $username;

	public function __construct(
		$name,
		$surname,
		$idnp,
		$username,
		$password) {
    $this->name = $name;
    $this->surname = $surname;
    $this->idnp = $idnp;
    $this->username = $username;
    $this->password = $password;
  	}


	function clone(User $user) {
	$this->id = $user->getId();
    $this->name = $user->getName();
    $this->surname = $user->getSurname();
    $this->idnp = $user->getIdnp();
    $this->username = $user->getUsername();
    $this->password = $user->getPassword();
  	}
	public function setId($id){
		$this->id=$id;
	}
	public function setName($name){
		$this->name=$name;
	}
	public function setSurname($surname){
		$this->surname=$surname;
	}
	public function setIdnp($idnp){
		$this->idnp=$idnp;
	}
	public function setUsername($username){
		$this->username=$username;
	}
	public function setPassword($password){
		$this->password=$password;
	}

	/*--*/

	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getSurname(){
		return $this->surname;
	}
	public function getIdnp(){
		return $this->idnp;
	}
	public function getUsername(){
		return $this->username;
	}
	public function getPassword(){
		return $this->password;
	}
}

 ?>
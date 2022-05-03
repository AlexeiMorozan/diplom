<?php 

class UserService{
	public function saveUser(User $user){
		$repo = new CrudUserRepoImpl();
		$repo->save($user);
	}

	public function findUser($id){
		$repo = new CrudUserRepoImpl();
		return $repo->find($id);
	}

	public function updateUser(User $user){
		$repo = new CrudUserRepoImpl();
		$repo->update($user);
	}

	public function deleteUser($id){
		$repo = new CrudUserRepoImpl();
		$repo->delete($id);
	}
	public function updatePublicFields($name,$surname,$id){
		$repo = new CrudUserRepoImpl();
		$repo->updatePublicFields($name,$surname,$id);
	}
	public function findAll(){
		$repo = new CrudUserRepoImpl();
		return $repo->findAll();
	}
}
 ?>
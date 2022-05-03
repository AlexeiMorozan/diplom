<?php 

class ProductService
{
	public function saveProduct(Product $product){
		$repo = new CrudProductRepoImpl();
		$repo->save($product);
	}

	public function findProduct($id){
		$repo = new CrudProductRepoImpl();
		return $repo->find($id);
	}

	public function updateProduct(Product $product){
		$repo = new CrudProductRepoImpl();
		$repo->update($product);
	}

	public function updatePublicFields($name,$weight,$price,$id){
		$repo = new CrudProductRepoImpl();
		$repo->updatePublicFields($name,$weight,$price,$id);
	}

	public function deleteProduct($id){
		$repo = new CrudProductRepoImpl();
		$repo->delete($id);
	}

	public function findAll(){
		$repo = new CrudProductRepoImpl();
		return $repo->findAll();
	}
}

 ?>
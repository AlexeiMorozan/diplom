<?php 

interface CrudProductRepo{
	public function save(Product $product);
	public function delete($id);
	public function update(Product $product);
	public function updatePublicFields($name,$weight,$price,$id);
	public function find($id);
	public function findAll();
}

class CrudProductRepoImpl implements CrudProductRepo
{
	//READY
	public function save(Product $product){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();

		$id= $product->getId();
		$name=$product->getName();
		$weight=$product->getWeighte();
		$price=$product->getPrice();
		

		$query = "INSERT INTO products (id,name,weight,price) 
		VALUES ($id,'$name','$weight','$price')";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	//READY
	public function delete($id){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$query="DELETE FROM products WHERE id=$id";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	//READY
	public function update(Product $product){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$id= $product->getId();
		$name=$product->getName();
		$weight=$product->getWeight();
		$price=$product->getPrice();

		$query="UPDATE products SET 
		name='$name',
		weight=$weight,
		price=$price 
		WHERE id=$id";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	public function updatePublicFields($name,$weight,$price,$id){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$query="UPDATE products SET 
		name='$name',
		weight=$weight ,
		price=$price
		WHERE id=$id";
		mysqli_query($con,$query);
		mysqli_close($con);
	}
	//READY
	public function find($id){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();

		$query = "SELECT * from products where id=$id";
		$statement = mysqli_query($con,$query);
		$product = new Product("","","");

		if(mysqli_num_rows($statement)>0){
			while($row = mysqli_fetch_assoc($statement)) {
				$product->setId($row["id"]);
				$product->setName($row["name"]);
				$product->setWeight($row["weight"]);
				$product->setPrice($row["price"]);
			}
		}

		mysqli_close($con);
		return $product;
	}

	public function findAll(){
		$con=new DatabaseAdapterImpl();
		$con=$con->getDatabaseConnection();
		$statement = mysqli_query($con,"SELECT * from products");
		return $statement;
	}

}

 
 ?>
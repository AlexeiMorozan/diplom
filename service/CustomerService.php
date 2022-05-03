<?php 

interface CustomerService{
	public function addToCart($id);
	public function removeFromCart($id);
	public function buy();
	public function letReview($message);
}

class CustomerServiceImpl implements CustomerService
{
	public function addToCart($id){

	}

	public function removeFromCart($id){

	}

	public function buy(){

	}

	public function letReview($message){
		
	}
	
}



 ?>
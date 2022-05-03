<?php 
include('validator/Validator.php');

include('entity/User.php');
include('entity/Product.php');

include('util/connect.php');
include('util/SqlQueryFactory.php');

include('validator/UserDataValidator.php');

include('service/UserService.php');
include('service/ProductService.php');
include('service/AuthorizeService.php');
include('service/RegisterService.php');
include('service/CustomerService.php');

include('repository/CrudUserRepo.php');
include('repository/CrudProductRepo.php');

include('IDatabaseAdapter.php');
		

/*USER FUNCTIONS*/


if(isset($_POST['UCAButton'])){
	$service = new UserService();
	$service->saveUser(
		new User(
			$_POST['UCANameInputValue'],
			$_POST['UCASurnameInputValue'],
			$_POST['UCAIDNPInputValue'],
			$_POST['UCALoginInputValue'],
			$_POST['UCAPasswordInputValue']
		)
	);
}


if(isset($_POST['UCUButton'])){
	$service = new UserService();
	$service->updatePublicFields(
		$_POST['UCUNameValue'],
		$_POST['UCUSurnameValue'],
		$_POST['UCUIDValue']);
}
if(isset($_POST['UCDButton'])){
	$service = new UserService();
	$service->deleteUser($_POST['UCDDeleteID']);
}
/*PRODUCT FUNCTIONS*/
if(isset($_POST['PCAButton'])){
	$service = new ProductService();
	$service->saveProduct( 
		new Product(
			$_POST['PCANameValue'],
			$_POST['PCAWeightValue'],
			$_POST['PCAPriceValue']
		));
}
if(isset($_POST['PCUButton'])){
	$service = new ProductService();
	$service->updatePublicFields(
		$_POST['PCUNameValue'],
		$_POST['PCUWeightValue'],
		$_POST['PCUPriceValue'],
		$_POST['PCUIDValue']
	);
}
if(isset($_POST['PCDButton'])){
	$service = new ProductService();
	$service->deleteProduct(
		$_POST['PCDIDValue']
	);
}
/*MANAGER FUNCTIONS*/

?>
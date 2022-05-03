<?php 

include('validator/Validator.php');
include('entity/User.php');
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


$user= new User("Alexei1","Morozan","200601500941","g","g");

$service = new UserService();

//$service->saveUser($user1);
//$service->deleteUser(2);
//$service->updateUser($user1);

//$user1=$service->findUser(6);
//$user1=$service->findUser(8);
//echo($user1->getId());
//echo($user1->getName());

//$serv = new AuthorizeServiceImpl();
//$serv->authorise(new User("","","","g","g"));


 ?>


<?php 
include('validator/Validator.php');
include('entity/User.php');
include('util/connect.php');
include('util/SqlQueryFactory.php');
include('validator/UserDataValidator.php');
include('service/UserService.php');
include('service/AuthorizeService.php');
include('service/RegisterService.php');
include('service/CustomerService.php');
include('repository/CrudUserRepo.php');
include('IDatabaseAdapter.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tokura Food</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/regAuth.css">


	<!--BOOTSTRAP-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  	<!--JQUERY-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<div class="amheader">
		<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
		  <div class="container-fluid">
		    <a class="navbar-brand" id="a" href="#" style="color: black;">Tokura Food</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" aria-current="page" href="index.php" style="color: black;">Меню</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" href="#" style="color: black;">Войти</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#" style="color: black;">Акции</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#" style="color: black;">Отзывы</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#" style="color: black;">Контакты</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" href="#" style="color: black;">Корзина</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
	<div class="amcontent">
		<div class="menu1">
			<form class="regForm" method="post">
				<div class="regTitle">Регистрация</div>
				<label class="labelName">Имя:</label>
				<input type="text" class="nameInput" placeholder="Ваше имя" name="nameInput"></input>

				<label class="labelSurname">Фамилия:</label>
				<input type="text" class="surnameInput" placeholder="Ваша фамилия" name="surnameInput"></input>
				
				<label class="labelIdnp">IDNP:</label>
				<input type="text" class="idnpInput" placeholder="Ваш IDNP в пасспорте" name="idnpInput"></input>

				<label class="labelUsername">Логин:</label>
				<input type="text" class="usernameInput" name="usernameInput" placeholder="Ваш Логин для входа"></input>

				<label class="labelPassword">Пароль:</label>
				<input type="password" class="passwordInput" name="passwordInput"
				placeholder="Ваш пароль для входа"></input>

				<input type="submit" name="regSubmit" class="regSubmit" value="Зарегистрироваться">
				<?php 
				if(isset($_POST['regSubmit'])){
					$registerService = new RegisterServiceImpl();
					$registerService->register(
						new User(
							$_POST['nameInput'],
							$_POST['surnameInput'],
							$_POST['idnpInput'],
							$_POST['usernameInput'],
							$_POST['passwordInput']));
				}
				?>
			</form>
		</div>
		<div class="menu2">
			<form class="authForm" method="post">
				<div class="authTitle">Авторизация</div>
				<label class="labelLogin">Логин:</label><input type="text" class="loginInput" name="loginInput"></input>
				<label class="labelPass">Пароль:</label><input type="password" class="passInput" name="passInput"></input>
				<input type="submit" name="authSubmit" class="authSubmit" value="Войти">
				<?php 
				if(isset($_POST['authSubmit'])){
					$authrorizeService = new AuthorizeServiceImpl();
					$authrorizeService->authorize(new User("","","",$_POST['loginInput'],$_POST['passInput']));
				}
				?>
			</form>
		</div>
	</div>
	<div class="amfooter"></div>
	<script type="text/javascript">
		$(document).ready(function(){
			/*MENU1 MENU2*/
			$(".menu1").mouseenter(function(){
				$(".menu2").animate({"opacity":"0.5"},200);
			});
			$(".menu1").mouseleave(function(){
				$(".menu2").animate({"opacity":"1"},200);
			});

			$(".menu2").mouseenter(function(){
				$(".menu1").animate({"opacity":"0.5"},200);
			});
			$(".menu2").mouseleave(function(){
				$(".menu1").animate({"opacity":"1"},200);
			});


		});
	</script>
</body>
</html>
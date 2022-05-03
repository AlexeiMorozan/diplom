<?php 
include("page_scripts/adminPanelScript.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Panel</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/adminPanel/usersContent.css">
	<link rel="stylesheet" type="text/css" href="css/adminPanel/adminPanel_style.css">
	<!--JQUERY-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  	<style type="text/css">
  		.moduleStyle{
  			display: block;
			height: 100%;
			line-height: 50px;
			width: 100%;
			text-align: center;
  		}

  		.usersInfoContentDivStyle{
  			float:left;
			width: 100%;
			height: 30px;
			line-height: 30px;
			font-size: 1.1em;
			margin-top: 30px;
			margin-left: 40px;
			border-left: 4px solid black;
			padding-left: 10px;
  		}
  		.columnsHighlighter{
  			color:#ffa561;
  		}
  	</style>
 </head>
 <body>
 	<div class="leftPanel">
 		<div class="leftPanelName">
 			<div id="leftPanelName">Admin Panel</div>
 		</div>
 		<div class="leftPanelMenu">
 			<div class="menuUser"><label>Users</label></div>
 			<div class="menuProduct"><label>Products</label></div>
 			<div class="menuManager"><label>Managers</label></div>
 			<div class="tableUser"><label>Users info</label></div>
 			<div class="tableProduct"><label>Products info</label></div>
 			<div class="tableManager"><label>Managers info</label></div>
 			<div class="logs"><label>Logs</label></div>
 		</div>
 	</div>

 	<div class="content">
 		<form class="formSubmit" method="post">
	 		<div class="usersContent dispNone">
	 			<!--ADD-->
	 			<div class="usersContentAdd">
	 				<div class="UCATitle"><span class="moduleStyle">Add new user</span></div>
		 			<div class="UCANameLabel">Name:</div>
		 			<div class="UCANameInput"><input type="text" name="UCANameInputValue"></div>
		 			<div class="UCALoginLabel">Login:</div>
		 			<div class="UCALoginInput"><input type="text" name="UCALoginInputValue"></div>
		 			<div class="UCASurnameLabel">Surname:</div>
		 			<div class="UCASurnameInput"><input type="text" name="
		 				UCASurnameInputValue"></div>
		 			<div class="UCAPasswordLabel">Password:</div>
		 			<div class="UCAPasswordInput"><input type="password" name="UCAPasswordInputValue"></div>
		 			<div class="UCAIDNPLabel">IDNP:</div>
		 			<div class="UCAIDNPInput"><input type="text" name="UCAIDNPInputValue"></div>
		 			<div class="UCAButtonLabel">
						<input type="submit" class="button-52" role="button" value="Add user" name="UCAButton">
		 			</div>
	 			</div>
	 			<!--Update-->
	 			<div class="usersContentUpdate">
	 				<div class="UCUTitle"><span  class="moduleStyle">Update user</span></div>
	 				<div class="UCUNameLabel">New name:</div>
	 				<div class="UCUNameInput">
	 					<input type="text" name="UCUNameValue">
	 				</div>
	 				<div class="UCUSurnameLabel">New surname:</div>
	 				<div class="UCUSurnameInput">
	 					<input type="text" name="UCUSurnameValue">
	 				</div>
	 				<div class="UCUIDLabel">Search ID:</div>
	 				<div class="UCUIDInput">
	 					<input type="text" name="UCUIDValue">
	 				</div>
	 				<div class="UCUButtonLabel">
	 					<input type="submit" class="button-52" role="button" value="Update user" name="UCUButton">
	 				</div>
	 			</div>
	 			<!--Delete-->
	 			<div class="usersContentDelete">
	 				<div class="UCDTitle"><span class="moduleStyle">Delete user</span></div>
	 				<div class="UCDIDLabel">ID:</div>
	 				<div class="UCDIDInput">
	 					<input type="text" name="UCDDeleteID">
	 				</div>
	 				<div class="UCDButtonLabel">
	 					<input type="submit" class="button-52" role="button" value="Delete user" name="UCDButton">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="productsContent dispNone">
	 			<!--ADD-->
	 			<div class="productsContentAdd">
	 				<div class="PCATitle">
	 					<span class="moduleStyle">Add new product</span>
	 				</div>
		 			<div class="PCANameLabel">Name:</div>
		 			<div class="PCANameInput">
		 				<input type="text" name="PCANameValue">
		 			</div>
		 			<div class="PCAWeightLabel">Weight:</div>
		 			<div class="PCAWeightInput">
		 				<input type="text" name="PCAWeightValue">
		 			</div>
		 			<div class="PCAPriceLabel">Price:</div>
		 			<div class="PCAPriceInput">
		 				<input type="text" name="PCAPriceValue">
		 			</div>
		 			<div class="PCAButtonLabel">
		 				<input type="submit" class="button-52" role="button" value="Add product" name="PCAButton">
		 			</div>
	 			</div>
	 			<!--UPDATE-->
	 			<div class="productsContentUpdate">
	 				<div class="PCUTitle">
	 					<span class="moduleStyle">Update product</span>
	 				</div>
	 				<div class="PCUNameLabel">Name:</div>
	 				<div class="PCUNameInput">
	 					<input type="text" name="PCUNameValue">
	 				</div>
	 				<div class="PCUWeightLabel">Weight:</div>
	 				<div class="PCUWeightInput">
	 					<input type="text" name="PCUWeightValue">
	 				</div>
	 				<div class="PCUPriceLabel">Price:</div>
	 				<div class="PCUPriceInput">
	 					<input type="text" name="PCUPriceValue">
	 				</div>
	 				<div class="PCUIDLabel">Search ID:</div>
	 				<div class="PCUIDInput">
	 					<input type="text" name="PCUIDValue">
	 				</div>
	 				<div class="PCUButtonLabel">
	 					<input type="submit" class="button-52" role="button" value="Add product" name="PCUButton">
	 				</div>
	 			</div>
	 			<!--DELETE-->
	 			<div class="productsContentDelete">
	 				<div class="PCDTitle">
	 					<span class="moduleStyle">Delete product</span>
	 				</div>
	 				<div class="PCDIDLabel">Search ID:</div>
	 				<div class="PCDIDInput">
	 					<input type="text" name="PCDIDValue">
	 				</div>
	 				<div class="PCDButtonLabel">
	 					<input type="submit" class="button-52" role="button" value="Add product" name="PCDButton">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="managersContent dispNone">
	 			<!--ADD-->
	 			<div class="managersContentAdd">
	 				<div class="MCATitle">
	 					<span class="moduleStyle">Add new manager</span>
	 				</div>
	 				<div class="MCASearchLabel">
	 					Searh ID:
	 				</div>
	 				<div class="MCASearchInput">
	 					<input type="text" name="">
	 				</div>
	 				<div class="MCAButtonLabel">
	 					<input type="submit" class="button-52" role="button" value="Add manager" name="MCAButton">
	 				</div>
	 			</div>
				<!--DELETE-->
				<div class="managersContentDelete">
					<div class="MCDTitle">
						<span class="moduleStyle">Delete manager</span>
					</div>
					<div class="MCDSearchLabel">
						Search ID:
					</div>
					<div class="MCDSearchInput">
						<input type="text" name="">
					</div>
					<div class="MCDButtonLabel">
						<input type="submit" class="button-52" role="button" value="Add manager" name="MCDButton">
					</div>
				</div>
	 		</div>
	 		<div class="usersInfoContent dispNone" name="usersInfoContent" 
	 		style="background-color: white; 
	 		border-top: solid #ffa561 4px;">
	 			<input type="submit" name="ShowUsers" value="Show" class="button-52" role="button">
	 			<?php 
	 				if(isset($_POST['ShowUsers'])){
	 					$service = new UserService();
						$res = $service->findAll();
						while ($row = mysqli_fetch_array($res)) {
							echo 
							"
								<div class='usersInfoContentDivStyle'>
								<span><b class='columnsHighlighter'> UID:&nbsp;</b>".$row["id"]."</span>
								<span><b class='columnsHighlighter'>U_name:&nbsp;</b>".$row["name"]."</span>
								<span><b class='columnsHighlighter'>U_surname:&nbsp;</b>".$row["surname"]."</span>
								<span><b class='columnsHighlighter'>U_idnp:&nbsp;</b>".$row["idnp"]."</span>
								<span><b class='columnsHighlighter'>U_username:&nbsp;</b>".$row["username"]."</span>
								</div>";
						}
	 				}
	 			 ?>
	 		</div>
	 		<div class="productsInfoContent dispNone" 
	 		style="background-color: white; 
	 		border-top: solid #ffa561 4px;">
	 			<input type="submit" name="ShowProducts" value="Show" class="button-52" role="button">
	 			<?php 
	 				if(isset($_POST['ShowProducts'])){
	 					$service = new ProductService();
						$res = $service->findAll();
						while ($row = mysqli_fetch_array($res)) {
							echo 
							"
								<div class='usersInfoContentDivStyle'>
								<span>".$row["id"]."</span>
								<span>".$row["name"]."</span>
								<span>".$row["weight"]."</span>
								<span>".$row["price"]."</span>
								</div>";
						}
	 				}
	 			 ?>
	 		</div>
	 		<div class="managersInfoContent dispNone"
	 		style="background-color: white; 
	 		border-top: solid #ffa561 4px;">
	 		</div>
	 		<div class="logsContent dispNone">
	 			<input type="submit" name="">
	 		</div>
 		</form>
 	</div>
 	<script type="text/javascript" src="jquery/adminPanel_jq.js"></script>
 </body>
 </html>
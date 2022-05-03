<?php 

interface IDatabaseAdapter{
	public function getDatabaseConnection();
}


class DatabaseAdapterImpl implements IDatabaseAdapter
{
	public function getDatabaseConnection(){
		return mysqli_connect('localhost','root','','tokura');
	}
}

 ?>
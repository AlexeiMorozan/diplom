<?php 

interface ISqlFactory{
	public function buildSelectSqlQuery($table,$id);
	public function buildInsertSqlQuery($table,$object);
	public function buildUpdateSqlQuery($table,$criteria,$object);
	public function buildDeleteSqlQuery($table,$id);
	public function findMaxId($table);
}

class SqlQueryFactory implements ISqlFactory
{
	public function buildSelectSqlQuery($table,$id){
		$query = "SELECT * FROM $table WHERE id=$id";
		return $query;
	}

	public function buildInsertSqlQuery($table,$object){
		//UNUSED
	}

	public function buildUpdateSqlQuery($table,$criteria,$object){
		//UNUSED
	}

	public function buildDeleteSqlQuery($table,$id){
		$query="DELETE FROM $table WHERE id=$id";
		require $query;
	}

	public function findMaxId($table){
		$query="SELECT id FROM $table";
		return $query;
	}
}

?>
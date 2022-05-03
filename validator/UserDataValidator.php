<?php 
class UserDataValidator implements Validator
{
	public function clearData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data=strip_tags($data);
		return $data;
	}

	public function validateRegex($data){
		$n_err=0;
		if (!preg_match("/^[A-Za-z0-9]{1,40}$/",$data)) {
			 $n_err++;	
		}
		return $n_err;
	}

	public function validateRegexRanges($data,$rangeA,$rangeB){
		$n_err=0;
		if (!preg_match("/^[A-z0-9+()]{".$rangeA.",".$rangeB."}$/",$data)) {
			 $n_err++;	
		}
		return $n_err;
	}

}

 ?>
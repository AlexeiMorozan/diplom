<?php 

interface Validator{
	public function clearData($data);
	public function validateRegex($data);
	public function validateRegexRanges($data,$rangeA,$rangeB);
}

 ?>
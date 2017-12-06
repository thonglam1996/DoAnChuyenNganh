<?php
function loadClass($c)
{
	include ROOT."/classes/".$c.".class.php";
}

function getIndex($index, $value='')
{
	$data = isset($_GET[$index])? $_GET[$index]:$value;
	return $data;
}

function postIndex($index, $value='')
{
	$data = isset($_POST[$index])? $_POST[$index]:$value;
	return $data;
}

function requestIndex($index, $value='')
{
	$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
	return $data;
}

function isStrongPassword($pwd)
{
	$hasUppercase = false;
	$hasNumber = false;
	$hasLowercase = false;
	$hasSpecialChar = false;
	$str = str_split($pwd);
	foreach ($str as $c) {
		if($c >= "A" && $c <= "Z")
			$hasUppercase = true;
		if($c >= "a" && $c <= "z")
			$hasLowercase = true;
		if($c >= "0" && $c <= "9")
			$hasNumber = true;
		$specialchars = str_split(" !#$%&'()*+,-./:;<=>?@[\]^_`{|}~");
		if(in_array($c, $specialchars)!=false || $c == '"')
			$hasSpecialChar = true;
	}
	
	if($hasUppercase == true && $hasLowercase == true && $hasNumber== true && $hasSpecialChar == true)
		return true;
	return false;
	
}

function isValidName($name)
{
	$str = str_split($name);
	foreach ($str as $c) {
		$specialchars = str_split("!#$%&'()*+,-./:;<=>?@[\]^_`{|}~");
		if(in_array($c, $specialchars)==true || $c == '"')
			return false;
	}
	return true;
}
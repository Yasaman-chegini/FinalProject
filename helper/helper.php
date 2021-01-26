<?php 








function validation($data , $roles)
{
	$errors = [];
	$error = false;


	foreach ($roles as $inputName => $inputRoles) 
	{ 
		$inputRoles = explode("|", $inputRoles);

		foreach ($inputRoles as $role) 
		{
			$option = "";
			$temp = explode(":", $role);
			$role = $temp[0];
			if (count($temp) > 1) 
				$option = $temp[1];


			if (function_exists($role) === true) 
			{
				$temp = $role($data , $inputName , $option);
				if ($temp !== true)
				{
					$error = true;
					$errors[] = $temp;
					break;
				} 
			}
			else
			{
				$error = true;
				$errors[] = "{$role} vojod nadare";
				break;
			} 


		}





	}


	return [
				"error" => $error ,
				"errors" => $errors ,

				];


}

function setName($inputName)
{
	GLOBAL $config;
	if (isset($config['errorsName'][$inputName]))
		$inputName = $config['errorsName'][$inputName];
	return $inputName;
}

function myrequire($data , $inputName , $option)
{
	$mj = setName($inputName);
	if (isset($data[$inputName])) 
		return true;
	else
		return "{$mj} bayad vojod dashte bashe";
}


function minChar($data , $inputName , $option)
{
	$mj = setName($inputName);
	if (strlen($data[$inputName]) >= $option)
		return true;
	else
		return "{$mj} bayad hadaghal {$option} harf dashte bashe";
}


function maxChar($data , $inputName , $option)
{
	$mj = setName($inputName);
	if (strlen($data[$inputName]) <= $option) 
		return true;
	else
		return "{$mj} bayad hadaksar {$option} harf dashte bashe";
}


?>
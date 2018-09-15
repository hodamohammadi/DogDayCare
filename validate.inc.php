<?php

function validateEmail(&$errors, $field_list, $field_name) {
	$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}

function validateName(&$errors, $field_list, $field_name) {
	$pattern = '/^[a-zA-Z0-9._%+-]/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}


function validatePassword(&$errors, $field_list, $field_name) {
	$pattern = '/^[a-zA-Z0-9._%+-]{8,}$/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}


function validateDCName(&$errors, $field_list, $field_name) {
	$pattern = '/^[a-zA-Z0-9._%+-]/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}

function validateDescription(&$errors, $field_list, $field_name) {
	$pattern = '/^[a-zA-Z0-9._%+-]/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}

function validateLong(&$errors, $field_list, $field_name) {
	$pattern = '/^[0-9._%+-]/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}


function validateLat(&$errors, $field_list, $field_name) {
	$pattern = '/^[0-9._%+-]/';
	if (!isset($field_list[$field_name])|| empty($field_list[$field_name])){
		$errors[$field_name] = 'required';
	} else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = 'invalid';
	}
}

?>
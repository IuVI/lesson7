<?php
$message = requestGet('message');
function formIsValid() {
	return !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']);
}
function redirect($to) {
	header("Location: {$to}");
	die;
}
function requestPost($value) {
	if (isset($_POST[$value])) {
		return $_POST[$value];
	}
	return null;
}
function requestGet($value) {
	if (isset($_GET[$value])) {
		return $_GET[$value];
	}
	return null;
}
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		redirect('/hometask7?message=' . $message);
	}
	$message = "Form is not valid";
}
include 'layout.phtml';
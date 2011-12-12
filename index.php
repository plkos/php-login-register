<?php

header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);

$navigation = array(
	"home" => array(
		"href" => "?home",
		"text" => "Home"
	),
	"login" => array(
		"href" => "?login",
		"text" => "Login"
	),
	"registration" => array(
		"href" => "?registration",
		"text" => "Registration"
	)
);


$url = $_GET;
$page = 'home'; // default page

if( count($url) ) { // if something was received from $_GET
	foreach ($url as $page => $val); // save asked page
	if( !array_key_exists($page, $navigation) ) {
		$page = 'home'; // go to home if asked page doesn't exist
	}
}


$pageTitle = array(
	"home" => "Home page",
	"login" => "Please login",
	"registration" => "Create new account"
);

$pageTemplate = array(
	"home" => "home.tmpl",
	"login" => "login.tmpl",
	"registration" => "registration.tmpl"
);

$loginFormField = array(
	"login" => array(
		"label" => "Login",
		"type" => "text",
		"value" => "",
		"id" => "login",
		"name" => "login"
	),
	"password" => array(
		"label" => "Password",
		"type" => "password",
		"value" => "",
		"id" => "password",
		"name" => "password"
	),
	"doLogin" => array(
		"label" => "",
		"type" => "submit",
		"value" => "Login",
		"id" => "doLogin",
		"name" => "doLogin"
	),
);

$registrationFormField = array(
	"username" => array(
		"label" => "Username",
		"type" => "text",
		"value" => "",
		"id" => "username",
		"name" => "username"
	),
	"email" => array(
		"label" => "Email Address",
		"type" => "email",
		"value" => "",
		"id" => "email",
		"name" => "email"
	),
	"password" => array(
		"label" => "Password",
		"type" => "password",
		"value" => "",
		"id" => "password",
		"name" => "password"
	),
	"confirmPassword" => array(
		"label" => "Confirm Password",
		"type" => "password",
		"value" => "",
		"id" => "confirmPassword",
		"name" => "confirmPassword"
	),
	"createAccount" => array(
		"label" => "",
		"type" => "submit",
		"value" => "Create an account",
		"id" => "createAccount",
		"name" => "createAccount"
	)
);

$title = $pageTitle[$page];
$template = $pageTemplate[$page];

include_once './header.tmpl';
include_once './context.tmpl';
include_once './footer.tmpl';


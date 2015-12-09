<?php
	$langKey=$_GET['lang'];
	if($langKey=='fr'){
		echo json_encode(array(
			"HELLO"=>"Bonjour",
			"BUTTON_LANG_FR"=>"Français",
			"BUTTON_LANG_EN"=>"English",
			"BUTTON_LANG_ES"=>"Español",
			"WELCOME_MESSAGE"=>"Bienvenue sur mon portfolio."
			));
	}
	if($langKey=='en'){
		echo json_encode(array(
			"HELLO"=>"Hello",
	"BUTTON_LANG_FR"=>"Français",
	"BUTTON_LANG_EN"=>"English",
	"BUTTON_LANG_ES"=>"Español",
	"WELCOME_MESSAGE"=>"Welcome to my portfolio."
			));
	}
	if($langKey=='es'){
		echo json_encode(array(
			"HELLO"=>"Holla",
	"BUTTON_LANG_FR"=>"Français",
	"BUTTON_LANG_EN"=>"English",
	"BUTTON_LANG_ES"=>"Español",
	"WELCOME_MESSAGE"=>"Bienvenido a mi portafolio."
			));
	}
 ?>
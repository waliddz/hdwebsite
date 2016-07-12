<?php

/* Walid laggoune
	+Algeria Alger (Alger) Bordj El Bahri
	walidlaggoune159@gmail.com
	fb/dzBlackEdition7
*/

return $this->add([
	'/home'									=>	"HomeController.index|GET",
	'/'											=> 	"HomeController.index|GET",
	'/docs' 								=> 	"HomeController.showDocs|GET",
	'/blog' 								=> 	"HomeController.showBlogs|GET",
	"/install"							=> 	"HomeController.install|GET",
	'/routes' 							=> 	"HomeController.routes|GEt",
	'/controllers'					=>	"HomeController.controllers|GET",
	'/controllerAndView' 		=> 	"HomeController.controllerAndView|GET",
	'/addStyles'						=>	"HomeController.addStyles|GET",
	'/httpRedirect'					=> 	"HomeController.httpRedirect|GET",
	'/urls'									=> 	"HomeController.urls|GET",
	'/config'								=> 	"HomeController.config|GET",
	'/getDataFromDatabase' 	=> 	"HomeController.getDataFromDatabase|GET",
	'/insertToDatabase' 		=> 	"HomeController.insertToDatabase|GET",
	'/ownSql'								=> 	"HomeController.ownSql|GET",
	'/tokens'								=> 	"HomeController.tokens|GET",
	'/addToSession'					=> 	"HomeController.addToSession|GET",
	'/has'									=> 	"HomeController.has|GET",
	'/delete'								=> 	"HomeController.delete|GET",
	'/get'									=> 	"HomeController.get|GET",
	'/getAll'								=> 	"HomeController.getAll|GET",
	'/contact'							=> 	"HomeController.contact|GET",
	'/forDev'								=> 	"HomeController.forDev|GET"
]);

<?php

use Kernel\controllers\BaseController;

class HomeController extends BaseController {


	public function index() {
		return $this->View->show("home");
	}

	public function showDocs() {
		return $this->View->show("docs");
	}

	public function showBlogs() {
		return $this->View->show("blogs");
	}

	public function install() {
		return $this->View->show("install");
	}

	public function routes() {
		return $this->View->show("routes");
	}

	public function controllers() {
		return $this->View->show("controllers");
	}

	public function controllerAndView() {
		return $this->View->show("controllerAndView");
	}

	public function addStyles() {
		return $this->View->show("addStyles");
	}

	public function httpRedirect() {
		return $this->View->show("httpRedirect");
	}

	public function urls() {
		return $this->View->show("urls");
	}

	public function config() {
		return $this->View->show("config");
	}

	public function getDataFromDatabase() {
		return $this->View->show("getDataFromDatabase");
	}

	public function insertToDatabase() {
		return $this->View->show("insertToDatabase");
	}

	public function ownSql() {
		return $this->View->show("ownSql");
	}

	public function tokens() {
		return $this->View->show("tokens");
	}

	public function addToSession() {
		return $this->View->show("addToSession");
	}

	public function has() {
		return $this->View->show("has");
	}

	public function delete() {
		return $this->View->show("delete");
	}

	public function get() {
		return $this->View->show("get");
	}

	public function getAll() {
		return $this->View->show("getAll");
	}

	public function contact() {
		return $this->View->show("contact");
	}

	public function forDev() {
		return $this->View->show("forDev");
	}


}

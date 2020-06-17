<?php

namespace Controllers;

class SecureController  extends MenutambahanController
{
	public function index() {
		return $this->View();
	}

	public function login() {
		$errors = $this->auth->loginErrors();
		if (isset($errors[0]))
        {
        	$this->viewBag->errMsg = $errors;
        } 
        $this->viewBag->currentuser = $this->currentuser;
		return $this->View();
	}
}
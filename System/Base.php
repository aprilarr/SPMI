<?php
/**
	Name : Base Application
*/
namespace System;

class Base
{	
	public $route;	
	public $controllername;	
	public $actionname;	
	public $parameter;	
	public $controller;	

	public function __construct()
	{	
		new \Config\Config();	
		//new \Config\Language();			
	}	

	public function Start($route) {		
		$this->route = $route; 

		// does the route indicate a controller?
		if (isset($this->route->params['controller'])) {
		    // take the controller class directly from the route
		    $this->controllername = $this->route->params['controller'];
		} else {
		    // use a default controller
		    $this->controllername = 'Home';
		}
		define("BANTINGAN_CONTROLLER_NAME", $this->controllername);

		// does the route indicate an action?
		if (isset($this->route->params['action'])) {			
		    // take the action method directly from the route
		    $this->actionname = $this->route->params['action'];
		} else {
		    // use a default action
		    $this->actionname = 'index';
		}
		define("BANTINGAN_ACTION_NAME", $this->actionname);

		// does the route indicate a parameter?
		if (isset($this->route->params['parameter'])) {
			$this->parameter = $this->route->params['parameter'];
		} else {
			$this->parameter = array();
		}
		define("BANTINGAN_PARAMETER", $this->parameter);

		if (strtolower($this->controllername) == "error") {			
			$this->errorHandler(new \Exception($_SESSION["error_messages"], $_SESSION["error_code"]));
			exit();
		}
		
		$controllerFile = dirname(__FILE__) . '/../'.CONTROLLER_PATH.ucfirst(BANTINGAN_CONTROLLER_NAME).'Controller.php';

		try {
			// to dodge fatal error									
			if(file_exists($controllerFile)) {	 
				// requested controller file										
				$controllerFunction = str_replace("/","",CONTROLLER_PATH)."\\".ucfirst(strtolower(BANTINGAN_CONTROLLER_NAME))."Controller";
				$controller = new $controllerFunction(BANTINGAN_CONTROLLER_NAME, BANTINGAN_ACTION_NAME, $this->parameter); 	
				//$controller = new $controllerFunction(); 	

				$this->closeDBConnection();
			} else {
				$this->closeDBConnection();				
	            throw new \Exception(SHOW_ERROR?'Controller Not Found.':'Resources not found!', 504);					            
	        }  			    
		}
        catch(\Exception $err) {  
        	$this->errorHandler($err);
        }
	}

	private function errorHandler($errorException=null)
	{
		if ($errorException->getCode() != 200)
		{
			header("HTTP/1.0 ".$errorException->getCode()." ".$errorException->getMessage());
			$controllerName = "Shared";
			$methodName = "error.html";
			$smartyPage = new BaseSmarty();
			// set template default value
			$smartyPage->viewBag->errorException = $errorException;					
			$smartyPage->baseUrl = BASE_URL;
			$smartyPage->baseController = $controllerName;		
			$smartyPage->viewBag->pageTitle = "Error ".$errorException->getCode();		

			$smartyPage->CreateSmartyPage($controllerName."/".$methodName);
			//$smartyPage->CreateSmartyPage(ERROR_VIEW_HTML);			

			echo $smartyPage->contents;	
		}		

		$this->closeDBConnection();	
	}	

	private function closeDBConnection()
	{
		// closing database connection
		if (isset($GLOBALS['redbeans'])) 
        {		        	
        	$dataModel = new \System\BaseModel();
        	$dataModel->Close();
        }
	}
	
}
?>
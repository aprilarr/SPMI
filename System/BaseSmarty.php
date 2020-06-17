<?php
/**
	Name : Base Smarty Controller
	Description :
	smarty renderer	
*/
namespace System;

class BaseSmarty
{
	public $viewHtml;
	public $smarty;
	public $contents;
	public $masterPage;
	public $paperSize;
	public $pageOrientation;
	public $sharedSmarty;
	public $baseUrl;
	public $baseController;		
	public $siteTitle;
	public $pageTitle;
	public $viewBag;
	public $isAdmin;
	/*
	public $userName;
	public $userEmail;
	public $userRole;
	public $isLoggedIn;
	
	public $compCode;
	public $compName;
	*/
	public $currentuser;

	public function __construct()
	{
		$this->baseUrl = BASE_URL;
		$this->siteTitle = SITE_TITLE;		
		$this->viewBag = new \stdClass();	
		require_once(dirname(__FILE__) . '/../'.LIB_PATH.'Smarty/Autoloader.php');		
		\Smarty_Autoloader::register();		
	}

	public function CreateSmartyPage($viewPathArg)
	{		
		$viewPath=VIEW_PATH . $viewPathArg;	
		
		if	(file_exists($viewPath))	{
			//If the file exists, call the smarty engine			
			$this->smarty = new \Smarty(); 
			$this->smarty->caching = 0;
			// reserved variables for content
			$this->smarty->assign("baseUrl", $this->baseUrl );
			$this->smarty->assign("baseController", $this->baseController);			

			// page information variables
			$this->smarty->assign("siteTitle", $this->siteTitle);
			$this->smarty->assign("pageTitle", !isset($this->viewBag->pageTitle) ? $this->siteTitle : $this->viewBag->pageTitle);
			
			// set variable bag from controller
			foreach($this->viewBag as $key => $value) {
				$this->smarty->assign($key, $value);
			}							

			// render the page
			$this->contents = $this->smarty->fetch($viewPath);	

			// pdf output additional parameter
			$this->paperSize = $this->smarty->getTemplateVars("papersize");			
			$this->pageOrientation = $this->smarty->getTemplateVars("pageorientation");		
		}
		else	{
			// view not available
		    throw new \Exception("View for this method is not available", 404);				
		}	
		return $this->contents;
	}
}
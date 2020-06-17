<?php

namespace Controllers;

class MenutambahanController extends \System\BaseController
{
    public function __construct($controllerName=null, $actionName=null, $parameterArray=null)
	{	
        $menugenerator = new \UserManagement\MenuGenerator();
        $this->menucontent = $menugenerator->getmenu();

        // initialize viewBag
        $this->viewBag = new \StdClass();
        // set menu
        $this->viewBag->menucontent = $this->menucontent;

        parent::__construct($controllerName, $actionName, $parameterArray);
    }
}
<?php

namespace Controllers;

class MenubaseController extends \System\BaseController
{
    // Controller ini digunakan sebagai induk dari controller lain
    // untuk membuat menu, sehingga semua controller yang menginduk kesini bisa mengakses tampilan menu
    public function __construct($controllerName=null, $actionName=null, $parameterArray=null)
	{	
        // generate menu menggunakan library yang sudah dibuat, ada di folder Libs\UserManagement
        $menugenerator = new \UserManagement\MenuGenerator();
        $this->menucontent = $menugenerator->getmenu();

        // initialize viewBag
        $this->viewBag = new \StdClass();
        // set menu
        $this->viewBag->menucontent = $this->menucontent;
        parent::__construct($controllerName, $actionName, $parameterArray);
    }
}
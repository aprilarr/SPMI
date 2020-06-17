<?php

namespace Controllers;

class AdminController extends MenutambahanController
{
    public function index()	
    {         
        return $this->View();
    }

    // list menu
    public function menu()	
    {         
        $this->viewBag->menucontent = $this->menucontent;
        $tabelmenu = new \System\BaseModel("menu");
        $this->viewBag->listmenu = $tabelmenu->getall();
        return $this->View();
    }

    // form menu
    public function menuform($id=null)	
    {         
        $tabelmenu = new \System\BaseModel("menu");
        $datamenu = $tabelmenu->loadorcreate($id);
        $this->viewBag->datamenu = $datamenu;
        return $this->View();
    }

    // save menu
    public function menusave()	
    {         
        $tabelmenu = new \System\BaseModel("menu");
        $datamenu = $tabelmenu->updateorcreatemodel();
        $tabelmenu->save();
        return $this->RedirectToAction("menu");
    }
}
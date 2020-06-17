<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class BelajarController extends \System\BaseController
{
    public function index()	
    {  
        $dataalamat = new \System\BaseModel("dataalamat2");
        //$listdata = $dataalamat->getall("select * from dataalamat2 where textnama=?",['harry']);
        $listdata = $dataalamat->getall();

        $this->viewBag->listdata = $listdata;
        return $this->View();
    }

    public function dataalamat($satuaja=false)
    {
        $datanya = [
            [ "nama" => "sulo", "alamat" => "depok"],
            [ "nama" => "apu", "alamat" => "gdc"],
            [ "nama" => "faisal", "alamat" => "depok 1"],
            [ "nama" => "novi", "alamat" => "sawangan"],
        ];

        return $this->Json($satuaja?$datanya[0]:$datanya);
    }

    public function formregister($id=null)
    {
        $dataalamat = new \System\BaseModel("dataalamat2");  
        $datanya = $dataalamat->loadorcreate($id);
        
        // if (isset($id))
        // {
        //     $dataalamat = new \System\BaseModel("dataalamat2");        
        //     $datanya = $dataalamat->load($id);
        // }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function saveformregister()
    {
        $dataalamat = new \System\BaseModel("dataalamat2");
        //$dataalamat = new \Models\Dataalamat2Model();
        $datanya = $dataalamat->updateorcreatemodel();
        $dataalamat->save($datanya);

        //return $this->View();
        return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
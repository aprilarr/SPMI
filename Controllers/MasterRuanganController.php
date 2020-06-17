<?php
/**
    @class MasterRuanganController
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class MasterRuanganController extends \System\BaseController
{
    public function index()	
    {  
        $datajabatan = new \System\BaseModel("masterruangan");
        $listdata = $datajabatan->getall();

        $this->viewBag->listdata = $listdata;
        return $this->View();
    }

    public function form_ruangan($id=null)
    {
        $datajabatan = new \System\BaseModel("masterruangan");        
        $datanya = $datajabatan->loadorcreate($id);

        if (isset($id))
        {
            $datajabatan = new \System\BaseModel("masterruangan");        
            $datanya = $datajabatan->loadorcreate($id);       
        } else {
            $datanya['id'] = "";
            $datanya['nama_ruangan'] = "";
            $datanya['luas'] = "";
        }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function save()
    {
        $datajabatan = new \System\BaseModel("masterruangan");
        $datanya = $datajabatan->updateorcreatemodel(null, ['comp_code', 'compcode' ]);
        $datajabatan->save($datanya);

        return $this->RedirectToAction("index");
    }

    public function delete($id)
	{
		$datamodel = new \System\BaseModel("masterruangan");
		$data = $datamodel->load($id);
        $datamodel->trash($data);
        
		return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
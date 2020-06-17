<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class MasterPendidikanGuruController extends \System\BaseController
{
    public function index()	
    {  
        $datajabatan = new \System\BaseModel("masterpendidikanguru");
        $listdata = $datajabatan->getall();

        $this->viewBag->listdata = $listdata;
        return $this->View();
    }

    public function form_pendidikan($id=null)
    {
        $datajabatan = new \System\BaseModel("masterpendidikanguru");        
        $datanya = $datajabatan->loadorcreate($id);

        if (isset($id))
        {
            $datajabatan = new \System\BaseModel("masterpendidikanguru");        
            $datanya = $datajabatan->loadorcreate($id);       
        } else {
            $datanya['id'] = "";
            $datanya['kode'] = "";
            $datanya['deskripsi'] = "";
        }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function save()
    {
        $datajabatan = new \System\BaseModel("masterpendidikanguru");
        $datanya = $datajabatan->updateorcreatemodel(null, ['comp_code', 'compcode' ]);
        $datajabatan->save($datanya);

        return $this->RedirectToAction("index");
    }

    public function delete($id)
	{
		$datamodel = new \System\BaseModel("masterpendidikanguru");
		$data = $datamodel->load($id);
        $datamodel->trash($data);
        
		return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
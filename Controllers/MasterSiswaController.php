<?php
/**
    @class MasterSiswaController
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class MasterSiswaController extends \System\BaseController
{
    public function index()	
    {  
        $datajabatan = new \System\BaseModel("mastersiswa");
        $listdata = $datajabatan->getall();

        $this->viewBag->listdata = $listdata;
        return $this->View();   
    }

    public function form_siswa($id=null)
    {
        $datajabatan = new \System\BaseModel("mastersiswa");        
        $datanya = $datajabatan->loadorcreate($id);

        if (isset($id))
        {
            $datajabatan = new \System\BaseModel("mastersiswa");        
            $datanya = $datajabatan->loadorcreate($id);       
        } else {
            $datanya['id'] = "";
            $datanya['nis'] = "";
            $datanya['nama_siswa'] = "";
            $datanya['kelas'] = "";
        }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function save()
    {
        $datajabatan = new \System\BaseModel("mastersiswa");
        $datanya = $datajabatan->updateorcreatemodel(null, ['comp_code', 'compcode' ]);
        $datajabatan->save($datanya);

        return $this->RedirectToAction("index");
    }

    public function delete($id)
	{
		$datamodel = new \System\BaseModel("mastersiswa");
		$data = $datamodel->load($id);
        $datamodel->trash($data);
        
		return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
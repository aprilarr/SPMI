<?php
/**
    @class MasterPeralatanController
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class MasterPeralatanController extends \System\BaseController
{
    public function index()	
    {  
        $datajabatan = new \Models\MasterPeralatanModel();
        $listdata = $datajabatan->getPeralatan();

        $this->viewBag->listdata = $listdata;
        return $this->View();
    }

    public function form_peralatan($id=null)
    {
        $dataindikator = new \Models\MasterPeralatanModel();
        $datanya = $dataindikator->getPeralatanById($id);

        $datastandar = new \Models\MasterPeralatanModel(); 
        $listdatastandar = $datastandar->getRuangan();

        $this->viewBag->listdatastandar = $listdatastandar;

        if (isset($id))
        {
            $dataindikator = new \Models\MasterPeralatanModel();
            $datanya = $dataindikator->getPeralatanById($id);     
        } else {
            $datanya['id'] = "";
            $datanya['id_ruangan'] = "";
            $datanya['nama_alat'] = "";
            $datanya['jumlah'] = "";
            $datanya['id_ruangan_udpate'] = "";
        }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function save()
    {
        $datajabatan = new \System\BaseModel("masterperalatan");
        $datanya = $datajabatan->updateorcreatemodel(null, ['id_ruangan_udpate', 'comp_code', 'compcode' ]);
        $datajabatan->save($datanya);

        return $this->RedirectToAction("index");
    }

    public function delete($id)
	{
		$datamodel = new \System\BaseModel("masterperalatan");
		$data = $datamodel->load($id);
        $datamodel->trash($data);
        
		return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
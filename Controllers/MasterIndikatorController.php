<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class MasterIndikatorController extends \System\BaseController
{
    public function index()	
    {  
        $dataindikator = new \Models\MasterIndikatorModel(); 
        $listdata = $dataindikator->getIndikator();

        $this->viewBag->listdata = $listdata;
        return $this->View();
    }

    public function form_indikator($id=null)
    {
        $dataindikator = new \Models\MasterIndikatorModel();
        $datanya = $dataindikator->getIndikatorById($id);

        $datastandar = new \Models\MasterIndikatorModel(); 
        $listdatastandar = $datastandar->getStandar();

        $this->viewBag->listdatastandar = $listdatastandar;

        if (isset($id))
        {
            $dataindikator = new \Models\MasterIndikatorModel();
            $datanya = $dataindikator->getIndikatorById($id);     
        } else {
            $datanya['id'] = "";
            $datanya['id_standar'] = "";
            $datanya['no_indikator'] = "";
            $datanya['nama_indikator'] = "";
            $datanya['flag'] = "";
            $datanya['generate'] = 0;
            $datanya['id_standar_udpate'] = "";
            $datanya['flag_update'] = "P";
            $datanya['kondisi_saat_ini'] = "";
            $datanya['kondisi_ideal'] = "";
        }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function save()
    {
        $dataindikator = new \System\BaseModel("standarindikator");
        $datanya = $dataindikator->updateorcreatemodel(null, ['id_standar_update', 'flag_update', 'comp_code', 'compcode' ]);
        $dataindikator->save($datanya);

        return $this->RedirectToAction("index");
    }

    public function delete($id)
	{
		$datamodel = new \System\BaseModel("standarindikator");
		$data = $datamodel->load($id);
        $datamodel->trash($data);
        
		return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class MasterGuruController extends \System\BaseController
{
    public function index()	
    {  
        $dataindikator = new \Models\MasterGuruModel(); 
        $listdata = $dataindikator->getGuru();

        $this->viewBag->listdata = $listdata;
        return $this->View();
    }

    public function form_guru($id=null)
    {
        $dataindikator = new \Models\MasterGuruModel();
        $datanya = $dataindikator->getGuruById($id);

        $datajabatan = new \Models\MasterGuruModel(); 
        $listdatajabatan = $datajabatan->getJabatan();

        $this->viewBag->listdatajabatan = $listdatajabatan;

        $datajurusan = new \Models\MasterGuruModel(); 
        $listdatajurusan = $datajurusan->getJurusan();

        $this->viewBag->listdatajurusan = $listdatajurusan;

        $datamatpel = new \Models\MasterGuruModel(); 
        $listdatamatpel = $datamatpel->getMatpel();

        $this->viewBag->listdatamatpel = $listdatamatpel;

        $datapend = new \Models\MasterGuruModel(); 
        $listdatapend = $datapend->getPendidikan();

        $this->viewBag->listdatapend = $listdatapend;

        if (isset($id))
        {
            $dataindikator = new \Models\MasterGuruModel();
            $datanya = $dataindikator->getGuruById($id);     
        } else {
            $datanya['id'] = "";
            $datanya['nip'] = "";
            $datanya['nama_guru'] = "";
            $datanya['id_matpel'] = "";
            $datanya['id_jurusan'] = "";
            $datanya['id_jabatan'] = "";
            $datanya['id_pendidikan'] = "";
            $datanya['sertified'] = 0;
            $datanya['status_pedagogik'] = "";
            $datanya['status_profesional'] = "";
            $datanya['tahun_lahir'] = 0;
            $datanya['id_matpel_update'] = "";
            $datanya['id_jurusan_update'] = "";
            $datanya['id_jabatan_update'] = "";
            $datanya['id_pendidikan_update'] = "";
            $datanya['status_pedagogik_update'] = "";
            $datanya['status_profesional_update'] = "";
        }
        
        $this->viewBag->datanya = $datanya;
        return $this->View();
    }

    public function save()
    {
        $dataindikator = new \System\BaseModel("masterguru");
        $datanya = $dataindikator->updateorcreatemodel(null, ['id_matpel_update', 'id_jurusan_update', 'id_jabatan_update', 'id_pendidikan_update', 'status_pedagogik_update', 'status_profesional_update', 'comp_code', 'compcode' ]);
        $dataindikator->save($datanya);

        return $this->RedirectToAction("index");
    }

    public function delete($id)
	{
		$datamodel = new \System\BaseModel("masterguru");
		$data = $datamodel->load($id);
        $datamodel->trash($data);
        
		return $this->RedirectToAction("index");
    }

    public function showpdf()
    {
        return $this->DOCView();
    }
}
<?php
/**
    @class StandarPenilaianController
    @extends BaseController
    @description penilaian Controller
*/
namespace Controllers;

class StandarPenilaianController extends \System\BaseController
{
    public function index()	
    {    
        // set judul halaman
        $this->viewBag->pageTitle="Standar Penilaian";      
        
        $datapemetaan = new \Models\SPMIModel(); 
        $listdatapemetaan = $datapemetaan->getPemetaanMutu(4);

        $this->viewBag->listdatapemetaan = $listdatapemetaan;

        $this->viewBag->listdatapemetaan = $listdatapemetaan;

        $datarencanapemenuhan = new \Models\SPMIModel(); 
        $listdatarencanapemenuhan = $datarencanapemenuhan->getRencanaPemenuhan(4);

        $this->viewBag->listdatarencanapemenuhan = $listdatarencanapemenuhan;

        $datapelaksanaanpemenuhan = new \Models\SPMIModel(); 
        $listdatapelaksanaanpemenuhan = $datapelaksanaanpemenuhan->getPelaksanaanPemenuhan(4);

        $this->viewBag->listdatapelaksanaanpemenuhan = $listdatapelaksanaanpemenuhan;

        $datamonev = new \Models\SPMIModel(); 
        $listdatamonev = $datamonev->getMonev(4);

        $this->viewBag->listdatamonev = $listdatamonev;

        $datastrategi = new \Models\SPMIModel(); 
        $listdatastrategi = $datastrategi->getStrategi(4);

        $this->viewBag->listdatastrategi = $listdatastrategi;


        return $this->View();   
    }

    public function addIndikator()
    {
        // client side paging
        $dbusermanagement = new \Models\SPMIModel();
        $users = $dbusermanagement->addIndikator($_POST["id_indikator"]);
        return $this->Json("");
    }

    public function delIndikator($id)
    {
        // client side paging
        $dbusermanagement = new \Models\SPMIModel();
        $users = $dbusermanagement->delIndikator($id);
        return $this->View();
    }

    public function getIndikator()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getIndikatorByIdStandarAjax(4);

        return $this->Json($listdataindikator);
    }

    public function form_pemetaan($id=null)
    {
        if (isset($id))
        {
            $datapemetaan = new \Models\SPMIModel();
            $datanya = $datapemetaan->getPemetaanMutuById($id);
        }

        $this->viewBag->datanya=$datanya;

		return $this->View();
    }

    public function generateKondisiSaatIni()
    {
        // client side paging
        $dbspmi = new \Models\SPMIModel();
        $kondisi_saat_ini = $dbspmi->generateKondisiSaatIni($_POST["rumus"]);
        return $this->Json($kondisi_saat_ini);
    }

    public function savePemetaan()
	{

        $datamodel = new \System\BaseModel("pemetaanmutu");
		
		$newdata = $datamodel->updateorcreatemodel(null, ['no_indikator', 'rumus', 'nama_indikator', 'comp_code', 'compcode']);

		$datamodel->save($newdata);

        
		return $this->RedirectToAction("index");

    }

    public function form_rencana_pemenuhan($id=null)
    {
        if (isset($id))
        {
            $datarencana = new \Models\SPMIModel();
            $datanya = $datarencana->getRencanaPemenuhanById($id);
        }

        $this->viewBag->datanya=$datanya;

		return $this->View();
    }

    public function saveRencanaPemenuhan()
	{
        $datamodel = new \System\BaseModel("rencanapemenuhan");
		
		$newdata = $datamodel->updateorcreatemodel(null, ['no_indikator', 'nama_indikator', 'rekomendasi', 'comp_code', 'compcode']);

		$datamodel->save($newdata);

        
		return $this->RedirectToAction("index");

    }

    public function form_pelaksanaan_pemenuhan($id=null)
    {
        if (isset($id))
        {
            $datapelaksanaan = new \Models\SPMIModel();
            $datanya = $datapelaksanaan->getPelaksanaanPemenuhanById($id);
        }

        $this->viewBag->datanya=$datanya;

		return $this->View();
    }

    public function savePelaksanaanPemenuhan()
	{
        $datamodel = new \System\BaseModel("pelaksanaanpemenuhan");
		
		$newdata = $datamodel->updateorcreatemodel(null, ['no_indikator', 'nama_indikator', 'program', 'kegiatan', 'comp_code', 'compcode']);

		$datamodel->save($newdata);

        
		return $this->RedirectToAction("index");

    }

    public function form_monev($id=null)
    {
        if (isset($id))
        {
            $datamonev = new \Models\SPMIModel();
            $datanya = $datamonev->getMonevById($id);
        }

        $this->viewBag->datanya=$datanya;

		return $this->View();
    }

    public function saveMonev()
	{
        $datamodel = new \System\BaseModel("monev");
		
		$newdata = $datamodel->updateorcreatemodel(null, ['no_indikator', 'nama_indikator', 'program', 'kegiatan', 'input', 'proses', 'output', 'outcome', 'comp_code', 'compcode']);

		$datamodel->save($newdata);

        
		return $this->RedirectToAction("index");

    }

    public function form_strategi($id=null)
    {
        if (isset($id))
        {
            $datastrategi = new \Models\SPMIModel();
            $datanya = $datastrategi->getStrategiById($id);
        }

        $this->viewBag->datanya=$datanya;

		return $this->View();
    }

    public function saveStrategi()
	{
        $datamodel = new \System\BaseModel("penyusunanstrategi");
		
		$newdata = $datamodel->updateorcreatemodel(null, ['no_indikator', 'nama_indikator', 'program', 'kegiatan', 'input', 'proses', 'output', 'outcome', 'kesimpulan', 'comp_code', 'compcode']);

		$datamodel->save($newdata);

        
		return $this->RedirectToAction("index");

    }

    public function testerror()	
    { 
        throw new \Exception("Sorry Bro", 515);        
    }

    public function testwkhtmltopdf()	
    { 
        return $this->WKPDF();     
    }
}
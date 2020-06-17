<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class HomeController extends \System\BaseController
{
    public function index()	
    {    
        // set judul halaman
        $this->viewBag->pageTitle="Home";

        // set variabel halaman	
        $this->viewBag->hellomessage="OK,Welcome to Bantingan fast prototyping framework, this server run PHP version : ".PHP_VERSION;
        if (version_compare(PHP_VERSION, '7.0.0', '<')) {
            $this->viewBag->hellomessage.="<br>Bantingan Framework only runs with PHP 7";
        }        

        return $this->View();   
    }

    public function dashboard()	
    {         
        return $this->View();
    }

    public function getChartLabels()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getPemetaanCIndikator($_GET["idstandar"]);

        return $this->Json($listdataindikator);
    }

    public function getDetail()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getIndikatorByNo($_GET["noindikator"]);
        return $this->Json($listdataindikator);
    }

    public function getKesesuaianIndikator()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getKesesuaianIndikator($_GET["idstandar"]);
        return $this->Json($listdataindikator);
    }

    //get data pendidikan guru - subsubindikator 5.1.1
    public function getPendidikanGuru()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getPendidikanGuru();
        return $this->Json($listdataindikator);
    }

    //get data sertifikasi guru - subsubindikator 5.1.4
    public function getGuruSertified()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getGuruSertified();
        return $this->Json($listdataindikator);
    }

    //get data status pedagogik guru - subsubindikator 5.1.5
    public function getStatusPedagogik()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getStatusPedagogik();
        return $this->Json($listdataindikator);
    }

    //get data status profesional guru - subsubindikator 5.1.5
    public function getStatusProfesional()
    {
        $dataindikator = new \Models\SPMIModel(); 
        $listdataindikator = $dataindikator->getStatusProfesional();
        return $this->Json($listdataindikator);
    }

    public function login() 
    {
        $errors = $this->auth->loginErrors();
        $returnmessage = "";
        $returndesc="";

        if (isset($errors[0]))
        {
            $returnmessage = "Proses tidak berhasil";
            $returndesc = $errors[0];

            $_SESSION["returnmessage"] = $returnmessage;
            $_SESSION["returndesc"] = $returndesc;

            $this->viewBag->returnmessage = $returndesc;
            $this->viewBag->returndesc = $returndesc;
        } 

        //$this->viewBag->targeturl = $_SESSION['target_url'];
        return $this->View();
    }

    public function logout() 
    {
        return $this->RedirectToAction("login");
    }

    public function error()
    {
        //$this->viewBag->errorSource = $_SESSION['error_source'];
        $this->viewBag->errorMsg = $_SESSION['error_messages'];
        return $this->View();
    }
}
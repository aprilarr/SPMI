<?php

namespace Controllers;

class UsermanagementController extends MenubaseController
{
    // contoh halaman yang bisa dibuka semua tanpa login
    public function index()	
    {         
        return $this->View();
    }

    // contoh halaman yang bisa dibuka semua user yang login
    // daftarkan halaman di tabel pages
    public function alluser()	
    {                 
        return $this->View();
    }

    // contoh halaman yang bisa dibuka hanya oleh user yang masuk grup tertentu
    // daftarkan halaman di tabel pages
    // daftarkan mapping group di tabel grouppage, maka hanya member dari group tsb yg bisa buka halaman ini
    public function groupuser()	
    {                 
        return $this->View();
    }

/**
***
USERS
***
**/
    public function users() 
    {                         
        return $this->View();
    }

    public function userform($id = null) 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("users");
        // ambil data by id
        $userdata = $dbusermanagement->load($id);
        $this->viewBag->userdata = $userdata;
        return $this->View();
    }

    public function usersave() 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("users");
        $tbluser = $dbusermanagement->create();

        if (isset($_POST["id"])) {
            $tbluser = $dbusermanagement->load($_POST["id"]);
        }
        // mapping form data ke tabel column
        $tbluser->user_name = $_POST["username"];
        $tbluser->user_display_name = $_POST["displayname"];
        $tbluser->user_email = $_POST["email"];
        $tbluser->user_active = $_POST["user_active"];
        $tbluser->user_password_hash = password_hash($_POST["newpassword"],  PASSWORD_DEFAULT  );
        $tbluser->user_registration_datetime = date("Y-m-d H:i:s");
        $dbusermanagement->save($tbluser);
    
        return $this->RedirectToAction("users");
    }

    public function userlistajax()
    {
        // client side paging
        $dbusermanagement = new \Models\UsermanagementModel("users");
        $users = $dbusermanagement->getuserdatatable($_GET["search"]["value"],$_GET["start"],$_GET["length"]);
        return $this->Json($users);
    }

    public function usermappingform($id)
    {        
        $dbusermanagement = new \Models\UsermanagementModel("users");
        // ambil data by groupid
        $userdata = $dbusermanagement->load($id);
        $this->viewBag->userdata = $userdata;
        $this->viewBag->userid = $id;
        return $this->View();
    }

    public function usergrouplistajax($userid, $mode)
    {
        // client side paging
        $dbusermanagement = new \Models\UsermanagementModel("usergroup");
        $usergroup = $dbusermanagement->getusergroupdatatable($userid, $mode);
        return $this->Json($usergroup);
    }

    public function usermappingsave($mode, $id=null) 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("usergroup");
        $tblusergroup = null;

        if ($mode == "i") {
            $tblusergroup = $dbusermanagement->create();
            $tblusergroup->groupid = $_POST["groupid"];
            $tblusergroup->userid = $_POST["userid"];
            //$tblusergroup->roleid = $_POST["roleid"];
                    
            $dbusermanagement->saveWithAuditData($tblusergroup);
        } else if ($mode == "d") {
            $tblusergroup = $dbusermanagement->load($id);
            $dbusermanagement->trash($tblusergroup);
        }
    
        return $this->JsonResponse("0","Success",null);
    }


/**
***
GROUP
***
**/    
    public function groups() 
    {                         
        return $this->View();
    }

    public function groupform($id = null) 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("groups");
        // ambil data by id
        $groupdata = $dbusermanagement->load($id);
        $this->viewBag->groupdata = $groupdata;
        return $this->View();
    }

    public function groupsave() 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("groups");
        $tblgroup = $dbusermanagement->create();
        // mapping form data ke tabel column
        $tblgroup->name = $_POST["groupname"];
        $tblgroup->desc = $_POST["groupdesc"];
        
        $dbusermanagement->save($tblgroup);
    
        return $this->RedirectToAction("groups");
    }

    public function grouplistajax()
    {
        // client side paging
        $dbusermanagement = new \Models\UsermanagementModel("group");
        $group = $dbusermanagement->getgroupdatatable();
        return $this->Json($group);
    }

    public function groupmappingform($id)
    {
        $dbusermanagement = new \Models\UsermanagementModel("groups");
        // ambil data by groupid
        $groupdata = $dbusermanagement->load($id);
        $this->viewBag->groupdata = $groupdata;
        $this->viewBag->groupid = $id;
        return $this->View();
    }

    public function grouppagelistajax($groupid, $mode)
    {
        // client side paging
        $dbusermanagement = new \Models\UsermanagementModel("grouppage");
        $grouppage = $dbusermanagement->getgrouppagedatatable($groupid, $mode);
        return $this->Json($grouppage);
    }

    public function groupmappingsave($mode, $id=null) 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("grouppage");
        $tblgroup = null;

        if ($mode == "i") {
            $tblgroup = $dbusermanagement->create();
            $tblgroup->groupid = $_POST["groupid"];
            $tblgroup->pageid = $_POST["pageid"];
            $tblgroup->roleid = $_POST["roleid"];
                    
            $dbusermanagement->saveWithAuditData($tblgroup);
        } else if ($mode == "d") {
            $tblgroup = $dbusermanagement->load($id);
            $dbusermanagement->trash($tblgroup);
        }
    
        return $this->JsonResponse("0","Success",null);
    }

/**
***
PAGE
***
**/    
    public function pages() 
    {                         
        return $this->View();
    }

    public function pageform($id = null) 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("pages");
        // ambil data by id
        $pagedata = $dbusermanagement->load($id);
        $this->viewBag->pagedata = $pagedata;
        return $this->View();
    }

    public function pagesave() 
    {                 
        $dbusermanagement = new \Models\UsermanagementModel("pages");
        // pakai automapping form ke model
        $tblpage = $dbusermanagement->updateorcreatemodel();        
        // pakai automapping audit data
        $dbusermanagement->saveWithAuditData($tblpage);
    
        return $this->RedirectToAction("pages");
    }

    public function pagelistajax()
    {
        // client side paging
        $dbusermanagement = new \Models\UsermanagementModel("pages");
        $pages = $dbusermanagement->getpagedatatable();
        return $this->Json($pages);
    }    
}


<?php

namespace UserManagement;

class MenuGenerator
{
    public function getmenu()
    {
        $tabelmenu = new \System\BaseModel("menu");
        $listmenu = $tabelmenu->getall();
        $htmloutput = '<li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> User Management</a><ul class="nav-dropdown-items">';
        foreach ($listmenu as $key => $itemmenu) {	
            $htmloutput .= '<li class="nav-item"><a class="nav-link" href="'.BASE_URL.'/'.$itemmenu["menuurl"].'"><i class="fa '.$itemmenu["menuicon"].'"></i> '.$itemmenu["menulabel"].'</a></li>';
        }
        $htmloutput .= '</ul></li>';
        return $htmloutput;
    }
}
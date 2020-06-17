<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class UsersModel extends \System\BaseModel
{
	public function __construct()
	{  				
		parent::__construct("users", "usermanagement");
	}
}
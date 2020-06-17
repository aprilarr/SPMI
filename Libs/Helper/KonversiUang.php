<?php
/**
Paging Helper Module
Copyright Bantingan Framework 2017
Use with your own risk
*/
namespace Helper;

class KonversiUang extends \System\BaseModel
{
	public function RPkeDOLAR($amount)
	{
		return $amount / 10000;
	}

	public function DOLARkeRP($amount)
	{
		return $amount * 10000;
	}
}
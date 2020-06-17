<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class MasterPeralatanModel extends \System\BaseModel
{
	public function getRuangan()
	{
		$data_indikator = $this->getall("select * from masterruangan");

        return $data_indikator;
	}

	public function getPeralatan()
	{
		$data_indikator = $this->getall("select B.nama_ruangan, A.* from masterperalatan A inner join masterruangan B ON A.id_ruangan = B.id order by A.id asc");

        return $data_indikator;
	}

	public function getPeralatanById($id=null){

        $data_indikator = $this->getrow("select B.nama_ruangan, A.* from masterperalatan A inner join masterruangan B ON A.id_ruangan = B.id where A.id = '$id'");

        return $data_indikator;
		
	}
}
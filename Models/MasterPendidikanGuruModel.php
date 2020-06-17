<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class MasterPendidikanGuruModel extends \System\BaseModel
{
	public function getPendidikanGuruListAjax()
	{
		$data_indikator = $this->getall("select B.nama_standar, A.* from standarindikator A " +
										"inner join standarspmi B ON A.id_standar = B.id");

        return $data_indikator;
	}

	public function getIndikatorById($id=null){

        $data_indikator = $this->getrow("select B.nama_standar, A.* from standarindikator A " +
		"inner join standarspmi B ON A.id_standar = B.id where A.id = '$id'");

        return $data_indikator;
		
	}
}
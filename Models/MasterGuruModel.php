<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class MasterGuruModel extends \System\BaseModel
{
	public function getJabatan()
	{
		$data_indikator = $this->getall("select * from masterjabatan");

        return $data_indikator;
	}

	public function getJurusan()
	{
		$data_indikator = $this->getall("select * from masterjurusan");

        return $data_indikator;
	}

	public function getPendidikan()
	{
		$data_indikator = $this->getall("select * from masterpendidikanguru");

        return $data_indikator;
	}

	public function getMatpel()
	{
		$data_indikator = $this->getall("select * from mastermatpel");

        return $data_indikator;
	}

	public function getGuru()
	{
		$data_indikator = $this->getall("select B.nama_jabatan, C.nama_jurusan, D.nama_matpel, E.deskripsi, A.* from `masterguru` A inner join masterjabatan B on A.id_jabatan = B.id inner join masterjurusan C on A.id_jurusan = C.id inner join mastermatpel D on A.id_matpel = D.id inner join masterpendidikanguru E on A.id_pendidikan = E.id order by A.id asc");

        return $data_indikator;
	}

	public function getGuruById($id=null){

        $data_indikator = $this->getrow("select B.nama_jabatan, C.nama_jurusan, D.nama_matpel, E.deskripsi, A.* from `masterguru` A inner join masterjabatan B on A.id_jabatan = B.id inner join masterjurusan C on A.id_jurusan = C.id inner join mastermatpel D on A.id_matpel = D.id inner join masterpendidikanguru E on A.id_pendidikan = E.id where A.id = '$id' order by A.id asc");

        return $data_indikator;
		
	}
}
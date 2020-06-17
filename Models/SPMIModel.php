<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class SPMIModel extends \System\BaseModel
{
	public function getKesesuaianIndikator($idstandar) //get indikator yang hasilnya sesuai tidak sesuai / ya dan tidak
	{
		if($idstandar == "5"){
			$data_indikator = $this->getall("select B.no_indikator, B.nama_indikator,
				CASE 
				    WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN ' '
				    ELSE 'V'
				END as sesuai,
				CASE 
				    WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN 'V'
				    ELSE ' '
				END as tidaksesuai,
				CASE 
				    WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN 1 
				    ELSE 2 
				END as kondisi, A.id, A.id_indikator, A.kekuatan, A.kelemahan, A.kondisi_saat_ini, A.masalah, A.akar_masalah, A.rekomendasi 
				FROM pemetaanmutu A INNER JOIN standarindikator B ON A.id_indikator = B.id INNER JOIN standarspmi C ON B.id_standar = C.id 
				WHERE C.id = 5 AND B.flag = 'C' AND B.generate = 1 AND A.kondisi_saat_ini LIKE '%sesuai%'");
		} else {
			$data_indikator = $this->getall("select B.no_indikator, B.nama_indikator,
				CASE WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN ' '
					 WHEN A.kondisi_saat_ini NOT LIKE '%sesuai%' THEN ' ' 
				     WHEN A.kondisi_saat_ini IS NULL THEN ' ' 
				     ELSE 'V'
				END as sesuai, 
				CASE WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN 'V' 
					 WHEN A.kondisi_saat_ini NOT LIKE '%sesuai%' THEN ' '
				     WHEN A.kondisi_saat_ini IS NULL THEN ' '
				     ELSE ' '
				END as tidaksesuai, 
				CASE WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN 1 
					 WHEN A.kondisi_saat_ini NOT LIKE '%sesuai%' THEN 0 
				     WHEN A.kondisi_saat_ini IS NULL THEN 0 
				     ELSE 2 
				END as kondisi, 
				A.id, A.id_indikator, A.kekuatan, A.kelemahan, A.kondisi_saat_ini, A.masalah, A.akar_masalah, A.rekomendasi FROM pemetaanmutu A INNER JOIN standarindikator B ON A.id_indikator = B.id INNER JOIN standarspmi C ON B.id_standar = C.id WHERE C.id = '$idstandar' AND B.flag = 'C' AND B.generate = 1");
		} 

        	return $data_indikator;
	}

	public function getPemetaanCIndikator($idstandar) //get indikator by id standar && there is no this standar at pemetaan
	{
		if($idstandar == "5a"){
			$data_indikator = $this->getall("select B.no_indikator, LEFT(A.kondisi_saat_ini, LOCATE('% ', A.kondisi_saat_ini) - 1) as kondisi, A.id, A.id_indikator, A.kekuatan, A.kelemahan, A.kondisi_saat_ini, A.masalah, A.akar_masalah, A.rekomendasi FROM pemetaanmutu A INNER JOIN standarindikator B ON A.id_indikator = B.id INNER JOIN standarspmi C ON B.id_standar = C.id WHERE C.id = 5 AND B.flag = 'C' AND B.generate = 1 AND A.kondisi_saat_ini NOT LIKE '%sesuai%' AND A.kondisi_saat_ini IS NOT NULL AND A.kondisi_saat_ini <> ''");
		} else if($idstandar == "5b") {
			$data_indikator = $this->getall("select B.no_indikator, CASE WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN 1 ELSE 2 END as kondisi, A.id, A.id_indikator, A.kekuatan, A.kelemahan, A.kondisi_saat_ini, A.masalah, A.akar_masalah, A.rekomendasi FROM pemetaanmutu A INNER JOIN standarindikator B ON A.id_indikator = B.id INNER JOIN standarspmi C ON B.id_standar = C.id WHERE C.id = 5 AND B.flag = 'C' AND B.generate = 1 AND A.kondisi_saat_ini LIKE '%sesuai%'");
		}else {
			$data_indikator = $this->getall("select B.no_indikator, 
			CASE
			    WHEN A.kondisi_saat_ini LIKE '%tidak sesuai%' THEN 1
                WHEN A.kondisi_saat_ini NOT LIKE '%sesuai%' THEN 0
                WHEN A.kondisi_saat_ini IS NULL THEN 0
			    ELSE 2
			END as kondisi, 
			A.id, A.id_indikator, A.kekuatan, A.kelemahan, A.kondisi_saat_ini, A.masalah, A.akar_masalah, A.rekomendasi 
			FROM pemetaanmutu A
			INNER JOIN standarindikator B ON A.id_indikator = B.id
			INNER JOIN standarspmi C ON B.id_standar = C.id
			WHERE C.id = '$idstandar' AND B.flag = 'C' AND B.generate = 1");
		} 

        	return $data_indikator;
	}

	public function getPendidikanGuru() //get persentase pendidikan guru - 5.1.1
	{
		$data_indikator = $this->getall("select x.sma, x.d1, x.d2, x.d3, x.s1, x.s2, x.s3 from (SELECT 
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 1 or id_pendidikan = 2) / COUNT(*)) * 100),1) as sma,
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 8) / COUNT(*)) * 100),1) as d1,
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 7) / COUNT(*)) * 100),1) as d2,
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 3) / COUNT(*)) * 100),1) as d3,
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 4 or id_pendidikan = 5) / COUNT(*)) * 100),1) as s1,
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 6) / COUNT(*)) * 100),1) as s2,
					ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE id_pendidikan = 9) / COUNT(*)) * 100),1) as s3
				FROM `masterguru` WHERE 1) x
				");

    	return $data_indikator;
	}

	public function getGuruSertified() //get guru tersetifikat - 5.1.4
	{
		$data_indikator = $this->getall("select 
				ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE sertified = 1) / COUNT(*)) * 100),1) sertified, 
				ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE sertified = 0) / COUNT(*)) * 100),1) notsertified
			FROM `masterguru` WHERE 1");

    	return $data_indikator;
	}

	public function getStatusPedagogik() //get status pedagogik - 5.1.5
	{
		$data_indikator = $this->getall("select 
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_pedagogik = 'sangat kurang') / COUNT(*)) * 100),1) sangatkurang, 
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_pedagogik = 'kurang') / COUNT(*)) * 100),1) kurang,
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_pedagogik = 'cukup') / COUNT(*)) * 100),1) cukup,
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_pedagogik = 'baik') / COUNT(*)) * 100),1) baik,
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_pedagogik = 'sangat baik') / COUNT(*)) * 100),1) sangatbaik
			FROM `masterguru` WHERE 1");

    	return $data_indikator;
	}

	public function getStatusProfesional() //get status profesional - 5.1.5
	{
		$data_indikator = $this->getall("select 
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_profesional = 'sangat kurang') / COUNT(*)) * 100),1) sangatkurang, 
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_profesional = 'kurang') / COUNT(*)) * 100),1) kurang,
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_profesional = 'cukup') / COUNT(*)) * 100),1) cukup,
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_profesional = 'baik') / COUNT(*)) * 100),1) baik,
			ROUND((((SELECT COUNT(*) FROM `masterguru` WHERE status_profesional = 'sangat baik') / COUNT(*)) * 100),1) sangatbaik
			FROM `masterguru` WHERE 1");

    	return $data_indikator;
	}

	public function getIndikatorByNo($noindikator) //get indikator by id standar && there is no this standar at pemetaan
	{
		$data_indikator = $this->getall("select A.no_indikator, A.nama_indikator, A.kondisi_saat_ini, A.kondisi_ideal, B.masalah, B.akar_masalah, B.rekomendasi from standarindikator A inner join pemetaanmutu B on A.id = B.id_indikator where A.no_indikator = '$noindikator'");

        	return $data_indikator;
	}

	public function getIndikatorByIdStandar($idstandar) //get indikator by id standar && there is no this standar at pemetaan
	{
		$data_indikator = $this->getall("select B.id_indikator, A.id as id_indikator, concat(A.no_indikator,' ',A.nama_indikator) as des_indikator, A.id, A.id_standar, A.flag, A.generate, A.nama_indikator, A.no_indikator from standarindikator A left join pemetaanmutu B ON A.id = B.id_indikator where A.id_standar = '$idstandar' and A.flag='C' and B.id_indikator is null ");

        	return $data_indikator;
	}

	public function getIndikatorByIdStandarAjax($idstandar) //get indikator by id standar && there is no this standar at pemetaan
	{
		$data_indikator = $this->getall("select A.id as id, concat(A.no_indikator,' ',A.nama_indikator) as text from standarindikator A left join pemetaanmutu B ON A.id = B.id_indikator where A.id_standar = '$idstandar' and B.id_indikator is null ");
		
        	return ["results"=>$data_indikator];
	}

	public function generateKondisiSaatIni($rumus) //get indikator by id standar && there is no this standar at pemetaan
	{
		$kondisi_saat_ini = $this->getcell($rumus);
		
    	return $kondisi_saat_ini;
	}

	public function addIndikator($id_indikator) //exec sp insert to spmi cycle
	{
		$data_spmi = $this->execsql("CALL AddIndikator(?);", [$id_indikator]);

    	return $data_spmi;
	}

	public function delIndikator($id_pemetaan) //exec sp delete from spmi cycle
	{
		$data_spmi = $this->execsql("CALL DelIndikator('$id_pemetaan');");

    	return $data_spmi;
	}

	public function getPemetaanMutu($idstandar)
	{
		$data_pemeetaan_mutu = $this->getall("select B.flag, B.no_indikator, B.nama_indikator, A.* from pemetaanmutu A inner join standarindikator B ON A.id_indikator = B.id where B.id_standar = '$idstandar'");

    	return $data_pemeetaan_mutu;
	}

	public function getPemetaanMutuDT($idstandar)
	{
		$select = "select B.flag, B.no_indikator, B.nama_indikator, A.* ";
		$from = " from pemetaanmutu A inner join standarindikator B ON A.id_indikator = B.id ";
		$where = " where B.id_standar=?";

		$parameter[] = $idstandar;

		$sql = $select.$from.$where;
		$countsql = "select count(*) ".$from.$where;

		$countresult = $this->getcell($countsql, $parameter);

		// standard datatables format response
		$returnData = array();
		$returnData["recordsTotal"] = $countresult;
		$returnData["recordsFiltered"] = $countresult;
		$returnData["data"] = $this->getAll($sql, $parameter);

        	return $returnData;
	}

	public function getPemetaanMutuById($id=null){

		$data_pemeetaan_mutu = $this->getrow("select B.generate, B.rumus, B.flag, B.no_indikator, B.nama_indikator, A.* from pemetaanmutu A inner join standarindikator B ON A.id_indikator = B.id where A.id = '$id'");

		return $data_pemeetaan_mutu;
		
	}

	public function getRencanaPemenuhan($idstandar)
	{
		$data_rencana = $this->getall("select C.flag, C.no_indikator, C.nama_indikator, B.rekomendasi, A.* from rencanapemenuhan A inner join pemetaanmutu B ON A.id_pemetaan = B.id inner join standarindikator C on B.id_indikator = C.id where C.id_standar = '$idstandar'");

        	return $data_rencana;
	}

	public function getRencanaPemenuhanById($id=null){

		$data_rencana = $this->getrow("select C.flag, C.no_indikator, C.nama_indikator, B.rekomendasi, A.* from rencanapemenuhan A inner join pemetaanmutu B ON A.id_pemetaan = B.id inner join standarindikator C on B.id_indikator = C.id where A.id = '$id'");

		return $data_rencana;
			
	}

	public function getPelaksanaanPemenuhan($idstandar)
	{
		$data_pelaksanaan = $this->getall("select D.flag, D.no_indikator, D.nama_indikator, B.program, B.kegiatan, A.* from pelaksanaanpemenuhan A inner join rencanapemenuhan B ON A.id_rencana = B.id inner join pemetaanmutu C ON A.id_pemetaan = C.id inner join standarindikator D on C.id_indikator = D.id where D.id_standar = '$idstandar'");

        	return $data_pelaksanaan;
	}

	public function getPelaksanaanPemenuhanById($id=null){

		$data_pelaksanaan = $this->getrow("select D.flag, D.no_indikator, D.nama_indikator, B.program, B.kegiatan, A.* from pelaksanaanpemenuhan A inner join rencanapemenuhan B ON A.id_rencana = B.id inner join pemetaanmutu C ON A.id_pemetaan = C.id inner join standarindikator D on C.id_indikator = D.id where A.id = '$id'");

		return $data_pelaksanaan;
		
	}

	public function getMonev($idstandar)
	{
		$data_monev = $this->getall("select E.flag, E.no_indikator as no_indikator, E.nama_indikator, C.program, C.kegiatan, B.input, B.proses, B.output, B.outcome, A.* from monev A inner join pelaksanaanpemenuhan B ON A.id_pelaksanaan = B.id inner join rencanapemenuhan C ON A.id_rencana = C.id inner join pemetaanmutu D ON A.id_pemetaan = D.id inner join standarindikator E on D.id_indikator = E.id where E.id_standar = '$idstandar'");

        	return $data_monev;
	}

	public function getMonevById($id=null){

		$data_monev = $this->getrow("select E.flag, E.no_indikator as no_indikator, E.nama_indikator, C.program, C.kegiatan, B.input, B.proses, B.output, B.outcome, A.* from monev A inner join pelaksanaanpemenuhan B ON A.id_pelaksanaan = B.id inner join rencanapemenuhan C ON A.id_rencana = C.id inner join pemetaanmutu D ON A.id_pemetaan = D.id inner join standarindikator E on D.id_indikator = E.id where A.id = '$id'");

		return $data_monev;
		
	}

	public function getStrategi($idstandar)
	{
		$data_strategi = $this->getall("select F.flag, F.no_indikator, F.nama_indikator, D.program, D.kegiatan, C.input, C.proses, C.output, C.outcome, B.kesimpulan, A.* from penyusunanstrategi A inner join monev B ON A.id_monev = B.id inner join pelaksanaanpemenuhan C ON A.id_pelaksanaan = C.id inner join rencanapemenuhan D ON A.id_rencana = D.id inner join pemetaanmutu E ON A.id_pemetaan = E.id inner join standarindikator F on E.id_indikator = F.id where F.id_standar = '$idstandar'");

        	return $data_strategi;
	}

	public function getStrategiById($id=null){

		$data_strategi = $this->getrow("select F.flag, F.no_indikator, F.nama_indikator, D.program, D.kegiatan, C.input, C.proses, C.output, C.outcome, B.kesimpulan, A.* from penyusunanstrategi A inner join monev B ON A.id_monev = B.id inner join pelaksanaanpemenuhan C ON A.id_pelaksanaan = C.id inner join rencanapemenuhan D ON A.id_rencana = D.id inner join pemetaanmutu E ON A.id_pemetaan = E.id inner join standarindikator F on E.id_indikator = F.id where A.id = '$id'");

		return $data_strategi;
		
	}
}
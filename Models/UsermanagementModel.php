<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class UsermanagementModel extends \System\BaseModel
{
	public function __construct($_tablename = null)
	{  		
		parent::__construct($_tablename,"usermanagement");
	}

	public function getuserdatatable($keyword, $start, $length)
	{
		$select = "select * ";
		$from = " from users ";
		$where = " where user_name like ? or user_display_name like ?	"; // use PDO standard binding parameter

		$strSearch = str_replace("'", "''", $keyword); // replace single quotes to double
		$strSearch = str_replace(" ", "%", $strSearch); // replace space as wildcard
		$strSearch = strtolower('%'.$strSearch.'%'); // add wildcard before and after

		$parameter[] = $strSearch;	// bind for parameter 1
		$parameter[] = $strSearch;	// bind for parameter 2

		$sql = $select.$from.$where;
		$countfilteredsql = "select count(*) ".$from.$where; // count filtered data query
		$countallsql = "select count(*) ".$from; // count all data query

		$countfiltered = $this->getcell($countfilteredsql, $parameter); // execute query and get result
		$countall = $this->getcell($countallsql, $parameter); // execute query and get result

		$limit = " limit ".$start.",".$length; // limit data by paging information

		// standard datatables format response
        $returnData = array();
        $returnData["recordsTotal"] = $countall;
        $returnData["recordsFiltered"] = $countfiltered;
        $returnData["data"] = $this->getAll($sql.$limit, $parameter); // execute query for data

        return $returnData;
	}

	public function getgroupdatatable()
	{
		$select = "select * ";
		$from = " from groups ";
		$where = "";

		$sql = $select.$from.$where;
		$countsql = "select count(*) ".$from.$where;

		$countresult = $this->getcell($countsql);

		// standard datatables format response
        $returnData = array();
        $returnData["recordsTotal"] = $countresult;
        $returnData["recordsFiltered"] = $countresult;
        $returnData["data"] = $this->getAll($sql);

        return $returnData;
	}

	public function getusergroupdatatable($groupid, $mode)
	{
		$select = "select ug.id as mappingid, g.* ";
		$from = " from usergroup ug inner join groups g on ug.groupid=g.id ";
		$where = " where ug.userid=?";

		if ($mode == "available") 
		{
			$select = "select g.* ";
			$from = " from groups g left join usergroup ug on ug.groupid=g.id and ug.userid=? ";
			$where = " where ug.groupid is null ";
		} 

		$parameter[] = $groupid;

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

	public function getgrouppagedatatable($groupid, $mode)
	{
		$select = "select gp.id as mappingid, p.* ";
		$from = " from grouppage gp inner join pages p on gp.pageid=p.id ";
		$where = " where gp.groupid=?";

		if ($mode == "available") 
		{
			$select = "select p.* ";
			$from = " from pages p left join grouppage gp on gp.pageid=p.id and gp.groupid=? ";
			$where = " where gp.pageid is null ";
		} 

		$parameter[] = $groupid;

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

	public function getpagedatatable()
	{
		$select = "select * ";
		$from = " from pages ";
		$where = "";

		$sql = $select.$from.$where;
		$countsql = "select count(*) ".$from.$where;

		$countresult = $this->getcell($countsql);

		// standard datatables format response
        $returnData = array();
        $returnData["recordsTotal"] = $countresult;
        $returnData["recordsFiltered"] = $countresult;
        $returnData["data"] = $this->getAll($sql);

        return $returnData;
	}
}
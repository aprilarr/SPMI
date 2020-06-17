<?php
/**
Paging Helper Module
Copyright Bantingan Framework 2017
Use with your own risk
*/
namespace Helper;

class Gridpaging 
{		
	public $keyword = null;
	public $data = null;
	public $count = null;
	public $page = 1;
	public $length = PAGE_SIZE;
	public $pagestart = null;
	public $pageend = null;
	public $pagenumbertotal = null;
	public $pagenumbershowed = null;
	public $sort = null;
	public $field = null;
	public $rowstart = null;
	public $rowend = null;
	public $dbconnection = null;

	private $pagingname = null;
	private $sql = null;
	private $sqlcount = null;
	private $searchcolumns = null;

	public function __construct($pagingname,$query, $length, $dbconnection=null)
    {        
    	$keyword = isset($_GET["q"])?$_GET["q"]:"";		
    	$page = isset($_GET["p"])?$_GET["p"]:1;
    	$sort = isset($_GET["s"])?$_GET["s"]:"";		
		$field = isset($_GET["f"])?$_GET["f"]:"";	

		$this->pagingname = "grid".$pagingname;    	

    	$this->keyword = $keyword;    			
		$this->page = $page;		
		$this->sort = $sort;
		$this->field = $field;	
		$this->length = $length;
		$this->pagenumbershowed = 7;

		$this->sql = $query->sql;	
		$this->sqlcount = $query->sqlcount;
		$this->searchcolumns = $query->searchcolumns;

		$this->dbconnection = $dbconnection;

    	$this->Set();
    }

    public function Set()
    {
    	if (isset($_GET["search"]))
		{			
			unset($_SESSION[$this->pagingname]);
		}

		$gridinfo = isset($_SESSION[$this->pagingname])? $_SESSION[$this->pagingname] : [ "keyword" => null, "count" => 0];

    	$where = "";
    	$parameter = null;
		$parametercount = null;		
		$start = !isset($this->page) || $this->page < 0 || $this->page==""?0:($this->page - 1) * $this->length;		

    	if ($this->keyword != "")
		{
			$where = " where ";						
			foreach ($this->searchcolumns as $value) {
				if ($where != " where ")
				{
					$where .= " or ";	
				}
				$where .= " ".$value." like ? ";
				$parameter[] = "%".$this->keyword."%";
			}
			
			$this->sql .= $where;
			$this->sqlcount .= $where;			
			$parametercount = $parameter;
		}		
		
		if ($this->sort != "")
		{			
			$this->sql .= "  order by ".$this->field." ".$this->sort; 
		}

		$datamodel = new \System\BaseModel();
		if (isset($this->dbconnection))
		{
			$datamodel->selectedDB = $this->dbconnection;
		}
		
		$this->sql .= " limit ?,?";
		$parameter[] = (int)$start;
		$parameter[] = (int)$this->length;		
		$this->data = $datamodel->getall($this->sql,$parameter);
		$this->count = 0;

		if ($gridinfo["keyword"] != null && $gridinfo["keyword"] == $this->keyword)
		{
			$this->count = $gridinfo["count"];				
		} else {
			$this->count = $datamodel->getcell($this->sqlcount,$parametercount);
			$_SESSION[$this->pagingname] = [ "keyword" => $this->keyword, "count" => $this->count];						
		}	
    	
		$halfshowed = (int)($this->pagenumbershowed / 2);
		$pagenumbertotal = ceil($this->count/$this->length);
		$pagenumbershowed = $pagenumbertotal < $this->pagenumbershowed?$pagenumbertotal:$this->pagenumbershowed;

		$pagestart = $this->page <= $halfshowed? 1 : $this->page - $halfshowed;
		$pageend = $pagenumbertotal - $this->page <= $halfshowed? $pagenumbertotal : $this->page + $halfshowed;

		$pageend = $pagestart == 1? $pagenumbershowed : $pageend;
		$pagestart = $pageend == $pagenumbertotal? $pagenumbertotal - ($pagenumbershowed - 1) : $pagestart;		
		
		$this->pagestart = (int)$pagestart;
		$this->pageend = (int)$pageend;
		$this->pagenumbertotal = (int)$pagenumbertotal;
		$this->pagenumbershowed = (int)$pagenumbershowed;	
		$this->rowstart = $start;						
		$this->rowend = $start + count($this->data);	

		return $this;
    }
    
    public function Get() {    	
        return $this;
    }
}
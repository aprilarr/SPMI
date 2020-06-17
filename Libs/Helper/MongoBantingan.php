<?php
/**
MongoDB Helper Module
Copyright Bantingan Framework 2017
Use with your own risk
*/
namespace Helper;

class MongoBantingan
{   
    public $mongoclient;
    public $db;

    public $user;
    public $password;
    public $database;
    public $server;

    public $collection;
    public $collectionname;

    public function __construct($collection = null)
    {
        require_once __DIR__ .'/../MongoDB/functions.php'; 

        $this->user = MONGO_USER;
        $this->password = MONGO_PWD;
        $this->database = MONGO_DATABASE;
        $this->server = MONGO_SERVER;
        
        $this->db = $this->connect(MONGO_USER, MONGO_PWD, MONGO_SERVER, MONGO_DATABASE);

        if (isset($collection))
        {
            $this->collectionname = $collection;
            $this->collection = $this->db->$collection;    
        }        
    }

    public function connect($user,$password,$server,$database)
    {       
        $this->mongoclient = new \MongoDB\Client("mongodb://".$user.":".$password."@".$server."/".$database);        
        return $this->mongoclient->selectDatabase($database);
    }

    public function findall($collection,$column=null,$value=null)
    {
        $parameter = null;        
        foreach ($column as $key => $colname) {
            $searchvalue = trim($value[$key]);
            $regex = new \MongoDB\BSON\Regex ( $searchvalue,'i');
            $parameter[$colname] = $regex;
        }
        
        return iterator_to_array($this->db->$collection->find($parameter));
    }

    public function load($id)
    {
        if (isset($this->collection))
        {
            return $this->collection->findOne(array('_id' => new \MongoDB\BSON\ObjectID($id)));    
        } else {
            throw new \Exception("Please select collection", 1);
            
        }        
    }

    public function remove($id)
    {
        $this->collection->deleteOne(array('_id' => new \MongoDB\BSON\ObjectID($id)));
    }

    public function findpaging($column, $length)
    {
        $keyword = isset($_GET["q"])?$_GET["q"]:"";     
        $page = isset($_GET["p"])?$_GET["p"]:"";
        $sort = isset($_GET["s"])?$_GET["s"]:"";        
        $field = isset($_GET["f"])?$_GET["f"]:"";   

        $pagenumbershowed = 7;
        $count = 0;

        $skip = !isset($page) || $page < 0 || $page==""?0:($page - 1) * $length;

        $parameter = null;
        foreach ($column as $key => $colname) {
            $searchvalue = $keyword;      
            $regex = new \MongoDB\BSON\Regex ( $searchvalue,'i');      
            $parameter["\$or"][] = [$colname =>$regex];
        }

        $count = $this->collection->count($parameter);

        $mongooption["skip"] = $skip;
        $mongooption["limit"] = $length;
        if ($sort != "")
        {           
            $ascdesc = $sort == "asc"?1:-1;
            $mongooption["sort"] = [$field => $ascdesc];
        }
        $cursor = $this->collection->find($parameter,$mongooption);

        $halfshowed = (int)($pagenumbershowed / 2);
        $pagenumbertotal = ceil($count/$length);
        $pagenumbershowed = $pagenumbertotal < $pagenumbershowed?$pagenumbertotal:$pagenumbershowed;

        $pagestart = $page <= $halfshowed? 1 : $page - $halfshowed;
        $pageend = $pagenumbertotal - $page <= $halfshowed? $pagenumbertotal : $page + $halfshowed;

        $pageend = $pagestart == 1? $pagenumbershowed : $pageend;
        $pagestart = $pageend == $pagenumbertotal? $pagenumbertotal - ($pagenumbershowed - 1) : $pagestart;     

        $paging = new \StdClass();

        $paging->pagingname = "grid".$this->collectionname;     

        $paging->keyword = $keyword;              
        $paging->page = $page;            
        $paging->sort = $sort;
        $paging->field = $field;  
        $paging->length = $length;
        $paging->pagenumbershowed = $pagenumbershowed; 

        $paging->data = iterator_to_array($cursor);
        $paging->count = $count;
        $paging->pagestart = (int)$pagestart;
        $paging->pageend = (int)$pageend;
        $paging->pagenumbertotal = (int)$pagenumbertotal;
        $paging->pagenumbershowed = (int)$pagenumbershowed;   
        
        return $paging;
    }
}
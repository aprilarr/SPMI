<?php
/**
    @class BaseModel

    caching data?
*/
namespace System;

// we use and love redbeanphp
use RedBeanPHP\Facade as R;

class BaseModel 
{   
    public $redbeans;
    public $tablename;

    public $selectedDB;
    public $dbType;
    public $dbConnection;

    public function __construct($_tablename = null, $_connectionname = "default")
    {           
        $this->dbConnection = json_decode(DATABASE_CONNECTIONS);
        $this->selectedDB = $_connectionname;

        $tableName = explode("\\", get_called_class())[1];      
        $this->tablename = isset($_tablename)?$_tablename:lcfirst(str_replace("Model","",$tableName));      
        if ($this->tablename == "Base") {
            $this->tablename = null;
        }           

        // need to check if redbeans already started
        if (!isset($GLOBALS['redbeans'])) 
        {            
            foreach ($this->dbConnection as $key => $dbsettings) {   
            if ($dbsettings->type == "sqlite")
                {
                    R::addDatabase($key,$dbsettings->type.':'.$dbsettings->server,$dbsettings->user,$dbsettings->password,REDBEAN_FREEZE);    
                } else if ($dbsettings->type == "postgresql" || $dbsettings->type == "mysql")    
                {                                               
                    R::addDatabase($key,$dbsettings->type.':host='.$dbsettings->server.";dbname=".$dbsettings->database,$dbsettings->user,$dbsettings->password,REDBEAN_FREEZE);
                } else if ($dbsettings->type == "sqlsrv")
                {                                         
                    R::addDatabase($key,$dbsettings->type.':Server='.$dbsettings->server.";Database=".$dbsettings->database,$dbsettings->user,$dbsettings->password,REDBEAN_FREEZE);                        
                } else {                        
                    R::addDatabase($key,$dbsettings->type.':host='.$dbsettings->server.";dbname=".$dbsettings->database,$dbsettings->user,$dbsettings->password,REDBEAN_FREEZE);
                }
            }
                    
            $GLOBALS['redbeans'] = true;

            $this->setConnection();
        }
    }    

    public function __call($method,$arguments) {        
        if(method_exists($this, $method)) {
            $this->setConnection();                            
            return call_user_func_array(array($this,$method),$arguments);
        }
    }

    public function setConnection()
    {
        if (!isset($this->selectedDB))
        {
            $this->selectedDB = "default";
        }
        $selecteddb = $this->selectedDB;
        $this->dbType = $this->dbConnection->$selecteddb->type;
        $GLOBALS['dbType'] = $this->dbType;
        R::selectDatabase($this->selectedDB);
    }

    private function Close()
    {
        return R::close();
    }

    public function ThrowError($msg, $code)
    {
        throw new \Exception($msg, $code);  
    }

    public function RedBeansListToArray($redbeansdata) {        
        $newArray = array();
        foreach ($redbeansdata as $key => $value) {
            $newArray[] = (array)json_decode($value); // turn redbeans object to array
        }
        return $newArray;      
    }

    public function RedBeansToArray($redbeansdata) {
        $newArray = array();
        foreach ($redbeansdata as $key => $value) {
            $newArray[$key] = $value;
        }
        return $newArray;      
    }

    public function clean($string)
    {
        // clean string from non alphanumeric
        return str_replace("'", "`", $string); 
    }

    private function load($id, $tablename = null)
    {                       
        if (isset($tablename)) {
            $this->tablename = $tablename;
        }
        //echo $this->tablename;
        if (isset($this->tablename)) {          
            $this->redbeans = R::load(strtolower($this->tablename), $id);                   
            return $this->redbeans;             
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);           
    }

    private function create($tablename = null)
    {               
        if (isset($tablename)) {
            $this->tablename = $tablename;
        }
        //echo "creating object of table : ".$this->tablename."<br>";
        if (isset($this->tablename)) {          
            $this->redbeans = R::dispense(lcfirst($this->tablename));       
            //echo "object created : ".$this->tablename."<br>";
            return $this->redbeans; 
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);           
    } 

    private function loadorcreate($id, $tablename = null)
    {                       
        if (isset($tablename)) {
            $this->tablename = $tablename;
        }
        //echo "creating object of table : ".$this->tablename."<br>";
        if (isset($this->tablename)) {          
            $this->redbeans = R::load(strtolower($this->tablename), $id);

            if (!isset($this->redbeans)) {
                $this->redbeans = R::dispense(lcfirst($this->tablename));           
            }            
            //echo "object created : ".$this->tablename."<br>";
            return $this->redbeans; 
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);           
    } 

    private function find($tablename, $parameter, $parameterarray)
    {                
        if (isset($tablename)) {
            $this->tablename = $tablename;
        }
        if (isset($this->tablename)) {          
            $findResult = R::findOne($tablename, $parameter, $parameterarray);
            
            if (isset($findResult)) {
                $this->redbeans = $findResult;                
            } else {
                $this->redbeans = null;
            }
            return $this->redbeans;
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);                   
    }

    private function findAll($tablename, $parameter, $parameterarray)
    {        
        $findResult = R::findAll($tablename, $parameter, $parameterarray);
        
        if (isset($findResult)) {
            $this->redbeans = $findResult;                
        } else {
            $this->redbeans = null;
        }
        return $this->redbeans;
        //throw new \Exception('Cannot create object, table name is unknown.', 50);                   
    }   

    private function findwith($parameter, $parameterarray)
    {
        if (isset($this->tablename)) {          
            $findResult = R::findOne($this->tablename, $parameter, $parameterarray);
            
            if (isset($findResult)) {
                $this->redbeans = $findResult;                
            } else {
                $this->redbeans = null;
            }
            return $this->redbeans;
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);                   
    }

    private function findallwith($parameter, $parameterarray)
    {        
        if (isset($this->tablename)) {          
            $findResult = R::findAll($this->tablename, $parameter, $parameterarray);
            
            if (isset($findResult)) {
                $this->redbeans = $findResult;                
            } else {
                $this->redbeans = null;
            }
            return $this->redbeans;
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);                   
    }

    private function findlike($parameterarray)
    {
        if (isset($this->tablename)) {          
            $this->redbeans = R::findLike($this->tablename, $parameterarray);                        
            return $this->redbeans;
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);                   
    } 

    private function findorcreate($parameterarray)
    {
        if (isset($this->tablename)) {          
            $this->redbeans = R::findOrCreate($this->tablename, $parameterarray);                        
            return $this->redbeans;
        } 
        throw new \Exception('Cannot create object, table name is unknown.', 50);                   
    }    

    private function save($redbeansdata = null)
    {        
        if (!isset($redbeansdata)) {            
            $redbeansdata = $this->redbeans;            
        }               

        if (isset($redbeansdata)) {                     
            return R::store($redbeansdata); 
        } 
        throw new \Exception('Cannot save data, object is empty.', 50);     
    }

    private function trash($redbeansdata = null)
    {
        if (!isset($redbeansdata)) {
            $redbeansdata = $this->redbeans;
        }       
        if (isset($redbeansdata)) {         
            return R::trash($redbeansdata); 
        } 
        throw new \Exception('Cannot delete data, object is empty.', 50);
    }

    private function createWithAuditData($tablename = null) {    
        $username = isset($_SESSION["user_name"])?$_SESSION["user_name"]:"guest";
        $this->redbeans = $this->create($tablename);       
        $this->redbeans->createby = $username;
        $this->redbeans->createdt = date('Y-m-d H:i:s');
        return $this->redbeans;     
    }

    private function saveWithAuditData($redbeansdata = null) {
        $username = isset($_SESSION["user_name"])?$_SESSION["user_name"]:"guest";
        $this->redbeans->updateby = $username;
        $this->redbeans->updatedt = date('Y-m-d H:i:s');
        return $this->save($redbeansdata);      
    }

    private function getall($query = null, $parameter = null) {  
        try {
            if (!isset($query)) {
                $limit = $this->dbType =="postgresql"?"limit 1000":$this->dbType =="mysql"?"limit 0,1000":"";
                $query = "select * from ".$this->tablename." ".$limit;
            }            
            return isset($parameter)?R::getAll($query, $parameter):R::getAll($query);   
        }
        catch(Exception $exc)
        {
            throw new Exception($exc->getMessage(), 50);            
        }
    }

    private function getrow($query, $parameter=null) {           
        try {                                    
            return isset($parameter)?R::getRow($query, $parameter):R::getRow($query);
        }
        catch(Exception $exc)
        {
            throw new Exception($exc->getMessage(), 50);            
        }
    }

    private function getcell($query, $parameter=null) {    
        try {                        
            return isset($parameter)?R::getCell($query, $parameter):R::getCell($query);
        }
        catch(Exception $exc)
        {
            throw new Exception($exc->getMessage(), 50);            
        }
    }

    private function execsql($query, $parameter=null) {           
        try {                                    
            return isset($parameter)?R::exec($query, $parameter):R::exec($query);
        }
        catch(Exception $exc)
        {
            throw new Exception($exc->getMessage(), 50);            
        }
    }    

    private function getrowwithid($id) { 
        if (isset($this->tablename)) {
            return R::getRow("select * from $this->tablename where id = ?", [ $id ]);
        }           
        throw new \Exception('Cannot load data, table name is unknown.', 50);       
    }

    private function updatemodel($redbeansdata = null) {             
        // update model only store data in available column, fluid disabled 
        $fields = R::inspect(lcfirst($this->tablename));

        if (! isset($redbeansdata)) {
            $redbeansdata = $this->redbeans;
        }
        if (! isset($redbeansdata)) {
            throw new \Exception('Cannot update data, object is empty.', 50);       
        }
        foreach ($fields as $key => $value) {           
            if (isset($_POST[$key])) {                
                $redbeansdata[$key] = $_POST[$key];
            }
        }
        $this->redbeans = $redbeansdata;
        return $this->redbeans;         
    }

    private function updateorcreatemodel($redbeansdata = null, $exclude =null) {         
        // fluid support, but must be aware to what form sent
        // every input object will mapped into column in the table
        // put input object in exclude array to ignore them
        $exclude = !isset($exclude)?[]:$exclude;
        if (isset($_POST))
        {
            if (!isset($redbeansdata)) {                
                if (!isset($this->redbeans)) {
                    $this->redbeans = $this->create();   
                }
                $redbeansdata = $this->redbeans;
            }

            foreach ($_POST as $key => $value) {           
                if (isset($_POST[$key])  && !in_array ($key, $exclude)) {                    
                    $redbeansdata->$key = $_POST[$key];
                }
            } 
            
            $this->redbeans = $redbeansdata;        
        }
        
        return $this->redbeans;         
    }

    private function SaveDataMaster()
    {        
        if (isset($_POST["formmode"]) && $_POST["formmode"] == "U") {
            //echo "loading data";
            $this->load($_POST["id"]);                
        } else {
            //echo "creating data";
            $this->createWithAuditData();                    
        }
        
        if (REDBEAN_FREEZE) {
            //echo "update model";
            $this->updatemodel(); 
        } else {
            //echo "generate model";
            $this->updateOrCreateModel();
        }        
        
        //echo "save model";
        return $this->saveWithAuditData();
    }    

    private function saveraw($data, $keys=null)
    {
        $schema = \R::inspect($this->tablename);        

        if ($this->exists($data,$keys))
        {            
            $columns = "";
            $parameterkey = "";
            $parameter = [];
            foreach ($schema as $key => $value) {
                if ($columns != "")
                {
                    $columns .= ",";
                    $parameterkey .= ",";
                }
                $columns .= $key."=?";
                $parameterkey .= "?";
                $parameter[] = $data[$key];
            } 

            $keyparameter = [];
            $keycolumns = "";
            foreach ($keys as $value) {
                if ($keycolumns != "")
                {
                    $keycolumns .= " and ";
                }
                $keycolumns .= $value."=?";
                $parameter[] = $data[$value];
            }

            $sql = "update ".$this->tablename." set ".$columns." where ".$keycolumns;            
        } else {
            $columns = "";
            $parameterkey = "";
            $parameter = [];
            foreach ($schema as $key => $value) {
                if ($columns != "")
                {
                    $columns .= ",";
                    $parameterkey .= ",";
                }
                $columns .= $key;
                $parameterkey .= "?";
                $parameter[] = $data[$key];
            }        

            $sql = "insert into ".$this->tablename." (".$columns.") values (".$parameterkey.")";        
        }
        
        return $this->execsql($sql,$parameter);
    }

    private function exists($data, $keys)
    {
        $parameter = [];
        $columns = "";
        foreach ($keys as $value) {
            if ($columns != "")
            {
                $columns .= " and ";
            }
            $columns .= $value."=?";
            $parameter[] = $data[$value];
        }

        $retval = $this->getcell("select 1 from ".$this->tablename." where ".$columns,$parameter);   

        return $retval != null ?true:false;
    }

    private function findraw($parameters)
    {        
        $parameter = [];
        $columns = "";
        foreach ($parameters as $key => $value) {
            if ($columns != "")
            {
                $columns .= " and ";
            }
            $columns .= $key."=?";            
            $parameter[] = $value;
        }
        
        return $this->getrow("select * from ".$this->tablename." where ".$columns,$parameter);        
    }

    private function findallraw($parameters)
    {        
        $parameter = [];
        $columns = "";
        foreach ($parameters as $key => $value) {
            if ($columns != "")
            {
                $columns .= " and ";
            }
            $columns .= $key."=?";            
            $parameter[] = $value;
        }
        
        return $this->getall("select * from ".$this->tablename." where ".$columns,$parameter);        
    }
}
?>
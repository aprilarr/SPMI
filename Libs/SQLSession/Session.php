<?php
/*
Replace existing PHP session with load balancer friendly SQL Database Session Storage

Required :
RedBeanPHP Lib
BaseModel

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(32) NOT NULL,
  `access` int(10) unsigned DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

*/
namespace SQLSession;

class Session {
	private $dataModel;

 	public function __construct(){
		// Instantiate new Database object		
		$this->dataModel = new \System\BaseModel("sessions");

		// Set handler to overide SESSION
		session_set_save_handler(
		array($this, "_open"),
		array($this, "_close"),
		array($this, "_read"),
		array($this, "_write"),
		array($this, "_destroy"),
		array($this, "_gc")
		);

		// Start the session
		session_start();
	}

	/**
	 * Open
	 */
	public function _open(){
		return true;		
	}

	/**
	 * Close
	 */
	public function _close(){
	  return true;	  
	}	

	/**
	 * Read
	 */
	public function _read($id){		
		$sessionData = $this->dataModel->find("sessions","id = ?", [ $id ]);	
		if (isset($sessionData)) {
			return $sessionData->data;
		} else {
			return "";
		}
	}	

	/**
	 * Write
	 */
	public function _write($id, $data){
		// Create time stamp
		try
		{
			$access = time();
			$data = str_replace("'", "\"", $data);

			$sessionData = $this->dataModel->find("sessions","id = ?", [ $id ]);
			
			if (isset($sessionData))
			{
				$postgreUpdate = $this->dataModel->execsql("UPDATE sessions SET access=?, data=? WHERE id=?",[$access, $data, $id]);
			} else {
				$postgreInsert = $this->dataModel->execsql("INSERT INTO sessions VALUES (?,?,?)", [$id, $access, $data] );	
			}

			return true;
		}
		catch (\Exception $ex)
		{
			// only return false when error occured
			return false;
		}		
	}	

	/**
	 * Destroy
	 */
	public function _destroy($id){
		try {
			$sessionData = $this->dataModel->execsql("DELETE FROM sessions WHERE id = ?", [ $id ]);
		}
		catch (\Exception $ex)
		{
			// only return false when error occured
			return false;
		}		
	} 	

	/**
	 * Garbage Collection
	 */
	public function _gc($max){
		// Calculate what is to be deemed old
		$old = time() - $max;

		try {
			$sessionData = $this->dataModel->find("sessions","access < ?", [ $old ]);
			if (isset($sessionData))
			{
				$this->dataModel->trash($sessionData);
			}
		}
		catch (\Exception $ex)
		{
			// only return false when error occured
			return false;
		}		
	}	
}
?>
<?php
 

class Database{

/**
* Store the single instance of Database class
* @static Database $instance
*/
    private static $instance;

/**
* Database server address
* @access private
* @var String $server
*/
    private    $server   = ""; //database server

/**
* Database login name
* @access private
* @var String $user
*/
    private    $user     = ""; 

/**
* Database login password
* @access private
* @var String $pass
*/
    private    $pass     = ""; 

/**
* Database name to be accessed
* @access private
* @var String $database
*/
    private    $database = "";

/**
* Store error messages for Databases if any
* @access private
* @var String $error
*/
    private    $error = "";

/**
* Store database connection
* @access private
* @var PDO $link_id
*/
    private    $link_id = 0;

/**
* Represents a prepared statement
* @access private
* @var PDOStatement $query_id
*/
    private    $query_id = 0;


/**
* Constructor to initialize the database connection variables
* @access private
* @param String $server 
* @param String $user
* @param String $pass 
* @param String $database
* @return Boolean
*/
private function __construct($server=null, $user=null, $pass=null, $database=null){

	if($server==null || $user==null || $database==null)
	{
		return false;
    }

    $this->server=$server;
    $this->user=$user;
    $this->pass=$pass;
    $this->database=$database;
	return true;
}


/**
* Obtain an instance of Database object
* @static
* @param String $server 
* @param String $user
* @param String $pass 
* @param String $database
* @return Database If object does not exists create new and return else return already created object
*/
public static function obtain($server=null, $user=null, $pass=null, $database=null){
    if (!self::$instance){ 
        self::$instance = new Database($server, $user, $pass, $database);
    } 
    return self::$instance; 
}




/**
* Connect to a Database host and select database using variable initialized above
* @access public
* @return Boolean If Database connection successfull return true else return false
*/
public function connect_pdo()
{
    try
    {
        $this->link_id = new PDO("mysql:host=".$this->server.";dbname=".$this->database."", $this->user, $this->pass);
        $this->link_id->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        $this->error = $e->getMessage();
        return false;
    }    


    $this->server='';
    $this->user='';
    $this->pass='';
    $this->database='';
    return true;
}


/**
* Close a conection to Database host
* @access public
* @return 
*/
public function close(){
    $this->link_id = null;
}





/**
* Prepares and executes a sql query
* @access private
* @param String $sql 
* @param Array $params
* @return Boolean Returns TRUE on success or FALSE on failure. 
*/
private function query_pdo($sql,$params=array())
{
    try
    {    
        $this->query_id = $this->link_id->prepare($sql);
        $i=1;
        foreach($params as $key=>$val) {
        
            $type = $this->getPDOConstantType($val);
            $this->query_id->bindValue($i, $val, $type);      
            ++$i;  
        }
        return $this->query_id->execute();
    }
    catch(PDOException $e)
    {
        $this->error = $e->getMessage();
        return false;
    }    
}


/**
* Run the query, fetches the first row only, frees resultset
* @access public
* @param String $sql 
* @param Array $params
* @return Mixed The first record as an Array or FALSE in case the query fails to execute. 
*/
public function query_first_pdo($sql,$params=array()){
    $query_id = $this->query_pdo($sql,$params);
    if($query_id === false)
        return false;
    $out = $this->fetch_pdo();
    $this->free_result_pdo();
    return $out;
}




/**
* Fetches and returns results one line at a time
* @access private
* @return Mixed The first record as an Associative Array or Empty in case if the query_id (i.e. if the query did not execute) is not set. 
*/
private function fetch_pdo(){

	$record = "";
    if (isset($this->query_id)){
        $record = $this->query_id->fetch(PDO::FETCH_ASSOC);
    }
    return $record;
}





/**
* Fetches and returns all the results (not just one row)
* @access public
* @param String $sql 
* @param Array $params
* @return Mixed The complete records as an Associative Array or Empty in case if the query_id (i.e. if the query did not execute) is not set. 
*/
public function fetch_array_pdo($sql,$params = array()){
    
    $query_id = $this->query_pdo($sql,$params);
    if($query_id  === false)
        return false;
    $out = array();

    while ($row = $this->fetch_pdo()){
        
        $out[] = $row;
    }

    $this->free_result_pdo();
    return $out;
}





/**
* Does an update query with an array for data and array as a param for the where clause
* @access public
* @param String $table 
* @param Array $data is an assoc array with keys are column names and values as the actual values
* @param Array $where 
* @return Boolean Returns TRUE on success or FALSE on failure. 
*/
public function update_pdo($table, $data, $where=array()){
	
    if(empty($data))
	return false;
    $q="UPDATE `$table` SET ";

    foreach($data as $key=>$val){
        
        if(empty($val));
        else $q.= "`$key`=?, ";
    }
    $q = rtrim($q, ', ') . ' WHERE ';
    
    foreach($where as $key=>$val)
    {
        if(empty($val));
        else $q.= "`$key`=? AND ";
    }
    $q = rtrim($q, 'AND ') . ' ;';
    

    try
    {
    
	$this->query_id = $this->link_id->prepare($q);
    
	$i=1;
	foreach($data as $key=>$val)
	{
	    if(empty($val))
	    ;
	    else
	    {
		$type = $this->getPDOConstantType($val);            
		$this->query_id->bindValue($i, $val, $type);      
		++$i;
	    }
	}
    
	
	foreach($where as $key=>$val) {
	
	    $type = $this->getPDOConstantType($val);            
	    $this->query_id->bindValue($i, $val, $type);      
	    ++$i;  
	}    

	return $this->query_id->execute();
    }
    catch(PDOException $e)
    {
        $this->error = $e->getMessage();
        return false;
    }     
}






/**
* Does an insert query with an array for data.
* @access public
* @param String $table 
* @param Array $data is an assoc array with keys are column names and values as the actual values
* @return Mixed Returns ID of the inserted record or FALSE on failure. 
*/
public function insert_pdo($table, $data=array())
{
    if(empty($data))
	return false;
    $q="INSERT INTO `$table` ";
    $v=''; $n='';
    
    foreach($data as $key=>$val){
        $n.="`$key`, ";
        if(strtolower($val)=='now()')
        {
            $v.="NOW(), ";
            unset($data[$key]);
        }
        else
        $v.= "?, ";    
    }
    $q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

    try
    {
	$this->query_id = $this->link_id->prepare($q);
	
	$i=1;
	foreach($data as $key=>$val) {
	
	    $type = $this->getPDOConstantType($val);            
	    $this->query_id->bindValue($i, $val, $type);      
	    ++$i;  
	}
	$this->query_id->execute();
	return $this->link_id->lastInsertId();
    }
    catch(PDOException $e)
    {
        $this->error = $e->getMessage();
        return false;
    }    

}


/**
* Checks the data type of the value that is passed
* @access public
* @param Mixed $value
* @return Integer Returns the corresponding PDO ID of the data type. 
*/
public function getPDOConstantType($value)
{
    
   switch (true)
   {
        case is_int($value):
            $type = PDO::PARAM_INT;
            break;
        case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
        case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
        default:
            $type = PDO::PARAM_STR;
    } 
    return $type;
}


/**
* Frees the resultset.
* @access private
* @return 
*/
private function free_result_pdo(){
    $this->query_id->closeCursor();
}


/**
* Return the last error message that is set.
* @access public
* @return String Return the value stored in 'error' property of the class
*/
public function getError()
{
    return $this->error;
}


}
?>
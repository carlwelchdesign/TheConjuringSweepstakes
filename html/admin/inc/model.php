<?php

        /*
         * @description: database functionalities
         */
class Model{
	
    private $host   =   '';
    private $user   =   '';
    private $pass   =   '';
    private $db     =   '';
	private $dblink ;

    function __construct(){
		include_once('../../html-config/config.php');
        $this->host     =   DB_HOST;
        $this->user     =   DB_USERNAME;
        $this->pass     =   DB_PASSWORD;
        $this->db       =   DB_NAME;
		$this->dblink	=	'';
    }

    function connectDb(){
        $this->dblink = mysql_connect($this->host , $this->user , $this->pass, false, MYSQL_CLIENT_SSL );
        if (! $this->dblink){
            die (mysql_error());
			
        }
        mysql_select_db($this->db);

    }

    function closeDb(){
        mysql_close($this->dblink);
    }

    function query($sql){
        $this->connectDb();
        $data      =  array();
        $result    =  mysql_query($sql);

        if (!empty($result))
        $rows      =  mysql_num_rows($result);
        else
        $rows      =  '';

        if (!empty($rows)){
            while ($rows = mysql_fetch_assoc($result)){
                $data[]   = $rows;
            }
        }
        $this->closeDb();

        return $data;
    }

    function insert($sql){
        $this->connectDb();
        $result    =  mysql_query($sql);
        $this->closeDb();
        return $result;
    }

    function insertAndGetId($sql){
        $this->connectDb();
        $result    =  mysql_query($sql);
        $id        =  mysql_insert_id();
        $this->closeDb();
        return $id;
    }

    function update($sql){
        $this->connectDb();
        $result= mysql_query($sql);
        $this->closeDb();
		return $result;
    }
	
    function delete($sql){
        $this->connectDb();
        mysql_query($sql);
        return mysql_affected_rows();
        $this->closeDb();
    }
}
?>

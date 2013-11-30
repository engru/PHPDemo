<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author 80054349
 */
class db {
    
    var $db;
    //put your code here
    function init($db_config){
        //echo $db_config . ' db_init <br>';
      //  if(is_array($db_config) && $db_config['adapter'])
      //      $adapterName='adapter_'.$db_config['adapter'];
      //  else{
      //      exit(lang('db_config_error'));
      //  }
      //  $this->adapter = strtolower($db_config['adapter']);
        
      //  if(isset($db_config['pre']))
      //        $this->pre=$db_config['pre'];
        
        require_once('db_adapter/mysqli.php');
        
        $CONFIG = array(
            'adapter'  => 'mysqli',
            'host'     => 'localhost',
            'port'     => '3306',
            'dbuser'   => 'root',
            'dbpass'   => 'root',
            'dbname'   => 'agg',
            'pconnect' => false,
            'charset'  => 'utf8',
            'pre'      => 'pre_'
        );
        
        $this->db= new adapter_mysqli($CONFIG);

    }
    
    function query($sql){
        if($sql==null){
            $sql = "select * from pre_users;";
        }
        
        if($this->db!=null){
            $result =  $this->db->query($sql);
            return $result;//mysqli_fetch_array($result);
        }
    }
    
    function get_activity_list($sql=''){
        if($sql==null){
            $sql = "select title,content from pre_activity;";
        }
        
        if($this->db!=null){
            $result =  $this->db->query($sql);
            return $result;//mysqli_fetch_array($result);
        }
    }
	
	function insert($sql){
	    if($this->db!=null){
            $result =  $this->db->query($sql);
            if($result){
				return $this->db->insertId();
			}else{
				return $result;
			}
        }

	}

	
	
}

?>

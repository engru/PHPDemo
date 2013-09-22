<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author 80054349
 */
class user_model {
    //put your code here
    function queryuser(){
        
    }
    
    function check_login($username,$password){
            $db = new db();
            $sql = "SELECT * FROM pre_users WHERE user_name = '$username' AND password='$password';";
            $db->init($sql);
            $res = $db->query($sql);
            $rs = mysqli_num_rows($res);
            if($rs){
                return $rs;
            }else{
                return FALSE;
            }
    }
    
    
}

?>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author 80054349
 */
class login {
    //put your code here
    public function index_action($params='') {
        //$model = load_model('activity_model');
        //$result = $model->getlist();
         if($this->isloggedIn()){
             header("Location: ./?activity/alist/");
         }else{
             $this->login_action();
         }
    }
    
    public function login_action(){
        $model = load_model('user_model');
        //获取用户，确定是否自动登录
        $templ = new Template();
        if(!$_POST){
            //是否记住账号密码
            if($model->check_login($_COOKIE["username"],$_COOKIE["password"])){
                header("Location: ./?activity/alist/");
            }else{
                $templ->render('user/login');
                //echo $_COOKIE["username"];
                //echo $_COOKIE["password"];
            }
        }else{
            //表单提交
            //查询数据库
            
            if($model->check_login($_POST["username"],$_POST["password"])){
                $_SESSION['authorized'] = true;
                if(!empty($_POST["auto_login"])){
                    setcookie("username",$_POST["username"]);
                    setcookie("password",$_POST["password"]);
                }
                //$_SESSION[]
                header("Location: ./?activity/alist/");
            }else{
                $templ->render('user/login');
            }
            
        }
    }
    
    function isloggedIn(){
        //Session logged is set if the user is logged in
        //set it on 1 if the user has successfully logged in
        //if it wasn't set create a login form
        session_start();
        if($_SESSION['authorized']){
            return TRUE;
        }else{
            //echo 'Welcome, '.$_SESSION['username'];
            return FALSE;
            //跳转
        }
    }
    
    function checklogin(){
        if($this->isloggedIn()){
            
        }else{
           // if()
        }
    }
    
}

?>

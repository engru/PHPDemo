<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of proj
 *
 * @author 80054349
 */
class Info{
    
    var $name = "info";
    var $type = "docment";
    
}

class proj {
    //put your code here
    var $proj;
    var $base;// = "TEST";
    var $intro;
    var $attach;// = "001";
    var $info;
    var $team;
    var $group;
    var $acti;
    var $current_app;
    
    public function __construct() {
        $this->info = new Info();
    }
    
    function setinfo($param = "pdf"){
        $this->info->type = $param;
    }
    
    function set_proj($proj){
        $this->proj = $proj;
    }
    
    function set_base($base){
        $this->base = $base;
    }
    
    function set_intro($intro){
        $this->intro = $intro;
    }
    
    function set_attach($attach){
        $this->attach = $attach;
    }
    
    function set_info($info){
        $this->info = $info;
    }


    function set_team($team){
        $this->team = $team;
    }
    
    function set_group($group){
        $this->group = $group;
    }
            
    function set_acti($acti){
        $this->acti = $acti;
    }
            
    
    function getinfo(){
        return $this->info;
    }
    
    function set_current_app($app){
        $this->current_app = $app;
    }

    
}


$proj = new proj();
echo $proj->base.'<br>';
echo $proj->attach.'<br>';
echo $proj->info->name.'<br>';
echo $proj->info->type.'<br>';
/*
$PROJ;
$PROJ_BASE;
$PROJ_INTRO;
$PROJ_ATTACH;
$PROJ_INFO;
$PROJ_GROUP;
$PROJ_TEAM;
$PROJ_SCH;
$PROJ_ACTI;
*/

?>

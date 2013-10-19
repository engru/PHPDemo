<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author 80054349
 */

require 'proj.php';
$proj = new proj();
$proj->setinfo('cap');
echo '<br>';
echo $proj->base.'<br>';
echo $proj->attach.'<br>';
echo $proj->getinfo()->name.'<br>';
echo $proj->getinfo()->type.'<br>';

echo '<br>';


$arc  = array(
    'id'=>'001',
    'name'=>'nick', 
);
$arc = 'bak1';
echo var_dump($arc);



?>

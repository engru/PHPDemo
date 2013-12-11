<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    require '../class/HtmlParserModel.php';
    require '../class/simplehtmldom_1_5/simple_html_dom.php';
    $str='<div class="content"><a href="\\t">hliluk</a><img alt="bts" src="http://link.com/#"><strong>hello</strong></div>';
    $html = str_get_html($str);
    echo '<div class="container">';
    echo '<div class="cont">'.$html->find('.content',0).'</div>';
    echo '</div>';

?>

<?php /* Smarty version Smarty-3.1.14, created on 2013-08-27 12:58:32
         compiled from "E:\Web\Demo\Test\theme\templates\extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11443521c31f8b896c7-57742610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c11c5494bf37fd2019e783796afab493ba71394' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\extra.tpl',
      1 => 1377579501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11443521c31f8b896c7-57742610',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521c31f8bbc358_64222290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c31f8bbc358_64222290')) {function content_521c31f8bbc358_64222290($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A preview of the jQuery UI Bootstrap theme">
    <meta name="author" content="Addy Osmani">

    <!-- Le styles -->
    <link href="res/assets/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="res/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
    <link type="text/css" href="res/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/custom-theme/jquery.ui.1.10.0.ie.css"/>
    <![endif]-->
    <link href="res/assets/css/docs.css" rel="stylesheet">
    <link href="res/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <!--begin wijmo menu-->
    <link href="third-party/wijmo/jquery.wijmo-open.1.5.0.css" rel="stylesheet" type="text/css" />
    <!--End wijmo menu-->
    <!--begin file input-->
    <link href="third-party/jQuery-UI-FileInput/css/enhanced.css" rel="Stylesheet">
    <!--End file input-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="res/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="res/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="res/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="res/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="res/assets/ico/favicon.png">

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

<!-- Navbar
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://github.com/addyosmani/jquery-ui-bootstrap">jQuery UI Bootstrap</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li>
                        <a href="./index.html">Home</a>
                    </li>
                    <li class="active">
                        <a href="./extra.html">Extra</a>
                    </li>
                    <li>
                        <a href="http://github.com/addyosmani/jquery-ui-bootstrap/issues">Feedback/Issues</a>
                    </li>
                    <li>
                        <a href="http://twitter.com/addyosmani">Contact</a>
                    </li>
                </ul>
                <div id="twitter-share" class="pull-right">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://addyosmani.github.com/jquery-ui-bootstrap/" data-text="A new jQuery UI Bootstrap theme" data-via="addyosmani" data-size="large">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>jQuery UI Bootstrap</h1>
        <p class="lead">A Bootstrap-themed kickstart for jQuery UI widgets (v0.5).</p>
    </div>
</header>


<div class="container">
    <!-- Docs nav ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#wijmo"><i class="icon-chevron-right"></i> Wijmo</a></li>
                <li><a href="#file-input"><i class="icon-chevron-right"></i> File input</a></li>
                <li><a href="#date-range"><i class="icon-chevron-right"></i> Date Range</a></li>
            </ul>
        </div>
        <div class="span9">
            <!-- Wijmo ================================================== -->
            <section id="wijmo">
                <div class="page-header">
                    <h1>Wijmo</h1>
                </div>
                <p>
                    This is an example of how to retheme one of the Wijmo jQuery UI components to match the Twitter Bootstrap theme. Whilst a menu component will be arriving to jQueryUI soon, you can find the menu in <a href="http://wijmo.com/widgets/wijmo-open/">Wijmo Open</a>.
                </p>
                <div id="wijmo-container" class="container-fluid">
                    <ul id="menu1">
                        <li>
                            <h3>
                                <a href="">Project Name</a></h3>
                        </li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Dropdown</a>
                            <ul>
                                <li><a href="#">Secondary link</a> </li>
                                <li><a href="#">Something else here</a> </li>
                                <li></li>
                                <li><a href="#">Another link</a> </li>
                            </ul>
                        </li>
                        <li>
                            <input type="text" placeholder="Search">
                        </li>
                    </ul>
                    <!-- End demo markup -->
                </div>
                <div class="clearfix"></div>
<pre class="prettyprint linenums">
$("#menu1").wijmenu({
    trigger: ".wijmo-wijmenu-item",
    triggerEvent: "click"
});
</pre>
            </section>
            <!-- File input -->
            <section id="file-input">
                <div class="page-header">
                    <h1>File Input</h1>
                </div>
                <div class="container-fluid">
                    <form>
                        <input type="file" class="span3" name="file" id="file">
                    </form>
                </div>
<pre class="prettyprint linenums">
$('#file').customFileInput({
    button_position : 'right'
});
</pre>
            </section>
            <!-- end file input -->
            <!-- File input -->
            <section id="date-range">
                <div class="page-header">
                    <h1>Select a Date Range with datepicker</h1>
                </div>
                <p>
                    <input type="text" value="01/01/2013" id="rangeBa" />
                    <input type="text" value="02/06/2013" id="rangeBb" />
                </p>
<pre class="prettyprint linenums">
// Select a Date Range with datepicker
$( "#rangeBa" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 3,
    onClose: function( selectedDate ) {
        $( "#rangeBb" ).datepicker( "option", "minDate", selectedDate );
    }
});
$( "#rangeBb" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 3,
    onClose: function( selectedDate ) {
        $( "#rangeBa" ).datepicker( "option", "maxDate", selectedDate );
    }
});
</pre>
            </section>
            <!-- end file input -->
        </div>
    </div>
</div>

<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <p>
            jQuery UI Bootstrap &copy; Addy Osmani 2012 - 2013.
        </p>
        <p>
            Twitter Bootstrap &copy; Twitter 2012 - 2013
        </p>
        <ul class="footer-links">
            <li><a href="http://addyosmani.com/blog/">Blog</a></li>
            <li class="muted">&middot;</li>
            <li><a href="https://github.com/addyosmani/jquery-ui-bootstrap/issues?state=open">Issues</a></li>
        </ul>
    </div>
</footer>
<!-- Placed at the end of the document so the pages load faster -->
<script src="res/assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
<script src="res/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="res/assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
<script src="res/assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
<script src="res/assets/js/docs.js" type="text/javascript"></script>
<!-- FileInput -->
<script src="third-party/jQuery-UI-FileInput/js/enhance.min.js" type="text/javascript"></script>
<script src="third-party/jQuery-UI-FileInput/js/fileinput.jquery.js" type="text/javascript"></script>
<!-- End FileInput -->
<!--wijmo-->
<script src="third-party/wijmo/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="third-party/wijmo/jquery.wijmo-open.1.5.0.min.js" type="text/javascript"></script>
<!--End wijmo-->
<script src="res/assets/js/demo.js" type="text/javascript"></script>
</body>
</html>

<?php }} ?>
<?phpclass main{	function index_action($params = ''){		echo '<p><b>you are success</b></p>';                $templ = new Template();                $templ->render('layout',$params);                                //此处执行的时候，可以调用数据模式，执行相应操作后，渲染对应模板即可。	}		function extra_action($params=''){		        $templ = new Template();                $templ->render('extra',$params);	}}
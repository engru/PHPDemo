
        <div class="info-content">
            <div class="title">
                <h1>{$result->acti[0].title}</h1>
            </div>
            <div class="con-wrap">
                <div class="tags"></div>
                <p>{$result->acti[0].content}</p>
                <!--<iframe id="editor" style="width: 100%;">
                    
                </iframe>
                <script>
                    var ifr = document.getElementById('editor');
                    ifr.contentWindow.document.designMode = 'On';
                    
                </script>
                -->
                	<textarea name="后台取值的key" id="myEditor">这里写你的初始化内容</textarea>
                    <script type="text/javascript">
                            //var editor = new UE.ui.Editor();
                            //editor.render("myEditor");
                            //1.2.4以后可以使用一下代码实例化编辑器
                            UE.getEditor('myEditor')
                    </script>
            </div>
            <div>
                <!-- UY BEGIN -->
                <div id="uyan_frame"></div>
                <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1824155"></script>
                <!-- UY END -->
            </div>
        </div> 

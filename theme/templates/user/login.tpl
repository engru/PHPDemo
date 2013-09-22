{extends '../layout.tpl'}
{block name="content"}
    <style>
        .wrap-box{
            border:2px solid #7aba7b;
            width: 600px;
            height: 333px;
            margin: 20px;
            text-align: left;
        }
        .wrap-login {
            width: 340px;
            z-index: 100;
            margin-top: 7px;
            margin-left: 30px;
            padding: 8px 0;
            float:left;
       }
        
        .bd {
            float:left;
            height: 197px;
            margin: 43px 0 0 10px;
            border-left: 1px solid #e7e7e7;
        }
        
        .side{
            float:left;
            width: 120px;
            margin-top: 10px;
            padding: 8px 0 8px 40px;
            font-size: 12px;
        }
        
        .side h2{
            font-size: 15px;
        }
        #clear{
            clear: both;
        }
        .login{
            margin-left: 50px;
            
            height: 1000px;
        }
        .logintip {
            padding-left: 35px;
            color: #999;
            font-size: 12px;
        }
        .u_text{
            border: 1px solid #cecece;
            background: #f1f1f1;
            margin-top: 15px;
            width: 293px;
        }
        #es-txt {
            /*height: 50px;*/
            width: 291px;
            margin: 0px;
            padding: 10px 0px 13px 0px;
            line-height: 20px;
            border: 2px solid #fff;
            border-width: 0px 0 0 2px;
            /*background: #fafafa;*/
            font-size: 16px;
        }
        .u-tt3 {
            margin-top:20px;
            font-weight: bold;
            padding-left: 22px;
            height: 30px;
            line-height: 30px;
            border-left: 8px solid #545454;
        }
        
        #u-submit {
            margin-top: 20px;
            width: 293px;
            height: 50px;
            border: none;
            overflow: hidden;
            display: block;
            cursor: pointer;
            background: #238896;
            background-position: 2px 0;
            border-radius: 4px;
            font-weight: bold;
            color: white;
        }
    .blue.button {
        -webkit-animation-name: bluePulse;
        -webkit-animation-duration: 4s;
    }
    
    input:-webkit-autofill{
        background-color:#fff;
    }

    .u_check{
        width:293px;
        margin-left:1px;
        margin-bottom: 0;
        padding: 10px 0 10px 0px;
    }
    
    #es-check{
        vertical-align: middle;
        float:left;
    }
    #atlg {
        margin-left:5px;
        margin-right: 12px;
        font-size: 12px;
        color: #666;
        cursor: pointer;
        float:left;
    }
    
    .es-forget{
        color: #16914E;
        font-size: 12px;
        float: right;
        text-decoration: none;
    }
    
    .reg em{
        color: #21a557;
        font-size: 12px;
        text-decoration: none;
    }
    
    </style>
    
    
    <div class="wrap-box" id="center">
        <div class="login-box">
            <div class="u-tt3">登录系统</div>
            <div class="wrap-login">
                <div class="logintip">使用邮箱或用户名登录</div>
                <form id="login" method="post" action="?user/login/">
                    <div>
                        <input type="hidden" name="product" value="study">
                        <input type="hidden" name="product" value="study">
                        <input type="hidden" name="product" value="study">
                    </div>
                    <div class="u_text">
                        <input type="text" id="es-txt" title="用户名/邮箱" name="username">
                    </div>
                    <div class="u_text">
                        <input type="password" id="es-txt" title="请输入密码" name="password">
                    </div>
                    <div class="u_check">
                        <input type="checkbox" id="es-check" name="auto_login">
                        <label id="atlg">下次自动登录</label>
                        <a href="#" class="es-forget">忘记密码？</a>
                    </div>
                    <div>
                        <input type="submit" id="u-submit" value="登录">
                    </div>
                </form>
            </div>

            <div class="bd">
                <!--分割-->
            </div>

            <div class="side">
                <div>使用其他账号登录</div>
                <h2>注意</h2>
                <p>使用其他账户登录时要主要的相关事项</p>
                <div class="reg">
                    <a class="j-regUrl" href="?user/register/">没有帐号？
                        <em>立即注册&gt;&gt;</em>
                    </a>
                </div>
            </div>
            <div id="clear"></div>
        </div>
    </div>

{/block}
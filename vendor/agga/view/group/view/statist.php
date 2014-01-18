<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 $test ='
  验证码：https://kyfw.12306.cn/otn/passcodeNew/getPassCodeNew.do?module=login&rand=sjrand
  验证码验证：https://kyfw.12306.cn/otn/passcodeNew/checkRandCodeAnsyn      POST Form:randCode:apbs rand:sjrand
  登录：https://kyfw.12306.cn/otn/login/loginAysnSuggest 
   POST 
loginUserDTO.user_name:wkeycn
userDTO.password:ffffff
randCode:fzzd

      
      订票界面：https://kyfw.12306.cn/otn/login/userLogin ---跳转 ---https://kyfw.12306.cn/otn/index/init
      
查票：https://kyfw.12306.cn/otn/leftTicket/query?leftTicketDTO.train_date=2014-01-25&leftTicketDTO.from_station=SZQ&leftTicketDTO.to_station=NCG&purpose_codes=ADULT
leftTicketDTO.train_date:2014-01-25
leftTicketDTO.from_station:SZQ
leftTicketDTO.to_station:NCG
purpose_codes:ADULT

https://kyfw.12306.cn/otn/login/checkUser
_json_att:

https://kyfw.12306.cn/otn/leftTicket/submitOrderRequest
POST:
secretStr:MjAxNC0wMS0yNSMwMCNLOTIjMTE6NTIjMTg6MTAjNjUwMDAwMEs5MjAxI0JKUSNOQ0cjMDY6MDIj5rex5Zyz5LicI+WNl+aYjCMwMSMwOCMxMDE0OTAzMDAxNDA0MDUwMDAwMDEwMTQ5MDAwMDAzMDI2MjAwMDAwI1E3IzEzODkwNzg0OTA5NjQjODE3MzNBMjNDOEJEMEI3NDE2ODBGQTE2Q0IyNkQ3Rjg0QTAwRDM5MzY4QkQ1Qzc5MjkwRkQ0RDU=
train_date:2014-01-25
back_train_date:2014-01-07
tour_flag:dc
purpose_codes:ADULT
query_from_station_name:深圳
query_to_station_name:南昌
undefined:



订票界面：https://kyfw.12306.cn/otn/confirmPassenger/initDc
POST
_json_att:

订票提交订单验证码：https://kyfw.12306.cn/otn/passcodeNew/getPassCodeNew.do?module=passenger&rand=randp&0.4395620902068913
验证验证码：https://kyfw.12306.cn/otn/passcodeNew/checkRandCodeAnsyn
POST:
randCode:3d2y
rand:randp
_json_att:
REPEAT_SUBMIT_TOKEN:995667954454aeee379f90cb06843b84


确认票务信息：https://kyfw.12306.cn/otn/confirmPassenger/checkOrderInfo
POST:
cancel_flag:2
bed_level_order_num:000000000000000000000000000000
passengerTicketStr:1,0,1,张加敏,1,360281199004081912,15989641686,N
oldPassengerStr:张加敏,1,360281199004081912,1_
tour_flag:dc
randCode:3d2y
_json_att:
REPEAT_SUBMIT_TOKEN:995667954454aeee379f90cb06843b84

data: {errMsg:对不起，由于您取消次数过多，今日将不能继续受理您的订票请求！, submitStatus:false}
httpstatus: 200
messages: []
status: true
validateMessages: {}
validateMessagesShowId: "_validatorMessage"



获取队列情况：https://kyfw.12306.cn/otn/confirmPassenger/getQueueCount
POST:
train_date:Sat Jan 25 2014 00:00:00 GMT+0800 (中国标准时间)
train_no:690000L51403
stationTrainCode:L514
seatType:1
fromStationTelecode:OSQ
toStationTelecode:NCG
leftTicket:10072034241007200000
purpose_codes:00
_json_att:
REPEAT_SUBMIT_TOKEN:995667954454aeee379f90cb06843b84


提交确定订单：
https://kyfw.12306.cn/otn/confirmPassenger/confirmSingleForQueue
POST:
passengerTicketStr:1,0,1,张俊程,1,620201197205061603,18972561157,N
oldPassengerStr:张俊程,1,620201197205061603,1_
randCode:afmz
purpose_codes:00
key_check_isChange:8D5FB60C30444F84D6E18F3F995312ED97ED4B0A54ACB980FBCF5CDE
leftTicketStr:1014903001404050000010149000003026200000
train_location:Q6
_json_att:
REPEAT_SUBMIT_TOKEN:3027ffc58ec27d623473c61b04869123


https://kyfw.12306.cn/otn//payOrder/init?random=1389077599959

';
?>


//抢票了，抢票了<br>

1、 登录，维持登录状态<br>
2、 选定车次<br>
3、 刷票，提交<br>


<?php

function vpost($url,$data){ // 模拟提交数据函数
    $cookie_file = dirname(__FILE__).'/cookie.txt';
    $data = http_build_query($data);
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file);
//  curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file);
    $tmpInfo = curl_exec($curl); // 执行操作
    if (curl_errno($curl)) {
       echo 'Errno'.curl_error($curl);//捕抓异常
    }
    curl_close($curl); // 关闭CURL会话
    return $tmpInfo; // 返回数据
}

$url = "https://dynamic.12306.cn/otsweb/loginAction.do?method=loginAysnSuggest";
$curl = curl_init(); // 启动一个CURL会话
curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
$coderesult = curl_exec($curl); // 执行操作
curl_close($curl); // 关闭CURL会话
$data =array();
$_code = json_decode($coderesult);

if(isset($_GET["img"])){
    $url = "https://dynamic.12306.cn/otsweb/passCodeAction.do?rand=sjrand";
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
    echo curl_exec($curl); // 执行操作
    curl_close($curl); // 关闭CURL会话
}

//登录
if($_REQUEST["act"] == 'login'){
    $url = "https://dynamic.12306.cn/otsweb/loginAction.do?method=login";
    $data = $_POST;
    $coderesult = vpost($url,$data);
    echo $coderesult;

    //进入列表页面
//  $url = "https://dynamic.12306.cn/otsweb/order/querySingleAction.do?method=queryLeftTicket&orderRequest.train_date=2013-01-21&orderRequest.from_station_telecode=BXP&orderRequest.to_station_telecode=SJP&orderRequest.train_no=&trainPassType=QB&trainClass=QB%23D%23Z%23T%23K%23QT%23&includeStudent=00&seatTypeAndNum=&orderRequest.start_time_str=00%3A00--24%3A00";
//  $data = array();
//  $coderesult = vpost($url,$data);
//  echo $coderesult;
}

?>

<form method="post" action="?act=login">
随机码：<input type="text" name="loginRand" id="loginRand" value="<?php echo $_code->loginRand;?>">
登录名：<input type="text" name="loginUser.user_name" id="loginUser.user_name" value="">
登录密码：<input type="text" name="user.password" id="user.password" value="">
<input type="hidden" name="nameErrorFocus" id="nameErrorFocus">
<input type="hidden" name="passwordErrorFocus" id="passwordErrorFocus">
<input type="hidden" name="randErrorFocus" id="randErrorFocus">
<input type="hidden" name="refundFlag" id="refundFlag" value="Y">
<input type="hidden" name="refundLogin" id="refundLogin" value="N">
<input type="test" name="randCode" id="randCode" value="">

<img src="?img=true" /><!--由服务器端取图片内容并输出-->
<input type="submit" value="提交">
</form>

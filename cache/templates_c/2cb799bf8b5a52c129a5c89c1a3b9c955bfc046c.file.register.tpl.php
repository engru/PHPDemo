<?php /* Smarty version Smarty-3.1.14, created on 2013-08-28 18:39:38
         compiled from "E:\Web\Demo\Test\theme\templates\user\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10785521c9b21012da2-87416547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb799bf8b5a52c129a5c89c1a3b9c955bfc046c' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\user\\register.tpl',
      1 => 1377607893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10785521c9b21012da2-87416547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521c9b21128369_64592681',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c9b21128369_64592681')) {function content_521c9b21128369_64592681($_smarty_tpl) {?>    <script src="res/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script src="res/bootstrap/js/bootstrap.js"type="text/javascript"></script>
	<link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="res/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="res/"
	
<div id="main" class="clearfix">
            <div class="constraint">
			
               <section id="focus" class="clearfix">
   
   <form accept-charset="UTF-8" action="/user/registrations/enter_account_information" class="clearfix reg-form" id="registration-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="9a5Rimi8jxYBl/d2Q53aebyrCWnMJo4H27C+G4U99ss="></div>
      <div class="step clearfix">
         <p class="right">Step 1 of 2</p>
         <p class="step-title left">Create Your Account</p>
      </div>
      <p>You <strong>must</strong> be an MD or DO practicing in the United States to join Sermo.</p>
      <table style="table-layout:fixed">
         <tbody><tr>
            <td class="label-container"><label for="account_credential">Credential</label></td>
            <td>
               <select class="shorter required" id="account_credential" name="account[credential]"><option value="">--</option>
<option value="MD">MD</option>
<option value="DO">DO</option></select>
            </td>
         </tr>
         
         <tr>
            <td class="label-container"><label for="account_specialty_id">Specialty</label> </td>
            <td><select class="required" id="account_specialty_id" name="account[specialty_id]"><option value="">Please Select One</option>
<option value="2">Allergy and Immunology</option>
<option value="3">Anesthesiology</option>
<option value="1">Cardiology</option>
<option value="36">Cardiology - Electrophysiology</option>
<option value="37">Cardiology - Interventional</option>
<option value="27">Critical Care</option></select></td>
         </tr>
         
         <tr>
            <td class="label-container"><label for="account_first_name">First Name</label> </td>
            <td>
               <input class="required" id="account_first_name" maxlength="50" name="account[first_name]" size="50" type="text">
            </td>
         </tr>
         
         <tr>
            <td class="label-container"><label for="account_last_name">Last Name</label> </td>
            <td><input class="required" id="account_last_name" maxlength="50" name="account[last_name]" size="50" type="text"></td>
         </tr>
         
         <tr>
            <td class="label-container"><label for="account_email">Email</label></td>
            <td><input class="required" id="account_email" maxlength="255" name="account[email]" size="255" type="email"></td>
         </tr>
         
         <tr>
            <td class="label-container"><label for="account_password">Password</label></td>
            <td> <input class="required" id="account_password" maxlength="20" minlength="6" name="account[password]" size="20" type="password"></td>
         </tr>
         
         <tr>
            <td class="label-container"><label for="account_password_confirmation">Confirm Password</label>   </td>
            <td><input class="required" equalto="#account_password" id="account_password_confirmation" maxlength="20" name="account[password_confirmation]" size="20" type="password"></td>
         </tr>
      </tbody></table>
      <p>By clicking Create Account, you accept Sermo's <a href="http://www.sermo.com/about/terms" class="white" target="blank">Terms of Service</a> and attest you are a licensed U.S. physician.</p>
      <input class="button large" id="btn_create_account" name="commit" type="submit" value="Create Account">

</form>   
					<div id="registration-snippet">
					   <h2>Join the largest online community, exclusive to physicians</h2>
					   <hr>
					   <h3 class="discuss-connect">Discuss &amp; Connect</h3>
					   <p>Discuss clinical cases, policy,<br>&amp; practice management</p>
					   <h3 class="stay-informed">Stay Informed</h3>
					   <p>Curbside with colleagues</p>
					   <h3 class="collaborate-consult">Collaborate &amp; Consult</h3>
					   <p>Access the resources you<br>need to stay-in-the-know</p>
					   <h3 class="earn-honoraria">Earn Honoraria</h3>
					   <p>Get paid for your perspective<br>and expertise</p>
					</div>
				</section>

<section id="focus-buffer" class="">

</section>




            </div>
         </div><?php }} ?>
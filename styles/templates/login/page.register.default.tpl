{block name="title" prepend}{$LNG.siteTitleRegister}{/block}
{block name="content"}

<script type="text/javascript" defer="defer" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="./styles/css/fb-traffic-pop.css">
<script async type="text/javascript" src="./scripts/game/fb-traffic-pop.min.js?v=2676"></script>
{*<script async type="text/javascript">

	jQuery(document).ready(function(){		
					
		jQuery().facebookTrafficPop({
			timeout: 15,
			delay: 0,
			title: "<strong><center>Dark-Space: Empire - Private Server</center></strong>",
			message: '<strong><center>Like us on Facebook end help us grow !!</center></strong> </strong><a href="https://www.facebook.com/pages/Dark-Space-Empire/1490309864518434"><img src="http://dark-space.org/media/images/logoz.png" border="0" style="margin:10px 0px;width:100%;" /></a></center>',
			url: "https://www.facebook.com/pages/Dark-Space-Empire/1490309864518434",
			
		});
		
	});

</script>*}


{literal}
<script type="text/javascript">
    $(function() {
        function proverka_email(input) {
                input.value=input.value.replace(/[^a-zA-Z0-9@\-\_.]+$/g,'');
            };
        function proverka_login(input) {
                input.value=input.value.replace(/[^a-zA-Z0-9@\-\_]+$/g,'');
            };
        function proverka_pass(input) {
            input.value=input.value.replace(/[^a-zA-Z0-9@\-\_.]+$/g,'');
        };
    });
</script>
{/literal}

<h1 class="top_title">Create an account</h1>
<div class="confid"> We guarantee the confidentiality of the data you entered.</div>

<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
    <input type="hidden" value="send" name="mode">
    <input type="hidden" value="{$externalAuth.account}" name="externalAuth[account]">
    <input type="hidden" value="{$externalAuth.method}" name="externalAuth[method]">
    <input type="hidden" value="{$referralData.id}" name="referralID">

    <div class="blocks">
        <span class="lable">Email</span>
        <input type="email" class="input" name="email" id="email" oncut="return false" oncopy="return false" onpaste="return false">
        {if !empty($error.email)}
            <span class="error errorEmail"></span>
        {/if}
        <div id="regemailcption" class="reg_caption"> Must be valid. <br>Required when entering. </div>
    </div>

    <div class="blocks">
        <span class="lable">Login to game</span>
        <input type="text" class="input" name="username" id="username" maxlenght="32">
        {if !empty($error.username)}
            <span class="error errorUsername"></span>
        {/if}
        <div id="regnamecption" class="reg_caption"> Under this name, you will know the other players. Use letters and numbers. </div>
    </div>

    <div class="blocks">
        <span class="lable">Password for the game</span>
        <input type="password" class="input" name="password" id="password">
        {if !empty($error.password)}
            <span class="error errorPassword"></span>
        {/if}
        <div id="regpasswcption" class="reg_caption"> At least 6 characters. <br>Use letters and numbers. </div>
    </div>

    <div class="blocks">
        <span class="lable">Universe</span>
        <select name="uni" id="universe" class="sel_uni">{html_options options=$universeSelect selected=$UNI}</select>
        {if !empty($error.uni)}
            <span class="error errorUni"></span>
        {/if}
        <div class="reg_caption" style="line-height:40px;"></div>
    </div>

    <div class="blocks">
        <span class="lable">Language</span>
        <select name="lang" id="language" class="sel_uni">
            {html_options options=$languages selected=$lang}
        </select>
        {if !empty($error.language)}
            <span class="error errorLanguage"></span>
        {/if}
    </div>

    <br>
    <span style="cursor:pointer; text-decoration:underline; color: #24325b; font-size:14px; font-weight:bold; margin-left: 20px;" onclick="$('#title_uni').slideToggle();">
        Description universes
    </span>

    <!-- Description des univers -->
		
	<div id="title_uni" class="blocks" style="display:none;">
    	<table style="width:100%;">
        	<tbody>
                <tr>
                	<td style="width:50%;"> 
                        <h4 style="font-size:16px;">Test - open 01.03.15</h4>
                        <p style="font-size:14px; margin-bottom:10px;">
                            <b>Speed ​​of resource extraction:</b> high (x(BDD))
    						<br><b>Speed of construction:</b> very high (x(BDD))
    						<br><b>The speed of research:</b> very high (x(BDD))
                            <br><b>speed expedition:</b> high (x(BDD))
                            <br><b>Flight speed of the fleet:</b> average  (x(BDD))
                            <br><b>The difference in points for the protection of the noobs:</b> (x(BDD))
                            <br><b>Navy falls in fragments:</b> ((BDD)%)
                            <br><b>Defense falls in fragments:</b> ((BDD)%)
                        </p>
            		</td>
    				{* <td style="width:50%;"> 
                        <h4 style="font-size:16px;">Horizon - open 27.08.14</h4>
                        <p style="font-size:14px; margin-bottom:10px;">
                            <b>Speed ​​of resource extraction:</b> high (x1.000.000.000.000)
                            <br><b>speed expedition:</b> average (х5)
                            <br><b>Flight speed of the fleet:</b> high (x24)
                            <br><b>The difference in points for the protection of the noobs:</b> х5
                            <br><b>Navy falls in fragments:</b> 70%
                            <br><b>Defense falls in fragments:</b> 50%
                        </p>
            		</td> *}
                </tr>  
    	   </tbody>
        </table>
    </div>

    <div class="clear"></div>

    <span class="lable"></span>
    <input class="button" id="form1" type="submit" value="PLAY" name="data[submit]">
    <div id="form2" style="display:none;" class="reg_caption"> Clicking on Play, you agree to <a href="index.php?page=rules" target="_blank">the rules</a> . </div>

    <div class="clear"></div>
</form>

{/block}

{block name="script" append}
<link rel="stylesheet" type="text/css" href="styles/resource/css/login/register.css?v={$REV}">
    {if $recaptchaEnable}
        <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
        <script type="text/javascript">
            var RecaptchaOptions = {
            	lang : '{$lang}',
            };

            var recaptchaPublicKey = "{$recaptchaPublicKey}";

            Recaptcha.create(recaptchaPublicKey, 'display_captcha', {
            	theme: 'custom',
            	tabindex: '6',
            	custom_theme_widget: 'display_captcha'
            });
        </script>
    {/if}
<script type="text/javascript" src="scripts/login/register.js"></script>
{/block}

<footer>

<div id="footer">
  <div class="left_part">
    <div class="block">
      <span>{$LNG.footer_title_block1}</span>
      <a href="javascript:;" onclick="$('#login').submit();">{$LNG.footer_block1_menu1}</a>
      <br/><a href="index.php?page=rules">{$LNG.footer_block1_menu2}</a>
      <br/><a href="index.php?page=news&mode=all">{$LNG.footer_block1_menu3}</a>
      <br/><a href="index.php?page=about">{$LNG.footer_block1_menu4}</a>
    </div>

    <div class="block">
      <span>{$LNG.footer_title_block2}</span>
      <a href="javascript:;" onclick="$('#login').submit();">{$LNG.footer_block2_menu1}</a>
      <br/><a href="index.php?page=lostPassword">{$LNG.footer_block2_menu2}</a>
    </div>

    <div class="block">
      <span>{$LNG.footer_title_block3}</span>
      <a>{$LNG.footer_block3_menu1}</a>
      <br/><a href="index.php?page=disclamer">{$LNG.footer_block3_menu2}</a>
      <br/><a href="index.php?page=galery">{$LNG.footer_block3_menu3}</a>
      <br/><a href="index.php?page=jobs">{$LNG.footer_block3_menu4}</a>
    </div>

    <div class="clear"></div>
  </div>

    <div class="right_part">{$copyright}<br/><br/></div>

    <div class="clear"></div>

  </div>

</footer>

<div id="boxes">
  <div id="dialog" class="window">
    <div class="dialog_top">
      <span>{$LNG.popup_login_title}</span>
      <div class="close"></div>
    </div>


    <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
        <span class="lable">{$LNG.popup_login_login}</span>
        <input required name="email" id="email" type="text">
      <div class="clear"></div>
        <span class="lable">{$LNG.popup_login_mdp}</span>
        <input required name="password" id="password" type="password">

      <div class="clear"></div>

      <div style="float:left;margin-left:150px;margin-top:17px;">
        <input type="checkbox" id="remember_pass" name="remember_pass" value="false"/>
        <label for="remember_pass" class="checked">{$LNG.popup_login_souvient}</label>
      </div>

      <input type="submit" class="button_mini" value="{$LNG.popup_login_button}"> 
    </form>


    <div class="clear"></div>

    <a title="" href="index.php?page=register" style="float:right;margin-right:25px;">{$LNG.popup_login_account}</a>
    <a title="" href="index.php?page=lostPassword" style="float:right;margin-right:25px;">{$LNG.popup_login_recover}</a>

  </div>

  <div id="mask"></div>

</div>

<div id="dialog" style="display:none;"></div>

<script>
var LoginConfig = {
	'isMultiUniverse': {$isMultiUniverse|json},
	'referralEnable' : {$referralEnable|json},
	'basePath' : {$basepath|json}
};
</script>
<script>
  (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
  (i[r].q=i[r].q||[]).push(arguments) },i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44438409-3', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>
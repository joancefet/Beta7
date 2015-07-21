{block name="title" prepend}Manual Information{/block}
{block name="content"}
<div id="fb-root"></div>
<script>window.fbAsyncInit = function() {
    FB.init({
        appId: '328011467238834',
        status: true,
        cookie: true,
        xfbml: true,
        oauth: true
    });
    FB.Event.subscribe('edge.create', function(response) {
       xhr = $.ajax({
    type: 'POST',
    url: 'game.php?page=overview&mode=facebook',
    dataType: 'json',
    global: false,
    success: function(json) {
	}
    });
    });
	
	FB.Event.subscribe('edge.remove', function(response) {
       xhr = $.ajax({
    type: 'POST',
    url: 'game.php?page=overview&mode=facebookbis',
    dataType: 'json',
    global: false,
    success: function(json) {
	}
    });
    });
};
(function(d) {
    var js, id = 'facebook-jssdk';
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<div id="ally_content" class="conteiner" style="width:auto;">
        <div class="gray_stripe">
		Facebook
    </div>
        <div class="ally_contents" style="text-align:center">
		
<td style="text-align:center" colspan="2"> Like our facebook fan page and get instantly: <span style="color:#F90">500,000 dark matter</span> + <span style="color:#F90">5,000 anti matter</span> as reward. <br>You may close this windows after you liked us<br><span style="font-size:10px;">Attention: if you dislike us, you will lose your reward</span>.  </td><br><br>



<div class="fb-like-box" data-href="https://www.facebook.com/pages/Dark-Space-Empire/1490309864518434" data-send="false" data-show-faces="true"></div>

<div class="manual_btn_blokc">
	<a class="manual_btn_ok" href="game.php?page=overview" onclick="endfacebook()" target="_parent">Close this window!</a>
</div>

    </div>        
</div>


{/block}
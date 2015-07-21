{block name="title" prepend}{$LNG.lm_logout}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	{$LNG.lo_title}! <span style="color:#999;">session completed.</span>
	</div>
	<div class="ally_contents" style="text-align:center">
	You will be redirected through <span id="seconds">5</span> seconds<br><a href="./index.php">Click here if you do not want to wait</a>
	</div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}
{block name="script" append}
<script type="text/javascript">
    var second = 5;
	function Countdown(){
		if(second == 0)
			return;			
		second--;
		$('#seconds').text(second);
	}
	window.setTimeout("window.location.href='./index.php'", 5000);
	window.setInterval("Countdown()", 1000);
</script>
{/block}
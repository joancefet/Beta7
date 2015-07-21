{block name="title" prepend}{$LNG.siteTitleIndex}{/block}{block name="content"}

<div id="content">
	<div id="right_side">
		<div class="browser">
			<h3>Junte-se a nós agora!</h3>
			<p>Para jogar, você irá precisar apenas de um navegador.</p>
				<div class="links">
					<a href="http://www.opera.com/">
					<img src="./media/images/opera.png" width="22px" height="26px"/>
					</a>
					<a href="http://www.mozilla.org/en/firefox/new/">
					<img src="./media/images/firfox.png" width="27px" height="26px"/>
					</a>
					<a href="http://www.google.com/intl/en/chrome/browser/">
					<img src="./media/images/hrom.png" width="26px" height="27px"/>
					</a>
					<div style="float: right;">we recommend:</div>
				</div>
		</div>

		<div class="socials">
			<div class="black_bg">
				<h3>Redes Sociais</h3>
				<a style="background: url(./media/images/fb.png) no-repeat;" href="#" target="_BLANK"></a>
				<span>Inscreva-se e Siga.</span>
			</div>
		</div>

		<div class="server_status">
			<div class="black_bg">
			<div class="">
				<div class="hr"></div>
				<h3>Status do Servidor</h3> Jogadores: <span>{$users_amount}</span>
				<br>Novos este mês: <span>{$new_member}</span>
				<br>Novo SdC: <span>{$total_hof}</span>
				<br>Jogadores ativos: <span>{$active}</span>
			</div>
			</div>
		</div>

		<div class="forums">
			<h3>Últimos tópicos</h3>
			<div class="hr"></div>
			{foreach $topicsList as $topicsRow}
				<a title="" href="#" target="_blank">{$topicsRow.title}
				<br><span>{$topicsRow.date}</span>
				</a>
			{foreachelse}
				<h1>{$LNG.news_does_not_exist}</h1>
			{/foreach}
			<a title="" href="#" class="more" target="_blank">Ir para o Forum ...</a>
		</div>

	</div>

	<div class="conteiner">
		<link rel='stylesheet' id='style-css' href='./media/css/bjqs.css' type='text/css'>
		<script type='text/javascript' src='./media/js/bjqs.js'></script>


		{foreach $newsList as $newsRow}
			<div class="news">
				<h2 class="title">
				<a href="index.php?page=news&id={$newsRow.id}">{$newsRow.title}</a>
				</h2>
				<a href="index.php?page=news&id={$newsRow.id}"><img src="./media/{$newsRow.image}"/></a>
					<div class="news_gasage">
						<span class="date">{$newsRow.date}</span>
						<p>{$newsRow.text}</p>
					</div>
				<a href="index.php?page=news&id={$newsRow.id}" class="more">More...</a>
			</div>
			<div class="hr"></div>
		{foreachelse}
			<h2 class="title" style="padding: 15px;">{$LNG.news_does_not_exist}</h2>
		{/foreach}
		<a class="news_all" title="" href="index.php?page=news&mode=all">Show all news</a>
	</div>

	<div class="clear"></div>
	
</div>

{/block}
{block name="script" append}<script>{if $code}alert({$code|json});{/if}</script>{/block}
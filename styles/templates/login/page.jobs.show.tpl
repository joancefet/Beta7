{block name="title" prepend}Jobs{/block}
{block name="content"}

<div id="content">

	<div id="right_side">
		<div class="right_menu">
			<h3>Categories</h3>
			<ul>
				<li><a href="index.php?page=news&mode=notif">Notifications</a></li>
				<li><a href="index.php?page=news&mode=contest">Contests</a></li>
				<li><a href="index.php?page=news&mode=stock">Stock</a></li>
				<li><a href="index.php?page=news&mode=update">Updates</a></li>
				<li><a href="index.php?page=news&mode=all">All</a></li>
			</ul>
		</div>

		<div class="related_articles">
			<h3>Latest Jobs</h3>
			<div class="hr"></div>
			{foreach $newsList1 as $newsRow1}
				<a href="index.php?page=jobs&mode=info&id={$newsRow1.id}">{$newsRow1.title}</a>
				<div class="clear"></div>
			{foreachelse}
				<h1>No Jobs Avaible</h1>
			{/foreach}
		</div>

		<div class="forums">
			<h3>Latest Topics</h3>
			<div class="hr"></div>
			{foreach $topicsList as $topicsRow}
				<a title="" href="#" target="_blank">{$topicsRow.title}<br><span>{$topicsRow.date}</span></a>
			{foreachelse}
				<h1>{$LNG.news_does_not_exist}</h1>
			{/foreach}

			<a title="" href="http://forum.astro-mania.com/" class="more" target="_blank">Go to the forum ...</a>
		</div>
	</div>

	<div class="conteiner">
		{foreach $newsList as $newsRow}
			<div class="article">
				<h1 class="top_title" style="margin-bottom:20px;">{$newsRow.title}</h1>
				<div class="text_news">
					<p>{$newsRow.text}</p>
					<br>
					<div class="hr" style="margin-top:50px;"></div>
				</div>
				<div class="share">
					<span style="float:left">Share with your friends:&nbsp;</span>
					<div class="fb-share-button" data-href="{$actual_link}" data-type="icon"></div>
				</div>
			</div>
		{/foreach}
	</div>

	<div class="clear"></div>

</div>

<div id="fb-root"></div>

<script type="text/javascript">
(function(d, s, id) {
		var js,
		fjs = d.getElementsByTagName(s)[0];

		if (d.getElementById(id)) 
			return;

		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs); 
	}

	(document, 'script', 'facebook-jssdk')
);
</script>

{/block}
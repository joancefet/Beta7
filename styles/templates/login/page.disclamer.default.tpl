{block name="title" prepend}{$LNG.siteTitleDisclamer}{/block}
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
			<h3>Latest News</h3>
			<div class="hr"></div>

			{foreach $newsList as $newsRow}
				<a href="index.php?page=news&id={$newsRow.id}">{$newsRow.title}</a>
				<div class="clear"></div>
			{foreachelse}
				<h1>{$LNG.news_does_not_exist}</h1>
			{/foreach}
			
		</div>

		<div class="forums">
			<h3>Latest Topics</h3>
			<div class="hr"></div>

			{foreach $topicsList as $topicsRow}
				<a title="" href="#" target="_blank">{$topicsRow.title}<br>
				<span>{$topicsRow.date}</span>
				</a>
			{foreachelse}
				<h1>{$LNG.news_does_not_exist}</h1>
			{/foreach}

			<a title="" href="#" class="more" target="_blank">Go to the forum ...</a>
		</div>
	</div>

	<div class="conteiner">
		<div class="article">
			<h3><span style="color: #fff;">Adresse mail admin (BDD)</span></h3>
		</div>
	</div>

	<div class="clear"></div>
</div>

{/block}
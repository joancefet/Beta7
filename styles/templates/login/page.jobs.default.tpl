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
			{foreach $newsList as $newsRow}
				<a href="index.php?page=jobs&mode=info&id={$newsRow.id}">{$newsRow.title}</a>
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

			<a title="" href="#" class="more" target="_blank">Go to the forum ...</a>
		</div>

	</div>

	<div class="conteiner">
		<div class="article">
			<h1 class="top_title">{$notif}</h1>
			<div class="confid">{$info}</div>
			{foreach $newsList as $newsRow}
				{if !$newsRow@first}
					<div class="hr"></div>
				{/if}
				<div class="news">
					<h2 class="title">
					<a href="index.php?page=jobs&mode=info&id={$newsRow.id}">{$newsRow.title}</a>
					</h2>
					<a href="index.php?page=jobs&mode=info&id={$newsRow.id}">
					<img src="{$newsRow.image}" title="Soon a new campaign">
					</a>
					<div class="news_gasage">
					<span class="date">{$newsRow.date}</span>
					<p>{$newsRow.text}</p>
					</div>
					<a href="index.php?page=jobs&mode=info&id={$newsRow.id}" class="more">More...</a>
				</div>
			{foreachelse}
				<h1>No Jobs Avaible</h1>
			{/foreach}
		</div>
	</div>

	<div class="clear"></div>

</div>

{/block}
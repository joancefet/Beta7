{block name="title" prepend}{$LNG.siteTitleIndex}{/block}
{block name="content"}

<div id="content">

	<div id="right_side">

		<div class="right_menu">
			<h3>Categories</h3>
			<ul>
				<li><a href="http://dark-space.org/index.php?page=galery&mode=space">Space</a></li>
				{* <li><a href="http://dark-space.org/index.php?page=galery&mode=update">Updates</a></li> *}
				<li><a href="http://dark-space.org/index.php?page=galery&mode=screen">Game Screenshots</a></li>
				<li><a href="http://dark-space.org/index.php?page=galery">All</a></li>
			</ul>
		</div>

		<div class="related_articles">
			<h3>Latest News</h3>
			<div class="hr"></div>
			{foreach $newsList as $newsRow}
				<a href="#">{$newsRow.title}</a><div class="clear"></div>
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
		<div class="article" style="padding-right:0;">
			<script src="js/jquery-1.7.1.min.js" defer="defer" type="text/javascript"></script>
			<script src="js/jquery.prettyPhoto.js" defer="defer" type="text/javascript" charset="utf-8"></script>
			<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>

			<h1 class="top_title" style="margin-bottom:35px;">Game Screenshots</h1>
			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/94b661fe56cf9d42e1a3ee0dc30eddad.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/94b661fe56cf9d42e1a3ee0dc30eddad.jpg" alt="Overview eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/4957b7d5cfe076972a4b2e25c16e285c.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/4957b7d5cfe076972a4b2e25c16e285c.jpg" alt="Buildings eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/7a2d73a57a993bf1256ba286d8f8d502.png">
					<span><img src="./media/user_data/gallery/image/thumb/7a2d73a57a993bf1256ba286d8f8d502.png" alt="Research eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/de6217f7773d5739edab6675faec5f6f.png">
					<span><img src="./media/user_data/gallery/image/thumb/de6217f7773d5739edab6675faec5f6f.png" alt="Defense eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/2fc48d47c013889da53d213548f82c47.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/2fc48d47c013889da53d213548f82c47.jpg" alt="Fleets eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/9cd26c514386bb097544cc36b02a172a.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/9cd26c514386bb097544cc36b02a172a.jpg" alt="Alliance eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/edd0bf1d2f54d74488d28621681f6bb4.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/edd0bf1d2f54d74488d28621681f6bb4.jpg" alt="Alliance eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/f84e3de38978349eb5e99a4342d153e9.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/f84e3de38978349eb5e99a4342d153e9.jpg" alt="Orbit eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/a301d201f2a3dcec5135111b3ccc9eb8.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/a301d201f2a3dcec5135111b3ccc9eb8.jpg" alt="Settings eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/95c53529ec9777c7221b96cf5dfa4879.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/95c53529ec9777c7221b96cf5dfa4879.jpg" alt="Battle Simulator eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/6da95d8803f1118f212f5804f045f760.png">
					<span><img src="./media/user_data/gallery/image/thumb/6da95d8803f1118f212f5804f045f760.png" alt="Manage alliance eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/9772b287054681067a1dbdbf072a1f5c.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/9772b287054681067a1dbdbf072a1f5c.jpg" alt="Collider eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/02b2ec652985d9176b14f71d8ad8313f.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/02b2ec652985d9176b14f71d8ad8313f.jpg" alt="Premium Account eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/1525d6bee688c79f481f62f73e41ec7f.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/1525d6bee688c79f481f62f73e41ec7f.jpg" alt="Messages eris-universe" title=""/></span>
					</a>
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function(){
					$("a[rel^='prettyPhoto']").prettyPhoto({
						changepicturecallback: function(index){
						/* Called everytime an item is shown/changed */
					}});
				});
			</script>
			<script type="text/javascript">
				$(document).ready(function(){
					var description='game screenshots';
						$("a[rel^='lightbox']").prettyPhoto({
						changepicturecallback: function(index){
						/* Called everytime an item is shown/changed */
					}});
				});
			</script>

		<div class="clear"></div>
		</div>
	</div>

<div class="clear"></div>

</div>
{/block}
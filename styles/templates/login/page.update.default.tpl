{block name="title" prepend}{$LNG.siteTitleIndex}{/block}
{block name="content"}

<div id="content">
	<div id="right_side">
		<div class="right_menu">
			<h3>Categories</h3>
			<ul>
				<li><a href="index.php?page=galery&mode=space">Space</a></li>
				<li><a href="index.php?page=galery&mode=update">Updates</a></li>
				<li><a href="index.php?page=galery&mode=screen">Game Screenshots</a></li>
				<li><a href="index.php?page=galery">All</a></li>
			</ul>
		</div>

		<div class="related_articles">
			<h3>Latest News</h3>
			<div class="hr"></div>
			{foreach $newsList as $newsRow}
				<a href="../index.php?page=news&id={$newsRow.id}">{$newsRow.title}</a>
				<div class="clear"></div>
			{foreachelse}
				<h1>{$LNG.news_does_not_exist}</h1>
			{/foreach}
		</div>

		<div class="forums">
			<h3>Latest Topics</h3>
			<div class="hr"></div>
			<a title="" href="#" class="more" target="_blank">Go to the forum ...</a>
		</div>
	</div>

	<div class="conteiner">
		<div class="article" style="padding-right:0;">
			<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
			<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
			<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>

			<h1 class="top_title" style="margin-bottom:35px;">Mise à jour Jeu</h1>
			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/35c1e29727d9ed17eba855f81af41541.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/35c1e29727d9ed17eba855f81af41541.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/f69b2dc53c86f40eb56a2f01ff627430.jpg"><span>
					<img src="./media/user_data/gallery/image/thumb/f69b2dc53c86f40eb56a2f01ff627430.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/04ac4eaf5c3952eb25141f2a4b8a26d6.jpg"><span>
					<img src="./media/user_data/gallery/image/thumb/04ac4eaf5c3952eb25141f2a4b8a26d6.jpg" alt="" title=""/></span>
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
					var description='Обновления';

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
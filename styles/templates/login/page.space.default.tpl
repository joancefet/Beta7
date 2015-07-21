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
				<a href="../index.php?page=news&id={$newsRow.id}">{$newsRow.title}</a>
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
		<div class="article" style="padding-right:0;">
			<script src="js/jquery-1.7.1.min.js" defer="defer" type="text/javascript"></script>
			<script src="js/jquery.prettyPhoto.js" defer="defer" type="text/javascript" charset="utf-8"></script>
			<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>

			<h1 class="top_title" style="margin-bottom:35px;">Space</h1>
			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/a385a1721b9d1d7071301455dae234f2.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/a385a1721b9d1d7071301455dae234f2.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/212ba8c8814c6af3437f830f72eb5dcc.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/212ba8c8814c6af3437f830f72eb5dcc.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/339ff3868d24d2395c801c8e5196b5f9.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/339ff3868d24d2395c801c8e5196b5f9.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/af2f30875a12df4857265cd193018139.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/af2f30875a12df4857265cd193018139.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/b9489876e89bc00f489c1725577d1261.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/b9489876e89bc00f489c1725577d1261.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/67553a545f5b923d3d0f844ae30f479e.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/67553a545f5b923d3d0f844ae30f479e.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/b17b95d5c790f9f53d2b9c4852a4ab75.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/b17b95d5c790f9f53d2b9c4852a4ab75.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/ed895fa623256381368aea4a2972943f.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/ed895fa623256381368aea4a2972943f.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/d27babe33ea63dd1cc23a203f07ce5e1.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/d27babe33ea63dd1cc23a203f07ce5e1.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/e3b84340e22d54b5ebc982a7fe36a1f7.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/e3b84340e22d54b5ebc982a7fe36a1f7.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/8bc296d0b0f13b6841579ca429140a6d.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/8bc296d0b0f13b6841579ca429140a6d.jpg" alt="" title=""/></span>
					</a>
				</div>
			</div>

			<div class="table">
				<div class="image">
					<a rel="prettyPhoto[gallery]" href="./media/user_data/gallery/image/original/f4a228eb95c0a495913b1e8851522c7e.jpg">
					<span><img src="./media/user_data/gallery/image/thumb/f4a228eb95c0a495913b1e8851522c7e.jpg" alt="" title=""/></span>
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
					var description='Космос';

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
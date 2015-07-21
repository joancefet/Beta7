<div id="body">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="./scripts/login/selectLang.js"></script>
<script type="text/javascript" src="./scripts/login/FormulaireLang.js"></script>
		 <header>
			 <div id="top_band">
				<span style="padding-top: 13px;">{$LNG.main_navigation_menu_head1}</span>
				<!-- Ajout du choix de la langue en jquery -->
				{if count($languages) > 1}
			    <div id="polyglotLanguageSwitcher" style="padding: 6px;">
					<form action="">
						<select id="polyglot-language-options">
						{foreach $languages as $langKey => $langName}
							<option id="{$langKey}" value="{$langKey}" selected>{$langName}</option>
						{/foreach}
						</select>
					</form>
				</div>
				{/if}
				<!-- Fin du choix de la langue en jquery -->
		<form id="login" name="login" action="index.php?page=register" data-action="index.php?page=register" method="post">
				 <a href="javascript:;" onclick="$('#login').submit();" style="margin-right: 10px;">{$LNG.main_navigation_menu_head2}</a>
				 <div id="pencil_edit">&nbsp;|&nbsp;</div>
				 <a href="/users/login" name="modal">{$LNG.main_navigation_menu_head3}</a>
			 </div>
			 <div id="header">
				 <a href="index.php" class="logo">
				 <img id="img_logo" src="./media/images/logo.png"/>
				 </a>
				 <div id="top_content"></div>
			 </div>
		</header>

		 <div id="main_menu">
			 <div class="right_part">
			 	<a href="javascript:;" onclick="$('#login').submit();">{$LNG.main_navigation_menu1}</a>
			 </div>
			 <div class="left_part">
				 <a href="index.php">{$LNG.main_navigation_menu2}</a>
				 <div class="seporator"></div>
				 <a href="index.php?page=about">{$LNG.main_navigation_menu3}</a>
				 <div class="seporator"></div>
				 <a href="index.php?page=galery">{$LNG.main_navigation_menu4}</a>
				 <div class="seporator"></div>
				 <a href="#">{$LNG.main_navigation_menu5}</a>
				 <div class="seporator"></div>
				 <a href="#">{$LNG.main_navigation_menu6}</a>
			 </div>
		 </div>
	 </form>
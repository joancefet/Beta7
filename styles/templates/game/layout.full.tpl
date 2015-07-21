{include file="main.header.tpl" bodyclass="full"}
{if $hasAdminAccess}
<div class="globalWarning">
{$LNG.admin_access_1} <a id="drop-admin">{$LNG.admin_access_link}</a>{$LNG.admin_access_2}
</div>
{/if}
{include file="head_menu.tpl"}
{include file="main.topnav.tpl"}
{include file="main.navigation.tpl"}

{block name="content"}{/block}
{foreach $cronjobs as $cronjob}<img src="cronjob.php?cronjobID={$cronjob}" alt="">{/foreach}
{include file="main.footer.tpl" nocache}
{*{include file="planet_menu.tpl" nocache}*}
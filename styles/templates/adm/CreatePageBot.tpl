{include file="overall_header.tpl"}
{include file="head_nav.tpl"}<form action="" method="post">
<table width="45%">
<tr><th colspan="2">{$new_title}</th></tr>
<tr><td>{$user_reg}</td><td><input type="text" name="name"></td></tr>
<tr><td colspan="2"><input type="submit" value="{$new_add_user}"></td></tr>
<tr>
   <td colspan="2" style="text-align:left;"><a href="?page=create">{$new_creator_go_back}</a>&nbsp;<a href="?page=create&amp;mode=user">{$new_creator_refresh}</a></td>
</tr>
</table>
</form>
{include file="overall_footer.tpl"}

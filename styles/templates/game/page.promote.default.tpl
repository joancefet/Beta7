{block name="title" prepend}Vote{/block}{block name="content"}
<div id="page">
  <div id="content">
    <div id="ally_content" class="conteiner">
      <div class="gray_stripe" style="border-bottom:0;">
        {$LNG.alm_promote} 
      </div>
      <table class="tablesorter ally_ranks">
        <tbody>
          <tr>
            <td>
              <span>
                <p align="left">{$LNG.promote_one}</p>
                <span>
                </td>
              </tr>
              <table>
                {foreach from=$voturile key=k item=v}
                <td>
                  <img src="{$v.pic}">
                  <br>
                  {$v.link} - {$v.prize} DM
                </td>
                {/foreach}
              </table>
            </tbody>
        </table>
    </div>
  </div>
</div>
<div class="clear">
</div>
</div>
{/block}
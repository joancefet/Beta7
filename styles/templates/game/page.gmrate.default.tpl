{block name="title" prepend}{$LNG.lm_support}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<form action="game.php?page=gmrate" method="post">
<input type="hidden" name="mode" value="rate" />
<input type="hidden" name="inquery" value="{$inquery}">
<table style="text-align:left; width:600px">
	<tr>
		<td style="text-align:left">
			<br /><span style="font-size:20pt">inquiry № {$inquery}.</span><br /><br />
			<div>
				Jobs for the request is finished. Please answer a few brief questions. This will help us do even better support!
			</div><br /><br />
			<div>What is the probability that you will recommend the game to your friends?:</div>
			<table style="border:none; padding:none; width:100%">
				<tr style="border:none; padding:none; width:100%">
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="1">1</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="2">2</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="3">3</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="4">4</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="5">5</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="6">6</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="7">7</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="8">8</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="9">9</input>
					</td>
					<td style="border:none; padding:none">
						<input type="radio" name="recommend" value="10">10</input>
					</td>
				</tr>
			</table><br />
			<div> What most influenced your answer to the previous question?:</div>
			<input type="text" name="impact" value="" style="text-align:left; width:100%" /><br /><br />
			<div>As far as the decision of this request will affect your final grade?:</div>
			<input type="radio" name="total" value="Affected in a big way">Affected in a big way</input><br />
			<input type="radio" name="total" value="Not affected at all">Not affected at all</input><br />
			<input type="radio" name="total" value="Contributed to the lower side">Contributed to the lower side</input><br /><br />
			<div>Whether your problem was solved by the results of treatment in the Technical Support?:</div>
			<input type="radio" name="answer" value="yes">yes</input><br />
			<input type="radio" name="answer" value="no">no</input><br />
			<input type="radio" name="answer" value="partialy">partial</input><br /><br />
			<div>How much do you appreciate the quality of technical support specialist?:</div>
			<input type="radio" name="gmrate" value="-3">terribly! (-3)</input><br />
			<input type="radio" name="gmrate" value="-2">poorly! (-2)</input><br />
			<input type="radio" name="gmrate" value="-1">tolerantly. (-1)</input><br />
			<input type="radio" name="gmrate" value="0">neutrally. (0)</input><br />
			<input type="radio" name="gmrate" value="+1">satisfactorily. (+1)</input><br />
			<input type="radio" name="gmrate" value="+2">good. (+2)</input><br />
			<input type="radio" name="gmrate" value="+3">ideally! (+3)</input><br /><br />
			<div>Perhaps you have any additional comments?:</div>
			<textarea style="resize:none; height:190px" name="comment" rows="60" cols="8" style="height:100px;"></textarea><br /><br /><br />
			<div style="text-align:center"><span><input type="submit" title="Finish" value="Finish" /></span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<span><a href="game.php?page=ticket&mode=view&id={$id}">fill in later</a></span></div><br />
	</tr>
</table>
</form>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}
{block name="title" prepend}Advanced Trader{/block}
{block name="content"}
<div id="page">


	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	Advanced Trader (Points: <span id="resLeft">{$total_points}</span>)
		<a href="#" onclick="return Dialog.manualinfo(20)" class="interrogation manual">?</a>
       
    </div>
    <table class="tablesorter ally_ranks">
	
    <tbody>
   
					<div>
					<form method="post" action="">
					<input id="totalPoints" name="totalPoints" value="{$total_points11}" type="hidden">
					<input id="oldMetal" name="oldMetal" value="{$planet_metal11}" type="hidden">
					<input id="oldCrystal" name="oldCrystal" value="{$planet_crystal11}" type="hidden">
					<input id="oldDeuterium" name="oldDeuterium" value="{$planet_deuterium11}" type="hidden">
						
							<tr>
								<td class="c">&nbsp;</td>
								<td class="c"><font color=orange>{$LNG.tech.{901}} (1)</td>
								<td class="c"><font color=orange>{$LNG.tech.{902}} (2)</td>
								<td class="c"><font color=orange>{$LNG.tech.{903}} (4)</td>
							</tr>
							
							<tr>
								<td><font color=orange>Depois</td>
								<td><input value="0" id="newMetal" name="newMetal" onkeyup="page_merchant_updateRes();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></td>
								<td><input value="0" id="newCrystal" name="newCrystal" onkeyup="page_merchant_updateRes();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></td>
								<td><input value="0" id="newDeuterium" name="newDeuterium" onkeyup="page_merchant_updateRes();" type="text" style="border: 2px solid rgba(144, 144, 144, 0.6);"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><a onclick="page_merchant_setMax(1);"><font color=orange>Max</a></td>
								<td><a onclick="page_merchant_setMax(2);"><font color=orange>Max</a></td>
								<td><a onclick="page_merchant_setMax(4);"><font color=orange>Max</a></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><a onclick="page_merchant_setRest(1);"><font color=orange>Rest</a></td>
								<td><a onclick="page_merchant_setRest(2);"><font color=orange>Rest</a></td>
								<td><a onclick="page_merchant_setRest(4);"><font color=orange>Rest</a></td>
							</tr>
							
						
							<tr>
								<th colspan="4"><input value="Trade" id="okBtn" disabled="disabled" type="submit" class="buttonbau greenbau" style="border: 2px solid rgba(144, 144, 144, 0.6);"></th>
							</tr>
							<div>
								<tr>
									<td class="c" colspan="5"><font color=red size=2><b>{$LNG.tech.{200}}</b></td>
								</tr>
								<tr>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,2000,0);"><font color=orange>{$LNG.tech.{202}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(6000,6000,0);"><font color=orange>{$LNG.tech.{203}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(3000,1000,0);"><font color=orange>{$LNG.tech.{204}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(8000,3000,0);"><font color=orange>{$LNG.tech.{205}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(15000,9500,2000);"><font color=orange>{$LNG.tech.{206}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(41000,17000,0);"><font color=orange>{$LNG.tech.{207}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(10000,20000,10000);"><font color=orange>{$LNG.tech.{208}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(10000,6000,2000);"><font color=orange>{$LNG.tech.{209}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(0,1000,0);"><font color=orange>{$LNG.tech.{210}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(70000,45000,5000);"><font color=orange>{$LNG.tech.{211}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(0,2000,500);"><font color=orange>Solar {$LNG.tech.{212}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(60000,50000,15000);"><font color=orange>{$LNG.tech.{213}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(6000000,3500000,1000000);"><font color=orange>{$LNG.tech.{214}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(50000,40000,10000);"><font color=orange>{$LNG.tech.{215}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(8000000,4000000,500000);"><font color=orange>{$LNG.tech.{216}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(35000,20000,1500);"><font color=orange>{$LNG.tech.{217}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(305000000,155000000,40000000);"><font color=orange>{$LNG.tech.{218}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,600000,200000);"><font color=orange>{$LNG.tech.{219}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(6000000,7000000,3000000);"><font color=orange>{$LNG.tech.{220}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(300000000,188000000,52000000);"><font color=orange>{$LNG.tech.{221}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(220000000,110000000,30000000);"><font color=orange>{$LNG.tech.{222}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(75000,65000,10000);"><font color=orange>{$LNG.tech.{224}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(900000,700000,200000);"><font color=orange>{$LNG.tech.{225}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(3000000,2000000,200000);"><font color=orange>{$LNG.tech.{226}}</td>

								</tr>
								<tr>
								
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(30000000,10000000,2000000);"><font color=orange>{$LNG.tech.{227}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(80000000,40000000,7000000);"><font color=orange>{$LNG.tech.{228}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(5000,5000,500);"><font color=orange>{$LNG.tech.{229}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(21000000,5000000,1750000);"><font color=orange>{$LNG.tech.{230}}</td>
									
								</tr>
						
							</div><br>
							<div>
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{400}}</b></td>
								</tr>
								<tr>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(2000,0,0);"><font color=orange>{$LNG.tech.{401}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(1500,500,0);"><font color=orange>{$LNG.tech.{402}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(6000,2000,0);"><font color=orange>{$LNG.tech.{403}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(20000,15000,2000);"><font color=orange>{$LNG.tech.{404}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000,6000,0);"><font color=orange>{$LNG.tech.{405}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(50000,50000,30000);"><font color=orange>{$LNG.tech.{406}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,1000000,0);"><font color=orange>{$LNG.tech.{407}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(5000000,5000000,0);"><font color=orange>{$LNG.tech.{408}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(10000000,5000000,2500000);"><font color=orange>{$LNG.tech.{409}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(15000000,15000000,0);"><font color=orange>{$LNG.tech.{410}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(5000000000,2000000000,500000000);"><font color=orange>{$LNG.tech.{411}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(10000000,5000000,1500000);"><font color=orange>{$LNG.tech.{412}}</td>
									
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(25000000,18000000,3000000);"><font color=orange>{$LNG.tech.{413}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(80000000,60000000,20000000);"><font color=orange>{$LNG.tech.{414}}</td>
									{* <td style="cursor: pointer;" onclick="page_merchant_setSpread(15000000,15000000,0);"><font color=orange>{$LNG.tech.{415}}</td> *}
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(200000,150000,50000);"><font color=orange>{$LNG.tech.{416}}</td>
									
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(350000,150000,75000);"><font color=orange>{$LNG.tech.{417}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2500000,1250000,350000);"><font color=orange>{$LNG.tech.{418}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(45000000,30000000,8500000);"><font color=orange>{$LNG.tech.{419}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(3500,3500,2500);"><font color=orange>{$LNG.tech.{420}}</td>
									
									
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(110000,210000,60000);"><font color=orange>{$LNG.tech.{421}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(8750000,11000000,6000000);"><font color=orange>{$LNG.tech.{422}}</td>
									
									
									
								</tr>
							</div><br>
							<div >
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{0}}</b></td>
								</tr>
								<tr>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(30,7,0);"><font color=orange>{$LNG.tech.{1}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(20,10,0);"><font color=orange>{$LNG.tech.{2}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(110,30,0);"><font color=orange>{$LNG.tech.{3}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(100000000,50000000,25000000);"><font color=orange>{$LNG.tech.{6}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(40,15,0);"><font color=orange>{$LNG.tech.{4}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(900,360,180);"><font color=orange>{$LNG.tech.{12}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(400,120,200);"><font color=orange>{$LNG.tech.{14}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000000,500000,100000);"><font color=orange>{$LNG.tech.{15}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(400,200,100);"><font color=orange>{$LNG.tech.{21}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000,0,0);"><font color=orange>{$LNG.tech.{22}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000,1000,0);"><font color=orange>{$LNG.tech.{23}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000,2000,0);"><font color=orange>{$LNG.tech.{24}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(200,400,200);"><font color=orange>{$LNG.tech.{31}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(0,50000,100000);"><font color=orange>{$LNG.tech.{33}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,0);"><font color=orange>{$LNG.tech.{34}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(20000,20000,1000);"><font color=orange>{$LNG.tech.{33}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,20000);"><font color=orange>{$LNG.tech.{41}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(20000,40000,20000);"><font color=orange>{$LNG.tech.{42}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000000,4000000,2000000);"><font color=orange>{$LNG.tech.{43}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000000,3000000,500000);"><font color=orange>{$LNG.tech.{5}}</td>
								</tr>
							</div><br>
							<div >
								<tr>
									<td class="c" colspan="4"><font color=red size=2><b>{$LNG.tech.{100}}</b></td>
								</tr>
								<tr>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(200,1000,200);"><font color=orange>{$LNG.tech.{106}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(0,400,600);"><font color=orange>{$LNG.tech.{108}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(800,200,0);"><font color=orange>{$LNG.tech.{109}}</td>
									<td widtd="250" style="cursor: pointer;" onclick="page_merchant_setSpread(200,600,0);"><font color=orange>{$LNG.tech.{110}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000,0,0);"><font color=orange>{$LNG.tech.{111}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(0,800,400);"><font color=orange>{$LNG.tech.{113}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(0,4000,2000);"><font color=orange>{$LNG.tech.{114}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(400,0,600);"><font color=orange>{$LNG.tech.{115}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000,4000,6000);"><font color=orange>{$LNG.tech.{117}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(10000,20000,6000);"><font color=orange>{$LNG.tech.{118}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(200,100,0);"><font color=orange>{$LNG.tech.{120}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000,300,100);"><font color=orange>{$LNG.tech.{121}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(2000,4000,1000);"><font color=orange>{$LNG.tech.{122}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(240000,400000,160000);"><font color=orange>{$LNG.tech.{123}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(4000,8000,4000);"><font color=orange>{$LNG.tech.{124}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(750,500,250);"><font color=orange>{$LNG.tech.{131}}</td>
								</tr>
								<tr>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000,750,500);"><font color=orange>{$LNG.tech.{132}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1250,1000,750);"><font color=orange>{$LNG.tech.{133}}</td>
									<td style="cursor: pointer;" onclick="page_merchant_setSpread(1000,1750,0);"><font color=orange>{$LNG.tech.{125}}</td>
								</tr>
    </tbody>
	</table>
    </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}
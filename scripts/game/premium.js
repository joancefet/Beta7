function Totalstardust()
{
	var stardust	= $('#stardust').val();
	
	if(isNaN(stardust) || stardust < 0 ) {
		$('#prem_sim').val(0);
		stardust = 0;
	}
	
	cost 	= Number(stardust) * cost_stardust;
	
	$('#cost_stardust').text(NumberGetHumanReadable(cost));

}

function Total()
{
	var prem_res		= $('#prem_res').val();
	var prem_storage	= $('#prem_storage').val();
	var prem_s_build	= $('#prem_s_build').val();
	var prem_o_build 	= $('#prem_o_build').val();
	var prem_button 	= $('#prem_button').val();
	var prem_expedition	= $('#prem_expedition').val();
	var prem_leveling 	= $('#prem_leveling').val();
	var prem_bank_ally 	= $('#prem_bank_ally').val();
	var count_day 		= $('#count_day').val();
	var prem_count_expiditeon	= $('#prem_count_expiditeon').val();
	var prem_moon_dextruct 		= $('#prem_moon_dextruct').val();
	
	if(isNaN(prem_res) || prem_res < 0 ) {
		$('#prem_res').val(0);
		prem_res = 0;
	}
	if(isNaN(prem_storage) || prem_storage < 2 ) {
		$('#prem_storage').val(0);
		prem_storage = 0;
	}
	if(isNaN(prem_s_build) || prem_s_build < 0 ) {
		$('#prem_s_build').val(0);
		prem_s_build = 0;
	}
	if(isNaN(prem_o_build) || prem_o_build < 0 ) {
		$('#prem_o_build').val(0);
		prem_o_build = 0;
	}
	if(isNaN(prem_button) || prem_button < 2 ) {
		$('#prem_button').val(0);
		prem_button = 0;
	}
	if(isNaN(prem_moon_dextruct) || prem_moon_dextruct < 2 ) {
		$('#prem_moon_dextruct').val(0);
		prem_moon_dextruct = 0;
	}
	if(isNaN(prem_count_expiditeon) || prem_count_expiditeon < 0 ) {
		$('#prem_count_expiditeon').val(0);
		prem_s_build = 0;
	}
	if(isNaN(prem_leveling) || prem_leveling < 0 ) {
		$('#prem_leveling').val(0);
		prem_leveling = 0;
	}
	if(isNaN(prem_bank_ally) || prem_bank_ally < 2 ) {
		$('#prem_bank_ally').val(0);
		prem_bank_ally = 0;
	}
	if(isNaN(count_day) || count_day < 1 ) {
		$('#count_day').val(1);
		count_day = 1;
	}
	
	var skidka_price = 1;
	
	var prem_res_price			= 7 	* Math.pow(1.10, (Math.floor(Number(prem_res)/100))) * Number(prem_res);
	var prem_storage_price		= 87.5 	* Math.pow(1.20, (Math.floor(Number(prem_storage)))-2) * Number(prem_storage);
	var prem_s_build_price		= 3.5 	* Math.pow(1.20, (Math.floor(Number(prem_s_build)/50)-2)) * Number(prem_s_build);
	var prem_o_build_price		= 87.5 	* Math.pow(1.20, (Math.floor(Number(prem_o_build)))-2) * Number(prem_o_build);
	var prem_button_price		= 525 	* Math.pow(1.45, (Math.floor(Number(prem_button)))-2) * Number(prem_button);
	var prem_leveling_price 	= 23.3 	* Math.pow(1.25, (Math.floor(Number(prem_leveling)/31))) * Number(prem_leveling);
	var prem_bank_ally_price 	= 250 	* Math.pow(1.20, (Math.floor(Number(prem_bank_ally)))-2) * Number(prem_bank_ally);
	var prem_count_expiditeon_price = 350 	* Math.pow(1.30, (Math.floor(Number(prem_count_expiditeon)))) * Number(prem_count_expiditeon);
	var prem_moon_dextruct_price 	= 30 	* Math.pow(1.10, (Math.floor(Number(prem_moon_dextruct))/2)-2) * Number(prem_moon_dextruct);
	
	var all_price	=(prem_res_price + prem_storage_price + prem_s_build_price + prem_o_build_price + prem_button_price + prem_leveling_price + prem_bank_ally_price + prem_moon_dextruct_price  + prem_count_expiditeon_price);
	
	skidka_price =  Number(count_day) * (Number(all_price) - (Number(all_price) * Math.min(0.50,(Number(count_day) * 0.5 / 100))));
	
	$('#cost_prem').text(NumberGetHumanReadable(Math.round((Number(skidka_price)))));
}
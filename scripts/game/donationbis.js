$(function() {
	$('.input').keyup(function(event) {
		$(event.currentTarget).val(function(i, old) {
			return NumberGetHumanReadable(old.replace(/[^[0-9]|\.]/g, ''));
		});		
	});
	$('#pay').submit(function() {
		$('.input').val(function(i, old) {
			return old.replace(/[^[0-9]|\.]/g, '');
		});
	});
	$('#pay2').submit(function() {
		$('.input').val(function(i, old) {
			return old.replace(/[^[0-9]|\.]/g, '');
		});
	});
});

function displayinterkassa(){
	$('#xsolla2').slideUp();
	$('#interkassa').slideDown();
}

function displayxsolla(){
	$('#xsolla2').slideDown();
	$('#interkassa').slideUp();
}
function setidfriend(str_1, str_2){
	var select1 = document.getElementById('id_user_' + str_1),
     	select2 = document.getElementById('id_user_' + str_2);
	
	select2.selectedIndex = select1.selectedIndex;
}

function calculation(id)
{
	var amount = $("#amount"+id).val().replace(/[^[0-9]|\.]/g, '');
	
	if(id == 2)
		$("#amount1").val(NumberGetHumanReadable(Number(amount)));
	else
		$("#amount2").val(NumberGetHumanReadable(Number(amount)));
	
	if(isNaN(amount))
	{
		$("#cosr_rur").text(0);
		$("#cosr_byr").text(0);
		$("#cosr_usd").text(0);
		$("#cosr_uah").text(0);
		$("#cosr_eur").text(0);
	}
	else 
	{
		$("#cosr_rur").text(NumberGetHumanReadable(Number(amount) * 0.00906));	
		$("#cosr_byr").text(NumberGetHumanReadable(Number(amount) * 2.52080));	
		$("#cosr_uah").text(NumberGetHumanReadable(Number(amount) * 0.004455));	
		$("#cosr_usd").text(NumberGetHumanReadable(Number(amount) * 0.000137));	
		$("#cosr_eur").text(NumberGetHumanReadable(Number(amount) * 0.00013131));	
	}
	
	//Ð±Ð¾Ð½ÑƒÑ Ð¾Ñ‚ ÐºÐ¾Ð»-Ð²Ð° ÐÐœ
	bonus_of_amount = 0;
	if(don_bonus.status == 1 && amount >= don_bonus.amount)
	bonus_of_amount = amount * (don_bonus.percent / 100);
	
	var up_bonus = don_bonus.up_bonus / 50;
	var pointe_bonus 	= amount * pointe / 100;
	if(amount >=  10000 && amount <  20000)   	 amount *= 1.05 + ( 5 * up_bonus / 100); 
	else if(amount >=  20000 && amount <  50000) amount *= 1.10 + (10 * up_bonus / 100); 
	else if(amount >=  50000 && amount < 100000) amount *= 1.20 + (20 * up_bonus / 100);  
	else if(amount >= 100000 && amount < 150000) amount *= 1.30 + (30 * up_bonus / 100);  
	else if(amount >= 150000 && amount < 200000) amount *= 1.40 + (40 * up_bonus / 100);  
	else if(amount >= 200000)                    amount *= 1.50 + (50 * up_bonus / 100);
	
	
	
	
	


		
	var bonus_amount1 = amount * ((bonus + x_donation_inter) / 100);
	var bonus_amount2 = amount * ((pointe + x_donation_xsolla) / 100);
	
	var count1 = Math.round(Number(bonus_of_amount) + Number(pointe_bonus) + Number(amount) + Number(bonus_amount1));
	var count2 = Math.round(Number(bonus_of_amount) + Number(pointe_bonus) + Number(amount) + Number(bonus_amount2));
	
	if(bonus_of_amount != 0)
		$('.bonus_of_amount_per').text(NumberGetHumanReadable(don_bonus.percent));
	else
		$('.bonus_of_amount_per').text(0);
	
	if(bonus_of_amount != 0)
		$('.bonus_of_amount').text(NumberGetHumanReadable(bonus_of_amount));
	else
		$('.bonus_of_amount').text(0);
	
	if (isNaN(pointe_bonus))
		$(".pointe_bonus").text(0);
	else 
		$(".pointe_bonus").text(NumberGetHumanReadable(pointe_bonus));
		
	if (isNaN(bonus_amount1))
		$("#bonus1").text(0);
	else 
		$("#bonus1").text(NumberGetHumanReadable(bonus_amount1));	
		
	if (isNaN(pointe_bonus))
		$("#bonus2").text(0);
	else 
		$("#bonus2").text(NumberGetHumanReadable(pointe_bonus));	
	
	if (isNaN(count1))
		$("#count1").text(0);
	else 
		$("#count1").text(NumberGetHumanReadable(count1));
	
	if (isNaN(count2))
		$("#count2").text(0);
	else 
		$("#count2").text(NumberGetHumanReadable(count2));
}
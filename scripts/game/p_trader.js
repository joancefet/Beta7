function page_merchant_updateRes(){
var left=$("#totalPoints").val()-$("#newMetal").val()-($("#newCrystal").val()*2)-($("#newDeuterium").val()*4);
$("#resLeft").text(left);
if(left==0){
	$("#okBtn").removeAttr('disabled')
	}else{
	$("#okBtn").attr('disabled','true')}
	};
	
function page_merchant_setMax(a){
		if(a==1){
		page_merchant_setSpread(1,0,0)
		}else{
		if(a==2){
		page_merchant_setSpread(0,1,0)
		}else{
		if(a==4){
		page_merchant_setSpread(0,0,1)}
			}
		}
		page_merchant_updateRes()};
		
function page_merchant_setRest(a){
max=$("#totalPoints").val()-$("#newMetal").val()-($("#newCrystal").val()*2)-($("#newDeuterium").val()*4)-1+1;
gg = max/2;
xx = max/4;
if(a==1){
	$("#newMetal").val(($("#newMetal").val()-1+1)+max)
	}else{if(a==2){
	$("#newCrystal").val(($("#newCrystal").val()-1+1)+gg)
	}else{
		if(a==4){
		$("#newDeuterium").val(($("#newDeuterium").val()-1+1)+xx)}}}
		page_merchant_updateRes()};
		
function page_merchant_setSpread(e,d,a){
points=$("#totalPoints").val();
var b=e+(2*d)+(4*a);
var c=points/b;
var vv = c*e;
var gg = c*d;
var dd = c*a;
$("#newMetal").val(vv);
$("#newCrystal").val(gg);
$("#newDeuterium").val(dd);
page_merchant_setRest(1);
page_merchant_updateRes()};

function page_merchant_setCurrent(){
$("#newMetal").val($("#oldMetal").val());
$("#newCrystal").val($("#oldCrystal").val());
$("#newDeuterium").val($("#oldDeuterium").val());
page_merchant_updateRes()};

function page_merchant_customRatio(){
page_merchant_setSpread($("#ratio1").val(),$("#ratio2").val(),$("#ratio4").val())};
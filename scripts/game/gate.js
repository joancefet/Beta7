var Gate	= {
	max: function(ID) {
		$('#ship'+ID+'_input').val($('#ship'+ID+'_value').text().replace(/\./g, ""));
	},
	zero: function(ID) {
		$('#ship'+ID+'_input').val(0);
	},
	
	AllShips: function(ID) {
		Gate.max(202);
		Gate.max(203);
		Gate.max(204);
		Gate.max(205);
		Gate.max(206);
		Gate.max(207);
		Gate.max(208);
		Gate.max(209);
		Gate.max(210);
		Gate.max(211);
		Gate.max(213);
		Gate.max(214);
		Gate.max(215);
		Gate.max(216);
		Gate.max(217);
		Gate.max(218);
		Gate.max(219);
		Gate.max(220);
		Gate.max(221);
		Gate.max(222);
		Gate.max(223);
		Gate.max(224);
		Gate.max(225);
		Gate.max(226);
		Gate.max(227);
		Gate.max(228);
		Gate.max(229);
		Gate.max(230);
	},
	
	NoShips: function(ID) {
		Gate.zero(202);
		Gate.zero(203);
		Gate.zero(204);
		Gate.zero(205);
		Gate.zero(206);
		Gate.zero(207);
		Gate.zero(208);
		Gate.zero(209);
		Gate.zero(210);
		Gate.zero(211);
		Gate.zero(213);
		Gate.zero(214);
		Gate.zero(215);
		Gate.zero(216);
		Gate.zero(217);
		Gate.zero(218);
		Gate.zero(219);
		Gate.zero(220);
		Gate.zero(221);
		Gate.zero(222);
		Gate.zero(223);
		Gate.zero(224);
		Gate.zero(225);
		Gate.zero(226);
		Gate.zero(227);
		Gate.zero(228);
		Gate.zero(229);
		Gate.zero(230);
	},
	
	submit: function() {
		$.getJSON('?page=information&mode=sendFleet&'+$('.jumpgate').serialize(), function(data) {
			alert(data.message);
			if(!data.error)
			{
				parent.$.fancybox.close();
			}
		});		
	}
}
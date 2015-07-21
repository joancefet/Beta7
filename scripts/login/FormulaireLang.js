$(function() {
    $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
		effect: 'fade',
        testMode: true,
            onChange: function(evt){
            	var Lang = evt.selectedItem;
            	var text = "";

					$.post('./ChangeLangAjax.php', {Lang: Lang},function(data) {
						if(data!="ok") {
							alert("Une erreur est survenue merci de réessayer changement non éffectuer");
						} else {
							if (Lang == 'fr') {text = "French"}
							if (Lang == 'en') {text = "English"}
							if (Lang == 'de') {text = "Deutsch"}
							alert("Vous avez changer de lang avec succès : "+ text);
							document.location.href = "index.php";
						}
					});
				return false;
                }
			});
        });
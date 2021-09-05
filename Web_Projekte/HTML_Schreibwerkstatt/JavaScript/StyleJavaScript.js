function disable() {
	document.getElementById("disabledInput").disabled = false;
}

var Globalplayer = 0;

function GuigaEvent() {
	debugger;
	
	if( Globalplayer == 0)
	{
		document.getElementById("disabledInput").disabled = false;
		Globalplayer += 1;
	}
	else if(Globalplayer == 1) 
	{
		document.getElementById("disabledInput").disabled = true;
		Globalplayer -= 1;
	}
}
 // Datei Namen anzeigen bei dem Hochladen einer Datei 
 $(".custom-file-input").on("change", function () {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


$('.popover-dismiss').popover({
	trigger: 'focus'
  });
//Formular Löschen 
$(document).on('click', "#ResetForm", function () {
	// Alles zurücksetzen neuladen
	document.getElementById('CustomizationForm').reset();
});


 // Prüfung des Formulars auf ausgefühlzt oder nicht
 (function () {
	'use strict';
	window.addEventListener('load', function () {
		// Bedingungen
		var forms = document.getElementsByClassName('needs-validation');
		// Schleife über für eien saubere übergabe.
		var validation = Array.prototype.filter.call(forms, function (form) {
			form.addEventListener('submit', function (event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})();
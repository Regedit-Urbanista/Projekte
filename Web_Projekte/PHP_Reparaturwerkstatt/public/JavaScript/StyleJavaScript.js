
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
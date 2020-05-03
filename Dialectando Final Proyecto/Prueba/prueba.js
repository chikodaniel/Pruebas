var botonAbrirPopUp = document.getElementById('boton-abrir-popup'),	
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	botonCerrarPopup = document.getElementById('boton-cerrar-popup');
	

botonAbrirPopUp.addEventListener('click', function(){
 overlay.classList.add('active');	
 popup.classList.add('active');	
});

botonCerrarPopup.addEventListener('click', function(){
 overlay.classList.remove('active');	
 popup.classList.remove('active');		
});

$('#menu').click(function() {
	$('#test').animate({
		height: 'toggle'
		}, 290, function() {
	});
});
// bt_hidden.js


var boton    = document.querySelector(".boton-open"); 
var elemento = document.querySelector(".elemento");

boton.addEventListener("click", () => {
	// .classList muestra y modifica lista de clases
	// add | remove | toggle
	elemento.classList.toggle("mostrar");
});



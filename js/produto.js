//Antigo com JS puro
/*
var inputTamanho = document.querySelector('[name=tamanho]')

var outputTamanho = document.querySelector('[name=valortamanho]')

inputTamanho.oninput = mostraTamanho
inputTamanho.onchange = mostraTamanho

function mostraTamanho(){
	outputTamanho.value = inputTamanho.value
	outputTamanho.textContent = event.target.value
}
*/

//Agora com jQuery
$('[name=valortamanho]').text(this.value);

$('[name=tamanho]').on('input', function(){
  $('[name=valortamanho]').val(this.value);
});


var WordCounter = (function() {

	var textOutput = $('.numero')

	function init() {}

	$('[name="el_relato"]').on('paste keyup', wordLength)

	function wordLength(e) {
		var field_length = field.val().replace(/(\r\r)/gm,"").split(/[\s,]+/)
		field_length = field_length.filter(Boolean).filter(removeDots)
		render(field_length.length)
	}

	function render(i) {
		textOutput.text(i)
		
		if (i > 200) {
			textOutput.parent().find('.msg').text('Has excedido el máximo de palabras')
		} else {
			textOutput.parent().find('.msg').text('')
		}
	}

	function removeDots(valor) {
		return valor != "."
	}

	return {
		init: init
	}

})(field)



var field = $('[name="el_relato"]')

if (field) {
	WordCounter.init(field)
}
// adding the main css with webpack
require('../estilos/sass/principal.scss');
var $ = require('jquery');

//adding effects

var buttonHover = $('button#buttonSub');
var imgIcon = $('img.icon');
buttonHover.hover(function() {
	/* Stuff to do when the mouse enters the element */
	imgIcon.addClass('set');
}, function(){
	imgIcon.removeClass('set');
});


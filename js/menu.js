jQuery(document).ready(main);

var contador = 1;
var contadorcat=1;

function main (){
	$('.menu_bar').click(function(){
		
		if (contador == 1){
			$('.menu_gral').animate({
				right: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.menu_gral').animate({
				right: '-100%'
			});
		};
		
	});

		$('.menu_bar_categoria').click(function(){
		
		if (contadorcat == 1){
			$('.menu_categoria').animate({
				left: '0'
			});
			contadorcat = 0;
		} else {
			contadorcat = 1;
			$('.menu_categoria').animate({
				left: '-100%'
			});
		};
		
	});
};
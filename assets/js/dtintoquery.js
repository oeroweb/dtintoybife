$(document).ready(function(){	
	//alert('cargado');
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 2000);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 200){
			$('.ir-arriba').slideDown(1900);
		} else{
			$('.ir-arriba').slideUp(1900); 
		}
	});

	$("#alert").click(function(){
		$(this).addClass("hidden");
	});

	// CERRAR SUBMENU
	$("#cerrar").click(function () {		
		$(".submenu").toggle("slideUp");
	});	

	//fixed
	var altura = $(".header").offset().top;	
	$(window).on('scroll', function(){
		if($(window).scrollTop() > altura){
			$(".header").addClass('fixed');
		}else{
			$(".header").removeClass('fixed');
		}
	});

	//whatsapp
	$("#ico-whatsapp").click(function(){
		$(this).css("transition","all 1s ease" );
		$(this).toggleClass("rotar180");
		$(".ico-whatsapp i").toggleClass("fab fa-whatsapp");
		$(".ico-whatsapp i").toggleClass("fas fa-times");
		$("#popup-what").slideToggle('slow');
		$("#text-whatsapp").slideToggle('slow');		
	});

	//CARUSSEL
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,	
		nav:true,
		autoplay:true,
		autoplayTimeout:1500,
		autoplayHoverPause:true,
		responsive:{
			0:{
					items:1
			},			
			800:{
					items:2
			}
		}
	});

	$(".owl-prev").html('<span class="btn-owl"><i class="fas fa-angle-left"></i> </span>');
	$(".owl-next").html('<span class="btn-owl"><i class="fas fa-angle-right"></i> </span>');
	
});

$(document).ready(function () {
	$('.aniview').AniView(options);

	var options = {
		animateThreshold: 100,
		scrollPollInterval: 30
	}
});	


/**
 * Enlaces
 * https://programacion.net/articulo/15_librerias_de_javascript_para_hacer_efectos_de_scroll_impresionantes_1308
 * 
 * https://github.com/jjcosgrove/jquery-aniview
 * https://jjcosgrove.github.io/jquery-aniview/
*/
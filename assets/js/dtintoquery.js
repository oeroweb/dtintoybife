$(function(){

	var ancho = $(window).width(),
		navbar = $('#navbar'),
		btnMenu = $('#btn-menu'),
		icono = $('#btn-menu .icono');

	if(ancho < 1000){
		navbar.hide();
	}

	btnMenu.on('click', function(){
		navbar.slideToggle();
		icono.toggleClass('fa-bars');
		icono.toggleClass('fa-times');
	});

	$(window).on('resize', function(){
		if($(this).width() > 1000){
			navbar.show();
			icono.addClass('fa-times');
			icono.removeClass('fa-bars');
		}else{
			navbar.hide();
			icono.addClass('fa-bars');
			icono.removeClass('fa-times');
		}
	});

});

$(document).ready(function(){	
	//alert('cargado');
	$('.ir-arriba').click(function(){
		// body...
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
		scrollPollInterval: 50
	}
});	

$(document).ready(function(){
	
	// pagina inicio
	$("#emprendedor").click(function(e){
		e.preventDefault();
		var nombreplan = "Emprendedor";
		localStorage.setItem("plan", nombreplan);		
	});

	$("#digitalPlus").click(function(e){
		e.preventDefault();
		var nombreplan = "DigitalPlus";
		localStorage.setItem("plan", nombreplan);
	});
	
	$("#DigitalPremium").click(function(e){
		e.preventDefault();
		var nombreplan = "DigitalPremium";
		localStorage.setItem("plan", nombreplan);		
	});

	if(localStorage.getItem('plan') == "Emprendedor"){
		$("#emprendedor2").attr('checked', true);
	}else if(localStorage.getItem('plan') == "DigitalPlus"){
		$("#dPlus").attr('checked', true);
	}else if(localStorage.getItem('plan') == "DigitalPremium"){
		$("#dPremium").attr('checked', true);
	}	

	$('.list').click(function(){
		const value = $(this).attr('data-filter');
		if(value == 'all'){
			$('.portafolio_box').show('1000');
		}else{
			$('.portafolio_box').not('.'+value).hide('1000');
			$('.portafolio_box').filter('.'+value).show('1000');
		}		
	});

	$('.list').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
	});

});

/**
 * Enlaces
 * https://programacion.net/articulo/15_librerias_de_javascript_para_hacer_efectos_de_scroll_impresionantes_1308
 * 
 * https://github.com/jjcosgrove/jquery-aniview
 * https://jjcosgrove.github.io/jquery-aniview/
*/
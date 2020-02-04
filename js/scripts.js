$(function(){
	//Aqui vai todo o código javascript
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicar na nav.mobile
		var listaMenuMobile = $('nav.mobile ul');
		//Abrir o menu através do fadeIn
		if(listaMenuMobile.is(':hidden') == true){
			//fas fa-bars
			//fas fa-times
			//var icone = $('.botao-menu-mobile i');
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-bars');
			icone.addClass('fas fa-times');
			listaMenuMobile.slideToggle();
		}else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-times');
			icone.addClass('fas fa-bars');
			listaMenuMobile.slideToggle();
		}
		//Abrir ou fechar o menu com uma simples linha de código
	});

	if($('target').length > 0) {
		//O elemento existe, portanto precisamos dar o scroll em algum elemento
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({scrollTop:divScroll},2000);
	}

	carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').hide();
			$('.container-principal').load(include_path+'pages/'+pagina+'.php');

			//carrega o site em tempo real
			setTimeout(function(){
				initialize();
				addMarker(-1.354880,-48.448880,'',"Minha Casa",undefined,false);
			},1000);	

			$('.container-principal').fadeIn(1000);

			return false;
		})
	}
})
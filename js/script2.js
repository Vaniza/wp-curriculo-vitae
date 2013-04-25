(function ($) {
/* Fun��o que carrega script das abas */
        
$.abasSimples = function ()
{
	/* Guarda IDs dos elementos */
	var abas = 'p#abas';
	var conteudos = 'ul#conteudos';
	
	/* Oculta todas as abas */
	$(conteudos + ' li').hide();
	
	/* Exibe a primeira aba */
	<?php if($msg==3){  ?>
		$(conteudos + ' #aba2').show();
	<?php }else{ ?>
		$(conteudos + ' li:first-child').show();
	<?php } ?>

	/* Quando uma aba for clicada */
	$(abas + ' a').click(function()
	{
		/* Remove todas as classes de todas as abas */
		$(abas + ' a').removeClass('selected');
		
		/* Acrescenta uma classe CSS marcando visualmente a aba como selecionada */
		$(this).addClass('selected');
		
		/* Oculta todas as abas abertas */
		$(conteudos + ' li').hide();
		
		/* Exibe a aba que foi clicada */
		$(conteudos +  ' ' + $(this).attr('href')).show();
		
		/* Fim :D */
		return false;
	}); 
	
};

/* Quando o documento estiver carregado� */
$(document).ready(function()
{
	/* Carrega a fun��o das abas */
	$.abasSimples();

});
}(jQuery));
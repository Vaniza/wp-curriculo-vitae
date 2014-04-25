<?php

wp_enqueue_style('wpcva_bootstrap', plugins_url('../css/bootstrap.min.css', __FILE__));

wp_enqueue_script('jquery');	
wp_enqueue_script('wpcva_bootstrapJS', plugins_url('../js/bootstrap.min.js', __FILE__));

?>
<div class="container-fluid">
    <h2>Informações do plugin</h2>					
    <p>O <strong>WP-Curriculo Vitae</strong> e um plugin que permite que usuários a cadastrem seu currículo no site para divulgação online ou para uso do site.</p>
    <p>O plugin trabalha com duas versoes:</p>
    <p><strong>Versão gratuita:</strong></p>
    <p>1. Cadastrar o curriculo com válidação de CPF;<br/>
    2. Listagem de curriculos com sistema de busca;<br/>
    3. Cadastrar e editar atraves de area restrita.</p>
    <p>Para acessar a versão gratuita&nbsp;<a title="Plugin WP - Currículo Vitae" href="http://wordpress.org/extend/plugins/wp-curriculo-vitae/" target="_blank">clique aqui</a>.</p>
    <p><strong>Versão paga:</strong></p>
    <p>1. Cadastrar e editar o curriculo para o usuario final;<br/>
    2. Cadastrar e editar atraves de area restrita;<br/>
    3. Widget de login na area restritra;<br/>
    4. Listagem de curriculos com sistema de busca por: Nome, especificacoes, area de trabalho e local;<br/>
    5. Widget de Busca de Curriculos.<br/>
    <?php /*?>6. Exporta em XML.<br/><? */?>
    6. Cadastros com Válidação de CPF e campos de endereço.</p>
    
    <p><strong>Como utilizar</strong></p>
    <p>Para exibir o formulário de cadastro, crie uma pagina e coloque o shortcode <strong>[formCadastro]</strong>.</p>
    <p>Para exibir a listagem dos cadastrados, crie uma página e coloque o shortcode <strong>[listCurriculos]</strong>.</p>
    <p>Use o widget <strong>WP-Curriculo Vitae busca</strong> para exibir a busca rápida de currículo em todas as páginas.</p>
    <p>Use o widget <strong>WP-Curriculo Vitae login</strong> para exibir o formulário de login em todas as páginas.</p>
    <p><em>Obs.</em> Os widget são apenas para a versão paga.</p>
    <p>Qualquer dúvida envie uma mensagem para o email <a href="mailto:wiliamluisilva@gmail.com">wiliamluisilva@gmail.com</a> ou acesse o blog e deixe uma mensagem no contato <a href="http://wiliamluis.wordpress.com/contato/">clicando aqui</a>.</p>
</div>
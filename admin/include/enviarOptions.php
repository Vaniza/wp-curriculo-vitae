<?php
// Devido � quantidade de dados que esta fun��o poderia gerar,
// vamos apenas atualizar a base de dados de 10 em 10 minutos.
// Desta forma, se um usu�rio permanecer no site por 30 minutos,
// ser� registado tr�s vezes na tabela.
global $wpdb;

$wls_curriculo_options 	= $wpdb->prefix . 'wls_curriculo_options';
 
$assunto_cadastro 		= @$_POST['assunto_cadastro'];
$mensagem_cadastro 		= @$_POST['mensagem_cadastro'];


$tipo_envio				= @$_POST['tipo_envio']; 
$nome					= @$_POST['nome']; 
$email					= @$_POST['email']; 
$usuario 				= @$_POST['usuario'];
$senha 					= @$_POST['senha'];
$smtp_autententicacao 	= @$_POST['smtp_autententicacao'];
$seguranca 				= @$_POST['seguranca'];
$porta_saida 			= @$_POST['porta_saida'];
$host 					= @$_POST['host'];

#exit;
// Checamos se n�o existe nenhum registo procedemos

// Registar os IPs na base de dados
$var = array(
  
  'assunto_cadastro'		=> $assunto_cadastro,	
  'mensagem_cadastro'		=> $mensagem_cadastro,	
  
  #'tipo_envio' 				=> $tipo_envio,
  'nome' 					=> $nome,
  'email' 					=> $email,
  #'senha' 					=> $senha,
  #'usuario' 				=> $usuario,
  #'smtp_autententicacao' 	=> $smtp_autententicacao,
  #'seguranca'				=> $seguranca,
  #'porta_saida'				=> $porta_saida,
  #'host' 					=> $host,
			
);

$proto = strtolower(preg_replace('/[^a-zA-Z]/','',$_SERVER['SERVER_PROTOCOL'])); //pegando s� o que for letra 

if($_GET['id_formulario']){

	$location = $proto.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."&";
	
}else{
	
	$location = $proto.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?";
	
}

$id = 1;

echo $qry = $wpdb->update($wls_curriculo_options, $var, array('id' => $id), $format = null, $where_format = null );

$msg = 1;

if($qry == false && $qry != 0) { 
	
	$wpdb->show_errors(); 
	
	$wpdb->print_error();
	
	exit;
	
} else { 
	
	@header("Location:?page=configuracao-emails&msg=".$msg."");	

}

?>
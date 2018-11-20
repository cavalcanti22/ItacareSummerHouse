<?php 
class Sites 
{
	private $foto;
	private $pagina;

	function __construct()
	{
		require 'models/Foto.php';
		$this->foto = new Foto;

		require 'models/Pagina.php';
		$this->pagina = new Pagina;
	}
	public function index(){

		$data['layout'] = 'views/layouts/site';
		$data['view'] = 'views/sites/index';
		$data['titulo'] = 'Itacaré Summer House | Brasil';
		$data['header'] = $this->pagina->get_pagina(1);
		$data['infos'] = $this->pagina->get_pagina(2);
		$data['video'] = $this->pagina->get_pagina(3);
		$data['contato'] = $this->pagina->get_pagina(4);
		$data['fotos'] = $this->foto->get_all_fotos();

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{

				if(!isset($_POST["Submit"])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");
				/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
				// if (preg_match("/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$/", $_SERVER[HTTP_HOST])) {
				$emailsender='contato@itacaresummerhouse.com.br';
				// } else {
					// $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
	        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
	        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
				// }

				/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
	if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
	elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
	else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

	// Passando os dados obtidos pelo formulário para as variáveis abaixo
	$nomeremetente     = $_POST['nomeremetente'];
	$emailremetente    = trim($_POST['emailremetente']);
	$emaildestinatario = 'itacaresummerhouse@gmail.com';
	$comcopia          =  'contato@itacaresummerhouse.com.br';
	$assunto           = 'Itacaré Summer House';
	// $telefone           = $_POST['telefone'];
	$mensagem          = $_POST['mensagem'];


	/* Montando a mensagem a ser enviada no corpo do e-mail. */
	$mensagemHTML = '<P>Esse email foi enviado pelo website <b>Itacaré Summer House</b></P>
	<P>Aqui est&aacute; a mensagem:</P>
	<p><b>Nome:<i></b>'.$nomeremetente.'</i></p>

	<p><b>Email:<i></b>'.$emailremetente.'</i></p>

	<p><b>Mensagem:<i></b>'.$mensagem.'</i></p>
	<hr>';


	/* Montando o cabeçalho da mensagem */
	$headers = "MIME-Version: 1.1".$quebra_linha;
	$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
	// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
	$headers .= "From: ".$emailsender.$quebra_linha;
	$headers .= "Return-Path: " . $emailsender . $quebra_linha;
	// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
	// Se não houver um valor, o item não deverá ser especificado.
	if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
		if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
			$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
	// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

			/* Enviando a mensagem */
			// if 
			(mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender));
			 // {
			
				// 	echo $_SESSION['feedback'] = "Mensagem Enviada com sucesso!";
			 // }
				// else 
				// {
				// 	echo $_SESSION['feedback'] = "Erro ao enviar a mensagem!";

				// }
			
		}

		return $data;
	}
	public function ingles(){

		$data['layout'] 	= 'views/layouts/ingles';
		$data['view']		= 'views/sites/ingles';
		$data['titulo']	    = 'Itacaré Summer House | English';
		$data['infos'] 		= $this->pagina->get_pagina(2);
		$data['video'] 		= $this->pagina->get_pagina(3);
		$data['contato'] 	= $this->pagina->get_pagina(4);
		$data['headeringles'] = $this->pagina->get_pagina(5);
		$data['fotos'] 		= $this->foto->get_all_fotos();

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{

				if(!isset($_POST["Submit"])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");
				/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
				// if (preg_match("/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$/", $_SERVER[HTTP_HOST])) {
				$emailsender='contato@itacaresummerhouse.com.br';
				// } else {
					// $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
	        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
	        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
				// }

				/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
	if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
	elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
	else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

	// Passando os dados obtidos pelo formulário para as variáveis abaixo
	$nomeremetente     = $_POST['nomeremetente'];
	$emailremetente    = trim($_POST['emailremetente']);
	$emaildestinatario = 'itacaresummerhouse@gmail.com';
	$comcopia          =  'contato@itacaresummerhouse.com.br';
	$assunto           = 'Itacaré Summer House';
	// $telefone           = $_POST['telefone'];
	$mensagem          = $_POST['mensagem'];


	/* Montando a mensagem a ser enviada no corpo do e-mail. */
	$mensagemHTML = '<P>Esse email foi enviado pelo website <b>Itacaré Summer House</b></P>
	<P>Aqui est&aacute; a mensagem:</P>
	<p><b>Nome:<i></b>'.$nomeremetente.'</i></p>

	<p><b>Email:<i></b>'.$emailremetente.'</i></p>

	<p><b>Mensagem:<i></b>'.$mensagem.'</i></p>
	<hr>';


	/* Montando o cabeçalho da mensagem */
	$headers = "MIME-Version: 1.1".$quebra_linha;
	$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
	// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
	$headers .= "From: ".$emailsender.$quebra_linha;
	$headers .= "Return-Path: " . $emailsender . $quebra_linha;
	// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
	// Se não houver um valor, o item não deverá ser especificado.
	if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
		if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
			$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
	// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

			/* Enviando a mensagem */
			// if 
			(mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender));
			 // {
			
				// 	echo $_SESSION['feedback'] = "Mensagem Enviada com sucesso!";
			 // }
				// else 
				// {
				// 	echo $_SESSION['feedback'] = "Erro ao enviar a mensagem!";

				// }
			
		}

		return $data;
	}
}
?>
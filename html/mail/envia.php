



<?php

$_SESSION['feedback'] = "mensagem";

if(!isset($_POST[Submit])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");

/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */

if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {

        $emailsender='contato@itacaresummerhouse.com.br';

} else {

        $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];

        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',

        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.

}

 

/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */

if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux

elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows

else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

 

// Passando os dados obtidos pelo formulário para as variáveis abaixo

$nomeremetente     = utf8_decode(@$_POST['nomeremetente']);

$emailremetente    = trim($_POST['emailremetente']);

$emaildestinatario = 'contato@itacaresummerhouse.com.br';

$comcopia = 'itacaresummerhouse@gmail.com';

$telefone          = utf8_decode(@$_POST['phone']);

$mensagem          = utf8_decode(@$_POST['mensagem']);

 

 

/* Montando a mensagem a ser enviada no corpo do e-mail. */

$mensagemHTML = '

<p><b>Nome: </b>'.$nomeremetente.'</p>

<p><b>Email: </b>'.$emailremetente.'</p>

<p><b>Telefone: </b>'.$telefone.'</p>

<p><b>Mensagem: </b><br>'.$mensagem.'</p>



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

if (mail($emaildestinatario, $telefone, $mensagemHTML, $headers, "-r". $emailsender);) {
	echo $_SESSION['feedback'];
}

 

/* Mostrando na tela as informações enviadas por e-mail */

// print "<p style='text-align:center'><img src='../img/obrigado.jpg'></p>

// <p style='text-align:center'>Mensagem Enviado Com Sucesso!</p>

// <p style='text-align:center'>Your Message Has Been Sent!</p>

// <p style='text-align:center'>We'll reply sooner.</p>



// "

?>
<?php
if (isset($_POST)) {
	$name = $_POST['inputName'];
	$email = $_POST['inputEmail'];
	$telefone = $_POST['inputTelefone'];
	$to = 'giovanni@ideaestudio.com.br'; 
	$subject = 'Formulário de contato - Grupo FKR';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: Formulário GrupoFKR <mtakuma@terra.com.br>' . "\r\n";
	$redirect = "http://hugny.com.br/sites/fkrlanding/";

	$body ="Novo formulário enviado por: <br><br>Nome: $name<br><br>E-Mail: $email<br><br> Telefone: $telefone";
	if (mail ($to, $subject, $body, $headers)) {
		echo "<script>alert('Obrigado por entrar em contato!');</script>";
	}
	if (mail ($to, $subject, $body, $headers)) {
		header("location:$redirect");	
	} else {
		echo "Não enviado";
	}
}
?>
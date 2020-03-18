<?php
//Variáveis

$subject = $_POST['subject'];
$nome = $_POST['nome'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$know = $_POST['know'];
$msg = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdana;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='0' cellpadding='1' cellspacing='1' bgcolor='#FFF'>
            <tr>
                <td>
                <h2>Ola, $nome entrou em contato pelo site!
                <tr>
                    <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                    <td width='320'>E-mail:<b>$email</b></td>
                </tr>
                <tr>
                    <td width='320'>Assunto:<b>$subject</b></td>
                </tr>
                <tr>
                    <td width='320'>Telefone:<b>$tel</b></td>
                </tr>
                <tr>
                    <td width='320'>Celular:<b>$cel</b></td>
                </tr>
                <tr>
                    <td width='320'>Como conheceu a Spa Jardim by Ronaldo Estetica:<b>$know</b></td>
                </tr>
                <tr>
                    <td width='320'>Mensagem:$msg</td>
                </tr>
                </td>
            </tr>  
            <tr>
                <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
            </tr>
        </table>
    </html>
  ";

//enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "contato@spajardim.com.br";
  $destino = $emailenviar;
  $assunto = "Atencao: Novo contato pelo site !!!";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= "From: $nome <$email>";
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='1;URL=index.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>
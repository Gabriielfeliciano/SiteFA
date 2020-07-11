<?php

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include "conn.php";
session_start();

$email = $_POST['email'];


    $query = "SELECT * FROM login WHERE indetificacao = '$email' ";
    $select_user_query = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($select_user_query)){
        
        $db_password = $row['senha'];

    }

    include "emailnaocadastrado.php";

if ($z != 1){

    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'mail.felicianoassociados.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@felicianoassociados.com';
        $mail->Password = '04171926@Biel';
        $mail->Port = 465;

        $mail->setFrom('contato@felicianoassociados.com');
        $mail->addAddress('testesitefa@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Recuperar Senha - FA';
        $mail->AddEmbeddedImage('../img/02.png', 'logo_ref');

        ob_start(); ?>

<body>
<center>

    <div style=" 
    @media (min-width:320px) and (max-width:1377px){
        border-style: solid;
        border-radius: 15px;
        width: 70%;
        height: 50%;
    }
    ">


    <div style="
    margin-top: 2%;
    height: 8%;
    width: 97%;
    background-color: rgba(48, 133, 223, 0.678);
    border-radius: 15px;
    ">

        
        <img src="cid:logo_ref" style="
        height: 10%;
        margin-top: 1.2%;
        ">

        <div style="
        font-size: 28px;
        margin-top: 4%;
        margin-left: 4%;
        ">

        RECUPERAÇÃO DE SENHA

        </div>

    </div>

    <br>

    <div style="
        margin-top: 2%;
        font-size: 17px;
    ">

        A senha da sua conta no site Feliciano Associados é <strong> <?=$db_password?></b> </strong>

        <br><br>

        Atenciosamente, <br>
        Feliciano Associados.

    </div>

    <br><br>

    <hr style="
        width: 95%;
    ">

    <br>

    <div style="
        font-size: 14px;
    ">

        <strong> CONTATO </strong> <br><br> 3109-0748 <br> <br>
        <strong> ENDEREÇO </strong> <br><br> Rua Pedro Borges 75, SALA 604  - Centro

    </div>

    <br><br>
    
    </div>

</center>
</body>

            <?php 
            $mensagem = ob_get_contents();
            ob_end_clean();

            $mail->Body = $mensagem;
            $mail->AltBody = 'Verifique sua senha';

            if($mail->send()) {
            } else {
                echo 'Email nao enviado';
            }
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }

        $_SESSION['msg'] = '<div class="ls-alert-success ls-dismissable">
        <span data-ls-module="dismiss" class="ls-dismiss" >&times;</span>
                    Sua senha foi enviada para seu email.
        </div>';
        header("Location: ../index.php");

}else {
    header("Location:../index.php");
}


?>
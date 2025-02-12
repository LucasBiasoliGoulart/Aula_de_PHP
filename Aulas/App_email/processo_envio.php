<?php
require './Bibliotecas/PHPMailer/Exception.php';
require './Bibliotecas/PHPMailer/OAuth.php';
require './Bibliotecas/PHPMailer/PHPMailer.php';
require './Bibliotecas/PHPMailer/POP3.php';
require './Bibliotecas/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {
    private $email = null;
    private $assunto = null;
    private $mensagem = null;
    public $status = array('codigo_status' => null, 'descricao_status' => '');

    public function __set($atributos, $valores) {
        $this->$atributos = $valores;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>App Email</title>
</head>
<body>
    <div class="navbar bg-light">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="./e-mail.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                App Email
            </div>
        </div>
    </div>
    <div style="width: 100%; height: 40vh; display: flex; align-items: center; justify-content: center;">
    <div class="card" style="width: 30%;">
        <div class="card-body">
            <h1 class="card-title text-success">Sucesso</h1>
            <p class="card-text text-success">E-mail enviado com seucesso!</p>
            <button class="btn btn-success">Voltar</button>
        </div>
    </div>
    </div>
</body>
</html>
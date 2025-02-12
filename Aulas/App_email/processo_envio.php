<?php
require './Bibliotecas/PHPMailer/Exception.php';
require './Bibliotecas/PHPMailer/OAuth.php';
require './Bibliotecas/PHPMailer/PHPMailer.php';
require './Bibliotecas/PHPMailer/POP3.php';
require './Bibliotecas/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {
    private $para = null;
    private $assunto = null;
    private $mensagem = null;
    public $status = array('codigo_status' => null, 'descricao_status' => '');

    public function __set($atributos, $valores) {
        $this->$atributos = $valores;
    }

    public function __get($atributos) {
        return $this->$atributos;
    }

    public function mensagemValida() {
        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
            return false;
        }
            return true;
    }
}

$mensagem = new Mensagem();
$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);

if(!$mensagem-> mensagemValida()) {
    header('Location: index.php');
}else {
    $email = new PHPMailer(true);

    try{
        // Server Setting
        $email->SMTDebug   = false;
        $email->isSMTP();
        $email->Host       = 'smtp.example.com';
        $email->SMTPAuth   = true;
        $email->Username   = 'user@example.com';
        $email->Password   = 'secret';
        $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $email->Port       = 465;

        // Reciptions
        $email->setForm('form@example.com', 'App_email');
        $email->addAdress($mensagem->__get('para'));

        // Content
        $email->isHTML(true);
        $email->Subject = $mensagem->__get('assunto')
        $email->Body    = $mensagem->__get('mensagem')
        $email->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteúdo desta mensagem!';

        $email->send();
        $mensagem->status['codigo_status'] = 1;
        $mensagem->status['descricao_status'] = 'E-mail enivado com sucesso!';
    }catch (Exception $e) {
        $mensagem->status['codigo_status'] = 2;
        $mensagem->status['descricao_status'] = 'Não foi possivel enviar este e-mail! Contate o Administrador! Detalhes do erro: ' . $email->ErrorInfo;
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
        <?php if ($mensagem->status['codigo_status'] == 1){ ?>
            <div class="card-body bg-success-subtle border-success-subtle">
                <h1 class="card-title text-success">Sucesso</h1>
                <p><?= $mensagem->status['descricao_status']; ?></p>
                <a href="./index.php" class="btn btn-success text-white">Voltar</a>
            </div>
        <?php } ?>
        <?php if ($mensagem->status['codigo_status'] == 1){ ?>
            <div class="card-body bg-danger-subtle border-success-subtle">
                <h1 class="card-title text-danger">Sucesso</h1>
                <p><?= $mensagem->status['descricao_status']; ?></p>
                <a href="./index.php" class="btn btn-danger text-white">Voltar</a>
            </div>
        <?php } ?>
    </div>
    </div>
</body>
</html>
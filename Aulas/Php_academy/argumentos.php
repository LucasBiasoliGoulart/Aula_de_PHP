<?php
// Argumentos Nomeados
function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
    echo "Assunto: $assunto\n";
    echo "<br>";
    echo "Destinatarios: $destinatarios\n";
    echo "<br>";
    echo "Mensagem: $mensagem\n";
}

// Chamada da função do parâmetros
sendEmail(
    "example@test.com", // Destinatarios
    "", // CC
    "Argumentos Nomeados", // Assunto
    "Descubra mais sobre a featura!" // Mensagem
)
?>
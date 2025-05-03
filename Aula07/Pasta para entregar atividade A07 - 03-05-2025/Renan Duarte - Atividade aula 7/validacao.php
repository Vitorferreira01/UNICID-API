<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Captura os dados enviados
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $data_visita = $_POST['data_visita'] ?? '';
    $numero_pessoas = $_POST['numero_pessoas'] ?? '';
    $selecao = $_POST['selecao'] ?? '';
    $aceite = $_POST['aceite'] ?? '';

    // Verifica se aceitou os termos
    if ($aceite !== 's') {
        echo "<h2>Você precisa aceitar os termos para prosseguir com o agendamento.</h2>";
        exit;
    }

    // Exibe os dados recebidos
    echo "<h1>Agendamento Recebido</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data da visita:</strong> $data_visita</p>";
    echo "<p><strong>Número de pessoas:</strong> $numero_pessoas</p>";
    echo "<p><strong>Atração escolhida:</strong> $selecao</p>";
    echo "<p><strong>Termos aceitos:</strong> Sim</p>";

} else {
    // Caso o arquivo seja acessado diretamente, sem formulário
    echo "<h2>Acesso inválido. Por favor, envie o formulário.</h2>";
}
?>

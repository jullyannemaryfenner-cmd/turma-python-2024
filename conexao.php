<?php
// Atualize estas variáveis com as credenciais do seu banco de dados
$host = '127.0.0.1';
$db   = 'llsecurity';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . htmlspecialchars($e->getMessage());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $dataNascimento = $_POST['data_nascimento'] ?? '';
    $endereco = trim($_POST['endereco'] ?? '');

    if ($nome === '' || $email === '' || $dataNascimento === '' || $endereco === '') {
        echo 'Por favor, preencha todos os campos.';
        exit;
    }

    // Ajuste o nome da tabela `candidatos` conforme seu esquema de banco
    $sql = 'INSERT INTO candidatos (nome, email, data_nascimento, endereco) VALUES (:nome, :email, :data_nascimento, :endereco)';
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':data_nascimento' => $dataNascimento,
            ':endereco' => $endereco,
        ]);
    } catch (PDOException $e) {
        echo 'Erro ao salvar: ' . htmlspecialchars($e->getMessage());
        exit;
    }

    echo '<p>Cadastro enviado com sucesso! Obrigado por se candidatar.</p>';
    echo '<p><a href="trabalheconosco.html">Voltar</a></p>';
    exit;
}

echo '<p>Nenhum formulário enviado.</p>';

?>

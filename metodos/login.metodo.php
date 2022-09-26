<?php

require_once('conn.php');

$username = filter_var($_POST['username']);
$email = filter_var($_POST['email']);
$password = filter_var($_POST['password']);

$sql = 'SELECT * FROM usuarios WHERE username=:username and email=:email and senha=:password';
$result = $conn->prepare($sql);
$result->execute(['username' => $username, 'email' => $email, 'password' => $password]);
$user = $result->fetch();

if(!empty($user)) {
    session_start();

    $_SESSION['id'] = $user['idUsers'];
    $_SESSION['name'] = $user['username'];
    $_SESSION['email'] = $user['email'];

    header('Location: ../index.php');
} else {
    echo 'Usuário não cadastrado! <a href="logout.php"><button>Sair</button></a>';
}

?>
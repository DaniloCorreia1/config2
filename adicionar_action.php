<?php

require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$senha = filter_input(INPUT_POST, 'senha');
$namemae = filter_input(INPUT_POST, 'namemae');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if ($name && $senha && $namemae && $email) {

    $sql = $pdo->prepare("INSERT INTO usuarios (name, senha, namemae, email) VALUES (:name, :senha, :namemae,  :email)");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':namemae', $namemae);
    $sql->bindParam(':email', $email);
    $sql->execute();

    header("Location: index.php");
    exit;

} else {
    header("Location: adicionar.php");
    exit;
}
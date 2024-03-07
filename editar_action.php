<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$senha = filter_input(INPUT_POST, 'senha');
$namemae = filter_input(INPUT_POST, 'namemae');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $senha && $namemae && $email) {

    $sql = $pdo->prepare("UPDATE usuarios SET name = :name, senha = :senha, namemae = :namemae, email = :email WHERE id = :id");

    $sql->bindValue(':name', $name);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':namemae', $namemae);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;

} else {
    header("Location: adicionar.php");
    exit;
}

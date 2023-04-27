<?php
include_once "../database/config.php";

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);

if (isset(($nome)) && ($email) && ($numero)) {

    $query = $db->prepare("SELECT * FROM tbl_people WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $linha = $query->rowCount();

    if ($linha === 1) {
        header("Location: ../templates/insert_template.php");
    } else {
        $query = $db->prepare("INSERT INTO tbl_people (nome,email,telefone) VALUES (:nome, :email, :numero)");
        $query->bindValue(":nome", $nome);
        $query->bindValue(":email", $email);
        $query->bindValue(":numero", $numero);
        $query->execute();
        header("Location: ../index.php"); 
    }
} else {
    header("Location: ../templates/insert_template.php");
}
<?php
    include_once "../database/config.php";

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    
    $query = $db->prepare("UPDATE tbl_people SET 
            nome = :nome, 
            email = :email, 
            telefone = :numero WHERE id = :id");
    $query->bindValue(":nome", $nome);
    $query->bindValue(":email",$email);
    $query->bindValue(":numero",$numero);
    $query->bindValue(":id", $id);
    if ($query->execute()){
        header("Location: ../index.php");
    }

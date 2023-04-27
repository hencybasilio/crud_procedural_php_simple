<?php
    include_once "../database/config.php";

    $id = filter_input(INPUT_GET, 'id');

    if ($id){
        $query = $db->prepare("SELECT * FROM tbl_people WHERE id = :id");
        $query->bindValue(":id",$id);
        $query->execute();
        $linha = $query->rowCount();
        if ($linha === 1){
            $query = $db->prepare("DELETE FROM tbl_people WHERE id = :id");
            $query->bindValue(":id", $id);
            $query->execute();
            header("Location: ../index.php");
        } else {
            header("Location: ../index.php");
        }

    }

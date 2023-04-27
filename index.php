<?php
    include_once "database/config.php";
    $lista = [];
    $query = $db->prepare("SELECT * FROM tbl_people ORDER BY nome ASC");
    $query->execute();

    $lista = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <a href="templates/insert_template.php" class="btn">ADICIONAR DADOS</a>
    <h2>MOSTRANDO DADOS</h2>
    <table border="1" width="50%">
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Operações</td>
        </tr>
            <?php foreach($lista as $dado):?>
        <tr>
            <td><?=$dado['nome']?></td>
            <td><?=$dado['email']?></td>
            <td><?=$dado['telefone']?></td>
            <td>
                <a class="btn-edit" href="templates/update_template.php?id=<?=$dado['id']?>">EDITAR</a> -|-
                <a class="btn-delet" href="operations/delete_operation.php?id=<?=$dado['id']?>">ELIMINAR</a>
            </td>
        </tr>
            <?php endforeach;?>
    </table>
</body>
</html>
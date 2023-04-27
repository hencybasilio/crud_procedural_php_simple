<?php
    include_once "../database/config.php";
    $dado = [];
    $id = filter_input(INPUT_GET, 'id');

    if ($id){
        $query = $db->prepare("SELECT * FROM tbl_people WHERE id = :id");
        $query->bindValue(":id",$id);
        $query->execute();
        $linha = $query->rowCount();
        
        if ($linha === 0){
            header("Location: error.php?noid=true");
        } else {
            $dado = $query->fetch();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PAGE</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <a href="../index.php" class="btn">VOLTAR</a>
    <form action="../operations/update_operaction.php" method="POST">

        <input type="hidden" name="id" value="<?=$dado['id'];?>">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="<?=$dado['nome'];?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?=$dado['email'];?>"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="number" name="numero" value="<?=$dado['telefone'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ACTUALIZAR"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>
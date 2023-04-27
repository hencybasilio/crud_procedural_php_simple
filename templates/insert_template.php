<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT PAGE</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <a href="../index.php" class="btn">VOLTAR</a>
    <h2>INSERIR DADOS</h2>
    <form action="../operations/insert_operation.php" method="post">
        <table>
            <tr>
                <td>Nome:</td>
                <td>
                    <input type="text" name="nome">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>Número de Telefone:</td>
                <td>
                    <input type="number" name="numero">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>
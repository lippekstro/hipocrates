<?php require_once "processar.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="processar.php">
        <table>
            <tr>
                <td><input type="checkbox" name="opcao[]" value="Auditivas"></td>
                <td>Auditivas</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="opcao[]" value="Locomotoras"></td>
                <td>Locomotoras</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="opcao[]" value="Visuais"></td>
                <td>Visuais</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="opcao[]" value="Outros"></td>
                <td>Outros</td>
            </tr>
        </table>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>
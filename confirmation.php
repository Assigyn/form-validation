<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <table>
        <tr>
            <th>Récapitulatif</th>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><?php echo $_SESSION['name']; ?></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><?php echo $_SESSION['email']; ?></td>
        </tr>
        <tr>
            <td>Tel :</td>
            <td><?php echo $_SESSION['phone']; ?></td>
        </tr>
        <tr>
            <td>Sujet :</td>
            <td><?php echo $_SESSION['select']; ?></td>
        </tr>
        <tr>
            <td>Message :</td>
            <td><?php echo $_SESSION['message']; ?></td>
        </tr>

    </table>


</body>
</html>

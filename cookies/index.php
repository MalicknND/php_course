<?php
// les cookies permettent de stocker des informations sur le navigateur de l'utilisateur 
// les cookies sont modifiables par l'utilisateur 
// les cookies et les sessions doivent d'être déclarer avant le doctype
if (!empty($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];

    setcookie('pseudo', $pseudo, time() + 365 * 24 * 3600, null, null, false, true);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Entrer votre pseudo</h1>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>pseudo</td>
                <td><input type="text" name="pseudo"></td>
            </tr>

        </table>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (!empty($_COOKIE['pseudo'])) {
        echo '<h2>Bonjour ' . htmlspecialchars($_COOKIE['pseudo']) . '</h2>';
    }
    ?>

</body>

</html>
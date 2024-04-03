<?php
//  les sessions permettent de stocker des informations sur le serveur 
// id unique pour chaque session (phpsessionid)
// les sessions ne sont pas modifiables par l'utilisateur 

session_start(); // permet de démarrer la session
if (!empty($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];

    $_SESSION['pseudo'] = $pseudo;
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
    if (!empty($_SESSION['pseudo'])) {
        echo '<h2>Bonjour ' . htmlspecialchars($_SESSION['pseudo']) . '</h2>';
    }
    ?>
</body>

</html>
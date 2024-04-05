<!-- connection à ma table 
mysq


-->

<?php

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=formation_users;charset=utf8', 'root', '');
    // echo "Connexion à la base réussie !";
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

/* ajouter un user
$req = $bdd->exec('INSERT INTO users (firstname, lastname, fav_serie) VALUES ("John", "Doe", "Breaking Bad")'); */

/* Modifier un user
$req = $bdd->exec('UPDATE users SET firstname = "John", lastname = "Doe", fav_serie = "Breaking Bad" WHERE id = 1');*/

/* Supprimer un user
$req = $bdd->exec('DELETE FROM users WHERE id = 1') or die(print_r($bdd->errorInfo()));*/

/* ajouter un métier d'un user
$req = $bdd->exec('INSERT INTO jobs (id_user, job) VALUES (6, "UX Designer")');*/

// On récupère tout le contenu de la table users
// jointures

// $req = $bdd->query('SELECT firstname, lastname, fav_serie, job 
//                     FROM users, jobs 
//                     WHERE users.id = jobs.id_user');

$req = $bdd->query('SELECT firstname, lastname, fav_serie
                    FROM users
                  ');


// Ajouter un user avec la requête POST
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['fav_serie'])) {
    // on déclare les variables pour les récupérer
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fav_serie = $_POST['fav_serie'];

    $req = $bdd->prepare('INSERT INTO users (firstname, lastname, fav_serie) VALUES (?, ?, ?)') or die(print_r($bdd->errorInfo()));
    $req->execute(array($firstname, $lastname, $fav_serie));
    // Redirection du visiteur vers la page d'accueil
    header('Location: index.php');
}

echo '<table border>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Fav_serie</th>';
while ($data = $req->fetch()) {
    echo '<tr>';
    echo '<td>' . $data['firstname'] . '</td>';
    echo '<td>' . $data['lastname'] . '</td>';
    echo '<td>' . $data['fav_serie'] . '</td>';
    echo '</tr>';
}

$req->closeCursor(); // Termine le traitement de la requête

echo '</table>';




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>

<body>
    <h1>Ajouter un user</h1>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Firstname</td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td>Fav_serie</td>
                <td><input type="text" name="fav_serie"></td>
            </tr>
        </table>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
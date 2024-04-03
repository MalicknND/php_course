<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <?php
    // if (isset($_POST['submit'])) {
    //     // permet de sécuriser les données
    //     $prenom = htmlspecialchars($_POST['prenom']);
    //     $nom = htmlspecialchars($_POST['nom']);


    //     echo 'Bonjour ' . $prenom . ' ' . $nom . ' !';
    // }

    // echo '<form method="post" action="form.php">
    // <p>
    //     <table>
    //         <tr>
    //             <td>Prénom</td>
    //             <td><input type="text" name="prenom"></td>
    //         </tr>
    //         <tr>
    //             <td>nom</td>
    //             <td><input type="text" name="nom"></td>
    //         </tr>

    //     </table>
    //     <button type="submit" name="submit">Envoyer</button>
    // </p>

    // </form>';


    //  envoyer un fichier
    $_FILES['image']['name'];
    $_FILES['image']['type'];
    $_FILES['image']['size'];
    $_FILES['image']['tmp_name'];
    $_FILES['image']['error'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // vérifier la taille du fichier
        if ($_FILES['image']['size'] <= 3000000) {
            // vérifier l'extension du fichier
            $infosImage = pathinfo($_FILES['image']['name']);
            // on déclare un tableau contenant les extensions autorisées
            $extensionImage = $infosImage['extension'];
            // on déclare un tableau contenant les extensions autorisées
            $extensionsArray = array('jpg', 'jpeg', 'gif', 'png');
            // 
            if (in_array($extensionImage, $extensionsArray)) {
                // on déplace le fichier
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . time() . rand() . basename($_FILES['image']['name']));
                echo 'L\'envoi a bien été effectué !';
            }
        }
    }

    echo '<form method="post" action="form.php" enctype="multipart/form-data">
    <p>
        <h1>Formulaires</h1>
        <input type="file" name="image" /> <br />
        <button type="submit" name="submit">Envoyer</button>
    </p>
    
    </form>';


    ?>

</body>

</html>
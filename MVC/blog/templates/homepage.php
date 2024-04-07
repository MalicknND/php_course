<?php
// Définir le titre du blog
$title = "Le blog de l'AVBN";

// Démarrer la mise en tampon de sortie
ob_start();
?>

<h1>Le super blog de l'AVBN !</h1>
<p>Derniers billets du blog :</p>

<?php
// Parcourir chaque article et afficher ses informations
foreach ($posts as $post) {
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']); ?>
            <em>le <?= $post['french_creation_date']; ?></em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($post['content'])); ?>
            <br />
            <em><a href="index.php?action=post&id=<?= urlencode($post['identifier']) ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
?>

<?php
// Récupérer le contenu de la mise en tampon de sortie et le nettoyer
$content = ob_get_clean();

// Inclure le fichier de mise en page
require('layout.php');
?>
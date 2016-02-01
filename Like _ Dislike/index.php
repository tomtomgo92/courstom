<?php
require "_db.php";
require "_header.php";

$req = $pdo->query('SELECT * FROM articles');
?>

<div class="row">
<?php foreach($req->fetchAll() as $post): ?>

    <div class="col-sm-12 col-md-6">
        <article>
            <h1><?= $post->titre; ?></h1>
            <p><?= $post->contenu ?></p>
            <p>
                <a href="single.php?id=<?= $post->id; ?>">Lire la suite</a>
            </p>
        </article>
    </div>

<?php endforeach; ?>
</div>


<?php
require "_footer.php";
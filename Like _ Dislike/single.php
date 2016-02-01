<?php
require "_db.php";
require "_header.php";
require "class/Vote.php";

$vote = false;
if(isset($_SESSION['user_id'])){
    $req = $pdo->prepare('SELECT * FROM votes WHERE ref = ? AND ref_id = ? AND user_id = ?');
    $req->execute(['articles', $_GET['id'], $_SESSION['user_id']]);
    $vote = $req->fetch();
}

$req = $pdo->prepare('SELECT * FROM articles WHERE id = ?');
$req->execute([$_GET['id']]);
$post = $req->fetch();
    ?>

    <article>
        <h1><?= $post->titre; ?></h1>
        <p><?= $post->contenu ?></p>
    </article>

    <?php if($post->id == 9): ?>
    <div class="vote <?= Vote::getClass($vote); ?>" id="vote" data-ref="articles" data-ref_id="<?= $post->id ?>" data-user_id="<?= isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
        <div class="vote_bar">
            <div class="vote_progress" style="width:<?= ($post->like_count + $post->dislike_count) == 0 ? 100 : round(100 * ($post->like_count / ($post->like_count + $post->dislike_count))); ?>%;"></div>
        </div>
        <div class="vote_loading">
            Chargement...
        </div>
        <div class="vote_btns">
            <button class="vote_btn vote_like"><i class="fa fa-thumbs-up"></i> <span id="like_count"><?= $post->like_count ?></span></button>
            <button class="vote_btn vote_dislike"><i class="fa fa-thumbs-down"></i> <span id="dislike_count"><?= $post->dislike_count ?></span></button>
        </div>
    </div>

    <?php else: ?>

    <div class="vote is-score<?= round($post->score); ?>" id="vote" data-ref="articles" data-ref_id="<?= $post->id ?>" data-user_id="<?= isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
        <div class="vote_stars">
            <span class="vote_star vote_star1" data-score="1"></span>
            <span class="vote_star vote_star2" data-score="2"></span>
            <span class="vote_star vote_star3" data-score="3"></span>
            <span class="vote_star vote_star4" data-score="4"></span>
            <span class="vote_star vote_star5" data-score="5"></span>
        </div>
        <div class="vote_loading">Chargement...</div>
    </div>

    <?php endif; ?>

<?php
require "_footer.php";
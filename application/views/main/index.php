<?
/**
 * @var $news array
 */
?>
<p>Главная страница</p>
<?= '<a href="\application\views\account\login.php">test</a>'; ?>
<?php foreach ($news as $val): ?>
    <h3><?= $val['title']; ?></h3>
    <p><?= $val['description']; ?></p>
    <hr>
<?php endforeach; ?>
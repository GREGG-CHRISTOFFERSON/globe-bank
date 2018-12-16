<?php require_once '../../../private/initialize.php'; ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

?>

<?php $page_title = "Show Subject"; ?>
<?php include SHARED_PATH .'/staff_header.php'; ?>

<div id="content">
    <a class="back-link" href="<?= url_for('/staff/subjects/index.php');?>">&laquo; Back to List</a>

    <div class="subject show">
        Subject ID: <?= h($id); ?>
    </div>
</div>

<?php include SHARED_PATH . '/staff_footer.php'; ?>

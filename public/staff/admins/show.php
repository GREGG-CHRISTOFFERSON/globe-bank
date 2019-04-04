<?php require_once '../../../private/initialize.php'; ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$admin = find_admin_by_id($id);

?>
<?php $page_title = 'Show Admin'; ?>
<?php include SHARED_PATH . '/staff_header.php'; ?>
<div id="content">
    <a class="back-link" href="<?= url_for('/staff/admins/index.php'); ?>">&laquo; Back to List</a>
    <div class="page show">
        <h1>Admin: <?= h($admin['first_name']) ?? h($admin['username']); ?> <?php if ($admin['first_name']) { echo $admin['last_name'] ?? '';} ?></h1>
        <div class="attributes">
            <dl>
                <dt>Email</dt>
                <dd><?= h($admin['email']); ?></dd>
            </dl>
            <dl>
                <dt>Username</dt>
                <dd><?= h($admin['username']); ?></dd>
            </dl>
        </div>
    </div>
</div>


<?php include SHARED_PATH . '/staff_footer.php'; ?>

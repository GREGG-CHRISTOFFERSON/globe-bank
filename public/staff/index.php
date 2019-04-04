<?php require_once '../../private/initialize.php'; ?>

<?php require_login(); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include SHARED_PATH . '/staff_header.php'; ?>
<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?= url_for('/staff/subjects/index.php'); ?>"/>Subjects</li>
            <li><a href="<?= url_for('/staff/pages/index.php'); ?>"/>Pages</li>
            <li><a href="<?= url_for('/staff/admins/index.php'); ?>"/>Admins</li>
        </ul>
    </div>
</div>
<?php include SHARED_PATH . '/staff_footer.php'; ?>

<?php

require_once '../../../private/initialize.php';

require_login();

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/admins/index.php'));
}

$id = $_GET['id'];

if(is_post_request()) {
    $result = delete_admin($id);

    // store message
    $messages[] = "The admin user was deleted successfully";
    $_SESSION['messages'] = $messages;

    redirect_to(url_for('/staff/admins/index.php'));
} else {
    $admin = find_admin_by_id($id);
}

?>

<?php $page_title = 'Delete Admin User'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <a class="back-link" href="<?= url_for('/staff/admins/index.php'); ?>">&laquo; Back to List</a>

    <div class="page delete">
        <h1>Delete Admin User</h1>
        <p>Are you sure you want to delete this admin user?</p>
        <p class="item"><?= h($admin['first_name']) ?? h($admin['username']); ?> <?php if ($admin['first_name']) { echo $admin['last_name'] ?? '';} ?></p>

        <form action="<?= url_for('/staff/admins/delete.php?id=' . h(u($admin['id']))); ?>" method="post">
            <div id="operations">
                <input type="submit" name="commit" value="Delete Admin User" />
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>






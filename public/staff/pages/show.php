<?php require_once '../../../private/initialize.php'; ?>

<?php
    require_login();
    $id = $_GET['id'] ?? '1'; // PHP > 7.0
    $page = find_page_by_id($id);
    $subject = find_subject_by_id($page['subject_id']);
?>
<?php $page_title = 'Show Page'; ?>
<?php include SHARED_PATH . '/staff_header.php'; ?>
<div id="content">
    <a class="back-link" href="<?= url_for('/staff/subjects/show.php?id=' . h(u($subject['id']))); ?>">&laquo; Back to Subject Page</a>
    <div class="page show">
      <h1>Page: <?= h($page['menu_name']); ?></h1>

        <div class="actions">
            <a class="action" href="<?php echo url_for('/index.php?id=' . h(u($page['id'])) . '&preview=true'); ?>" target="_blank">Preview</a>
        </div>
      <div class="attributes">
        <dl>
          <dt>Subject</dt>
          <dd><?= h($subject['menu_name']); ?></dd>
        </dl>
        <dl>
          <dt>Menu Name</dt>
          <dd><?= h($page['menu_name']); ?></dd>
        </dl>
        <dl>
          <dt>Position</dt>
          <dd><?= h($page['position']); ?></dd>
        </dl>
        <dl>
          <dt>Visible</dt>
          <dd><?= h($page['visible']); ?></dd>
        </dl>
        <dl>
          <dt>Content</dt>
          <dd><?= h($page['content']); ?></dd>
        </dl>
      </div>
    </div>
</div>


<?php include SHARED_PATH . '/staff_footer.php'; ?>

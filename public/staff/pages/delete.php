<?php

require_once '../../../private/initialize.php';

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
}

$id = $_GET['id'];

if(is_post_request()) {
   $result = delete_page($id);
   redirect_to(url_for('/staff/pages/index.php'));
} else {
  $page = find_page_by_id($id);
}

?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

    <div class="subject edit">
        <h1>Edit Page</h1>

        <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
          <dl>
            <dt>Subject</dt>
            <dd>
              <select name="subject_id">
                  <?php
                  $subject_set = find_all_subjects();
                  while ($subject = mysqli_fetch_assoc($subject_set)) {
                      echo "<option value=\"" . h($subject['id']) . "\"";
                      if ($page['subject_id'] == $subject['id']) {
                          echo " selected";
                      }
                      echo ">" . h($subject['menu_name']) . "</option>";
                  }
                  mysqli_free_result($subject_set);
                  ?>
              </select>
            </dd>
          </dl>
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?= h($page['menu_name']); ?>" /></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                  <select name="position">
                      <?php
                      for ($i=1; $i <= $page_count; $i++) {
                          echo "<option value=\"{$i}\"";
                          if ($page["position"] == $i) {
                              echo " selected";
                          }
                          echo ">{$i}</option>";
                      }
                      ?>
                  </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1"<?php if ($page['visible'] == "1") {
                        echo " checked";
                    } ?>/>
                </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Edit Subject" />
            </div>
        </form>

    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>






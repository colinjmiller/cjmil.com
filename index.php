<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Home") ?>
  <?= View::navigation_bar("Home") ?>
    <div class="container">
      <img class="main-img u-light-margin" src="images/colin.jpg" alt="Picture of Colin Miller" />
      <div class="content-column">
        <h1><?= t('home_hi') ?></h1>
        <p>
          <?= t('home_about_me') ?>
        </p>
      </div>
    </div>
<?= View::footer_logic() ?>
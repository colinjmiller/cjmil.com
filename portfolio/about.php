<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Tech | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <a href="index.php"><?= t('back') ?></a>
      <h1><?= t('cool_tech_title') ?></h1>
      <p><?= t('cool_tech_intro') ?></p>
      <h2><?= t('mobile_first_title') ?></h2>
      <p><?= t('mobile_first_description') ?></p>
      <h2><?= t('sharp_images_title') ?></h2>
      <p><?= t('sharp_images_description') ?></p>
      <h2><?= t('translation_title') ?></h2>
      <p><?= t('translation_description') ?></p>
    </div>
<?= View::footer_logic() ?>
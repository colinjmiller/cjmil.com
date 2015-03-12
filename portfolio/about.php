<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Tech | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <a href="index.php"><?= t('back') ?></a>
      <h2><?= t('cool_tech_title') ?></h2>
      <p><?= t('cool_tech_intro') ?></p>
      <h3><?= t('mobile_first_title') ?></h3>
      <p><?= t('mobile_first_description') ?></p>
      <h3><?= t('sharp_images_title') ?></h3>
      <p><?= t('sharp_images_description') ?></p>
      <h3><?= t('translation_title') ?></h3>
      <p><?= t('translation_description') ?></p>
    </div>
<?= View::footer_logic() ?>
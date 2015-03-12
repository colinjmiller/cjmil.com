<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Freshman Year | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <a href=".."><?= t('back') ?></a>
      <h2><?= t('freshman_year') ?></h2>
      <p>
        <?= t('freshman_year_summary') ?>
      </p>
      <section>
        <h3><?= t('freshman_autumn') ?></h3>
        <div class="klass">
          <?php include_once ('soc247.php') ?>
        </div>
      </section>
      <section>
        <h3><?= t('freshman_winter') ?></h3>
        <div class="klass">
          <?php include_once ('cse142.php') ?>
        </div>
      </section>
      <section>
        <h3><?= t('freshman_spring') ?></h3>
        <div class="klass">
          <?php include_once ('math126.php') ?>
        </div>
      </section>
    </div>
<?= View::footer_logic() ?>
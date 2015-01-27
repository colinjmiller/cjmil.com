<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Senior Year | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <a href="..">Back</a>
      <h2>Senior Year</h2>
      <p>
        Senior Year Summation
      </p>
      <section>
        <h3>Autumn Quarter, 2014</h3>
        <div class="klass">
          <?php include_once ('honors230a.php') ?>
        </div>
      </section>
    </div>
<?= View::footer_logic() ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Senior Year | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <a href=".."><?= t('back') ?></a>
      <h1>Senior Year</h1>
      <p>
        My senior year is still in progress, but I am excited to finish my undergraduate life and move into the real world. I am fortunate that my passion, computer science, afforded me a great job right out of school and am excited to make an impact as a software engineer at Whitepages. As I move from academia to industry, I will keep my mind open.
      </p>
      <section>
        <h2>Autumn Quarter, 2014</h2>
        <div class="klass">
          <?php include_once ('honors230a.php') ?>
        </div>
      </section>
    </div>
<?= View::footer_logic(false) ?>
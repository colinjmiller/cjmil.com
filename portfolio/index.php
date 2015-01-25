<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <nav class="row">
        <ul>
          <li class="three columns">
            <a href="./freshman/">Freshman Year</a>
          </li>
          <li class="three columns">
            <a href="#">Sophomore Year</a>
          </li>
          <li class="three columns">
            <a href="#">Junior Year</a>
          </li>
          <li class="three columns">
            <a href="#">Senior Year</a>
          </li>
        </ul>
      </nav>
      <h2><?= t('portfolio_statement_title') ?></h2>
      <p>
        <code>
          public final boolean LEARNING = true;
        </code>
      </p>
      <p>
        <?= t('portfolio_p1') ?>
      </p>
      <p>
        <?= t('portfolio_p2') ?>
      </p>
      <img id="learning-img" src="/portfolio/areas.svg" alt="Areas of learning as I get older" />
      <p>
        <?= t('portfolio_p3') ?>
      </p>
      <p>
        <?= t('portfolio_p4') ?>
      </p>
      <p>
        <?= t('portfolio_p5') ?>
      </p>
      <p>
        <?= t('portfolio_p6') ?>
      </p>
    </div>
<?= View::footer_logic() ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <nav class="row">
        <span><?= t('portfolio_navigation') ?></span>
        <ul>
          <li class="two columns">
            <a href="./freshman/"><?= t('freshman') ?></a>
          </li>
          <li class="two columns">
            <a href="./sophomore/"><?= t('sophomore') ?></a>
          </li>
          <li class="two columns">
            <a href="./junior/"><?= t('junior') ?></a>
          </li>
          <li class="two columns">
            <a href="./senior/"><?= t('senior') ?></a>
          </li>
          <li class="two columns">
            <a href="./experiential/"><?= t('experiential_learning') ?></a>
          </li>
          <li class="two columns">
            <a href="./about.php"><?= t('cool_tech') ?></a>
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
    </div>
<?= View::footer_logic() ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Experiential Learning | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <a href="..">Back</a>
      <h1>Experiential Learning</h1>
      <p>
        In this portfolio, I use the term <em>Experiential Learning</em> to mean something that has contributed significantly to defining who I am as a person while in college.
        Therefore, I have artifacts on this page that were not submitted to the Honors College as an official experiential learning experience.
        However, they were important enough to me that they made this list.
      </p>
      <section>
        <h2>TAing for introductory CSE classes</h2>
        <div class="klass">
          <?php include_once ('ta.php') ?>
        </div>
      </section>
      <section>
        <h2>German</h2>
        <div class="klass">
          <?php include_once ('german.php') ?>
        </div>
      </section>
      <h2>
    </div>
<?= View::footer_logic(false) ?>
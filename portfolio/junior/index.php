<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Junior Year | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container">
      <a href="..">Back</a>
      <h2>Junior Year</h2>
      <p>
        My junior year was the most intense year of academics that I have ever experienced. I took a total of six CSE classes this year and formed a great friend group around the difficulties and struggles we faced. I faced my greatest struggle in the Spring: 12 credits of straight CSE along with a part-time gig as 154 TA and TA Tools Developer. During this time, I suffered from serious sleep deprivation, constant stress, and the emotional trauma of thinking I was failing my teammates. By my standards, I do not emote often, but this quarter was the first time I became truly frustrated and upset with myself.
      </p>
      <section>
        <h3>Autumn Quarter, 2013</h3>
        <div class="klass">
          <?php include_once ('cse332.php') ?>
        </div>
      </section>
      <section>
        <h3>Winter Quarter, 2014</h3>
        <div class="klass">
          <?php include_once ('german322.php') ?>
        </div>
      </section>
      <section>
        <h3>Spring Quarter, 2014</h3>
        <div class="klass">
          <?php include_once ('cse.php') ?>
        </div>
      </section>
    </div>
<?= View::footer_logic() ?>
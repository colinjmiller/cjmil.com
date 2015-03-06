<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Sophomore Year | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container">
      <a href="..">Back</a>
      <h2>Sophomore Year</h2>
      <p>
        After living with over 100 friends on the Honors floor of Lander 8, it was hard to move to another dorm. However, fears of loneliness subsided when the year began; I roomed with one of my closest
        friends, Nick Reiter. We became especially close this year and still are to this day. Class-wise, sophomore year was academically disappointing, yielding the lowest grades I have ever
        received. However, I also began TAing introductory CSE courses this quarter and consider this one of the best decisions of my life at UW. Overall, the year was filled with ups and down and helped
        me become who I am today.
      </p>
      <section>
        <h3>Autumn Quarter, 2012</h3>
        <div class="klass">
          <?php include_once ('phys121.php') ?>
        </div>
      </section>
      <section>
        <h3>Winter Quarter, 2013</h3>
        <div class="klass">
          <?php include_once ('cse331.php') ?>
        </div>
      </section>
      <section>
        <h3>Spring Quarter, 2013</h3>
        <div class="klass">
          <?php include_once ('german250.php') ?>
        </div>
      </section>
    </div>
<?= View::footer_logic() ?>
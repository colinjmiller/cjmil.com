<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Freshman Year | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container">
      <a href="..">Back</a>
      <h2>Freshman Year</h2>
      <p>
        Coming across the country from Virginia, the beginning of a new school and new life excited me. I had a limited selection of classes due to taking the last available orientation session,
        but thorougly enjoyed Dawg Daze and made hundreds of new friends. This was a year of many firsts for me: First girlfriend, first sip of alcohol, and first slap in the face as I realized
        that grades in college were much harder to maintain than high school. From each quarter, I have picked a class that I felt impacted me in some way.
      </p>
      <div class="quarter">
        <h3>Autumn Quarter, 2011</h3>
        <div class="klass">
          <?php include_once ('soc247.php') ?>
        </div>
      </div>
      <div class="quarter">
        <h3>Winter Quarter, 2012</h3>
        <div class="klass">
          <?php include_once ('cse142.php') ?>
        </div>
      </div>
      <div class="quarter">
        <h3>Spring Quarter, 2012</h3>
        <div class="klass">
          <?php include_once ('math126.php') ?>
        </div>
      </div>
    </div>
<?= View::footer_logic() ?>
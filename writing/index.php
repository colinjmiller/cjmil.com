<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Writing") ?>
  <?= View::navigation_bar("Writing") ?>
    <div class="container">
      <h1>Writing</h1>
      <p>
        In my spare time, I like to write things. Here are some of those things:
      </p>
      <dl>
        <dt><a href="sage/">Sage Advice</a></dt>
        <dd>
          Sage Advice is a column I write about various things in computer science.
        </dd>
      </dl>
      <dl>
        <dt><a href="german/">The Rise of Fascism in Germany</a></dt>
        <dd>
          For around a decade before World War II, fascism rose in popularity and eventually dominated Germany's political thought. Join me as I go through the years during this rise, examining the popular thought, literature, and art of the period.
        </dd>
      </dl>
      <dl>
        <dt><a href="/resume.pdf">R&eacute;sum&eacute;</a></dt>
        <dd>
          R&eacute;sum&eacute;
        </dd>
      </dl>
    </div>
<?= View::footer_logic(false) ?>
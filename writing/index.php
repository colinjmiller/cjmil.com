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
          Join me as I explore the rise of fascism in Germany, examining the reasons behind it, why it was allowed to happen, and what people of the time thought about it.
        </dd>
      </dl>
    </div>
<?= View::footer_logic(false) ?>
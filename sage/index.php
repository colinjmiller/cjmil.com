<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Home") ?>
  <?= View::navigation_bar("Home") ?>
    <div class="container">
      <img class="main-img u-light-margin" src="/images/sage/sage_wave.svg" alt="Sage Waving" />
      <h1>Sage Advice</h1>
      <p>
        Hi there, I'm Sage!
      </p>
    </div>
<?= View::footer_logic() ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("CSS Colors | Writing") ?>
  <?= View::navigation_bar("Writing") ?>
    <section class="container">
      <h1>CSS Colors</h1>
      <figure style="margin: 0;">
        <img src="/images/sage/comics/css-colors/cssColorsComic.png" title="Just pick one and stick with it. Except named colors. Never use that." / alt="CSS Colors come in many flavors; just one use." style="width: 100%; max-width: 800px;" />
        <figcaption>Just pick one and stick with it. Except named colors. Never use that.</figcaption>
      </figure>
    </section>
<?= View::footer_logic(false) ?>
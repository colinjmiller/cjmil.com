<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Making Stuff Up | Writing") ?>
  <?= View::navigation_bar("Writing") ?>
    <section class="comics container">
      <h1>Making Stuff Up</h1>
      <figure>
        <img src="/images/sage/comics/1/1.png" alt="Designer: 'So let's make the banner fade in from partially transparent and then make it grow slightly to catch the user's eye'. Developer: 'Cool, cool, sounds good...'" />
        <img src="/images/sage/comics/1/2.png" alt="Designer: 'Also, that text needs to be vertically centered. It looks awful.' Developer: 'Uh... Give me a few hours...'" />
        <figcaption>Sometimes, it sounds like I'm just making up how difficult something is.</figcaption>
      </figure>
    </section>
<?= View::footer_logic(false) ?>
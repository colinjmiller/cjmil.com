<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Tech | Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container">
      <a href="..">Back</a>
      <h2>The Cool Tech in this Portfolio</h2>
      <p>
        This portfolio is not only an expression of my time at the UW, it is also a playground for technologies that I wanted to try.
      </p>
      <h3>Totally Responsive: Mobile First</h3>
      <p>I designed this portfolio to be a great experience, no matter how you're viewing it. If you on a computer, try scrunching the browser window a bit and you'll see that it's still a great user experience!</p>
      <h3>Sharp Images at Every Level</h3>
      <p>Where possible, I have used SVG images to ensure they look good on all devices and zoom levels. SVG graphics are drawn by the browser instead of being a static image. This means that no matter how far you zoom in, the edges will always appear sharp and beautiful.</p>
      <h3>Home-brewed Translation</h3>
      <p>To avoid bloat, I opted to spin up my own translation system using inspiration from Ruby's i18n system. Behind the scenes, translation documents contain the text of everything on the website in either English or German. Depending on the user's preferences, the server will grab the right document and inject the text in all the right places. To improve performance, these translation documents are cached after the first pass, avoiding expensive network calls.</p>
    </div>
<?= View::footer_logic() ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Sage Advice") ?>
  <?= View::navigation_bar("Writing") ?>
    <div class="container">
      <img class="main-img u-light-margin" src="/images/sage/sage_wave.svg" alt="" />
      <div class="content-column">
        <h1>Sage Advice</h1>
        <p>
          Hi there, I'm Sage! I really like computers, computer science, and sharing my passions with others. Enjoy.
        </p>
      </div>
      <h2 class="clear">Web Development</h2>
      <dl>
        <dt><A href="web/mobile-menu.php">An Expandable Mobile Menu in Pure CSS</a></dt>
        <dd>
          If you look at my website on a phone or scrunch your browser down to a small size, you'll see that the navigation menu gets hidden behind a mobile menu that can be expanded with a click. The technology behind this requires no Javascript, just pure CSS! For added goodness, it's completely accessible to people using screen readers, too.
        </dd>
        <dt><A href="web/making-stuff-up.php">Making Stuff Up</a></dt>
        <dd>
          I swear the designers I work with think I'm incompetent sometimes.
        </dd>
        <dt><A href="web/web-accessibility.php">An Intro to Web Accessibility</a></dt>
        <dd>
          This is the resource I wish I had when I began diving into web accessibility. It's a collection of the biggest changes I had to make as I started learning about web accessibility and includes links to external resources that I use to ensure properties I maintain comply with international accessibility guidelines.
        </dd>
      </dl>
    </div>
<?= View::footer_logic(false) ?>
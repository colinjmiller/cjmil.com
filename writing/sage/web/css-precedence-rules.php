<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Expandable Mobile Menu in CSS | Sage Advice") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="mobile-menu container">
      <img class="main-img u-light-margin" src="/images/sage/sage_on_mobile.svg" alt="Sage Waving" />
      <section class="content-column">
        <header>
          <h1>CSS Precedence Rules</h1>
          <h2>...Or, WHY WON'T MY FONT COLOR CHANGE</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2015-04-02">April 2nd, 2015</time>.</p>
        </div>
        <div class="introduction">
          <p>
            It's an inevitability in web design; you add a style to an element, refresh the page, and nothing changes. You go back, double-check to see if there's a typo, re-save the file, refresh the page, and still nothing changes. You check the element inspector, and lo and behold, there's another style coming in from somewhere else that's getting applied over the one you just tried to create. GAH!
          </p>
          <p>In this article, I'm going to explain why this happens and how styles are calculated.
        </div>
      </section>
    </article>
<?= View::footer_logic(false) ?>
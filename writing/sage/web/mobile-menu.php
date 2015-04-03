<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Expandable Mobile Menu in CSS | Sage Advice") ?>
  <?= View::navigation_bar("Home") ?>
    <article class="mobile-menu container">
      <img class="main-img u-light-margin" src="/images/sage/sage_on_mobile.svg" alt="Sage Waving" />
      <div class="content-column">
        <header>
          <h1>Expandable Mobile Menu in CSS</h1>
          <h2>...And it's accessible, too!</h2>
        </header>
        <section class="publication-times">
          <p>Published: <time datetime="2015-03-27">March 27th, 2015</time>.</p>
        </section>
        <section class="introduction">
          <p>Nowadays, web developers use <em>Mobile-First Responsive Web Design</em> to give mobile phone users a great experience on their website. If you go to this website on a phone or resize your browser to a smaller size, you'll see that it looks like a familiar phone interface. In particular, the menu options are hidden by default but become available after clicking the mobile menu button. That button's functionality depends entirely on CSS; there's no Javascript involved! Interested how it works? Great, let's go!</p>
        </section>
      </div>
      <section class="mobile-menu-example">
        <h3>Exhibit A: The Mobile Menu</h3>
        <figure>
          <img src="/images/sage/mobile-example.png" alt="Example of how the mobile menu looks when collapsed and expanded" />
          <figcaption>On the left, the mobile menu in its default state. On the right, the expanded mobile menu.</figcaption>
        </figure>
      </section>
      <section class="mobile-menu-html">
        <p>The secret to achieving this effect involves using a checkbox and label. Let's take a look at the HTML to see how it's all laid out:</p>
        <p data-height="268" data-theme-id="0" data-slug-hash="XJQxGQ" data-default-tab="result" data-user="cjmiller" class='codepen'>See the Pen <a href='http://codepen.io/cjmiller/pen/XJQxGQ/'>Mobile Menu in CSS</a> by Colin Miller (<a href='http://codepen.io/cjmiller'>@cjmiller</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
      </section>
    </article>
<?= View::footer_logic() ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Home") ?>
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
          <p>With the rising popularity of <em>Mobile-First Responsive Web Design</em>, it has become important for web developers to give mobile phone users a great experience on their website. If you go to this website on a phone or resize your browser to a smaller size, you'll see that it looks like a familiar phone interface. In particular, the menu options are hidden by default but become available after clicking the mobile menu button. That button's functionality depends entirely on CSS; there's no Javascript involved! Interested how it works? Great, let's go!</p>
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
        <pre>
<div class="container navbar">
  <div class="banner">
    <a href="/">cjmil.com</a>
  </div>
  <label for="mobile-nav"><img src="/images/mobile_menu.svg" alt="Mobile Menu" /></label>
  <input type="checkbox" id="mobile-nav" />
  <div class="row">
    <a class="navbar-item three columns current"  href="/">
    <div class="caret-right"></div>
      <span>Home</span>
    </a>
    <a class="navbar-item three columns "  href="/projects/">
      <div class="caret-right"></div>
      <span>Projects</span>
    </a>
    <a class="navbar-item three columns "  href="/resume.pdf">
      <div class="caret-right"></div>
      <span>R&eacute;sum&eacute;</span>
    </a>
    <a class="navbar-item three columns " target="_blank" href="http://www.linkedin.com/profile/view?id=273021207">
      <div class="caret-right"></div>
      <span>LinkedIn</span>
    </a>
  </div>
</div>
        </pre>
      </section>
    </article>
<?= View::footer_logic() ?>
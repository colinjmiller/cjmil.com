<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Expandable Mobile Menu in CSS | Sage Advice") ?>
  <?= View::navigation_bar("Home") ?>
    <article class="mobile-menu container">
      <img class="main-img u-light-margin" src="/images/sage/sage_on_mobile.svg" alt="Sage Waving" />
      <section class="content-column">
        <header>
          <h1>Expandable Mobile Menu in CSS</h1>
          <h2>...And it's accessible, too!</h2>
        </header>
        <div class="publication-times">
          <p>Published: <time datetime="2015-03-27">March 27th, 2015</time>.</p>
        </div>
        <div class="introduction">
          <p>Nowadays, web developers use <em>Mobile-First Responsive Web Design</em> to give mobile phone users a great experience on their website. If you go to this website on a phone or resize your browser to a smaller size, you'll see that it looks like a familiar phone interface. In particular, the menu options are hidden by default but become available after clicking the mobile menu button. That button's functionality depends entirely on CSS; there's no Javascript involved! Interested how it works? Great, let's go!</p>
        </div>
      </section>
      <section class="mobile-menu-example">
        <h3>Exhibit A: The Mobile Menu</h3>
        <figure>
          <img src="/images/sage/mobile-example.png" alt="Example of how the mobile menu looks when collapsed and expanded" />
          <figcaption>On the left, the mobile menu in its default state. On the right, the expanded mobile menu.</figcaption>
        </figure>
      </section>
      <section class="mobile-menu-html">
        <h3>The Code</h3>
        <p>The secret to achieving this effect involves using a checkbox and label. Let's take a look at the HTML to see how it's all laid out:</p>
<pre>
<code>&lt;!-- The mobile navbar magic --&gt;

&lt;input type=&quot;checkbox&quot; id=&quot;mobile-nav&quot; /&gt;
&lt;label for=&quot;mobile-nav&quot;&gt;
  &lt;img src=&quot;/images/mobile_menu.svg&quot; alt=&quot;Mobile Menu&quot; /&gt;
&lt;/label&gt;

&lt;!-- The actual navigation bar --&gt;

&lt;div class=&quot;row&quot;&gt;
  &lt;a class=&quot;navbar-item three columns&quot; href=&quot;/&quot;&gt;
    &lt;span&gt;Home&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class=&quot;navbar-item three columns&quot; href=&quot;/projects/&quot;&gt;
    &lt;span&gt;Another Item...&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;
</code>
</pre>
      </section>
    </article>
<?= View::footer_logic() ?>
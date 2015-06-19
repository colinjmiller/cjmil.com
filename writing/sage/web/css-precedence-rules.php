<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("CSS Precedence Rules | Sage Advice") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="sage container">
      <img class="main-img u-light-margin" src="/images/sage/sage_css_weights.svg" alt="Sage weighing two CSS properties" />
      <section class="content-column">
        <header>
          <h1>CSS Precedence Rules</h1>
          <h2>Or: Why your font color won't change.</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2015-06-16">June 16th, 2015</time>.</p>
        </div>
      </section>
      <section class="u-cf">
        <h2 class="ornate">
          <span>Introduction</span>
        </h2>
        <div class="introduction">
          <p>
            It's an inevitability in web design; you add a style to an element, refresh the page, and nothing changes. You go back, double-check to see if there's a typo, re-save the file, refresh the page, and still nothing changes. You check the element inspector, and lo and behold, there's another style coming in from somewhere else that's getting applied over the one you just tried to create. GAH!
          </p>
          <p>All of this is due to how precedence works in CSS.</p>
        </div>
      </section>
      <section>
        <img class="section-img" src="/images/sage/sage_css_bars.svg" alt="The five properties that control CSS precedence" />
        <p>
          There are five tiers of precedence in CSS. In order of weakest to strongest, the first four tiers consist of element selectors, class selectors, ID selectors, and finally inline styles. The fifth is more of a boolean that can be used to trump other styles. Generally, these precedence rules are represented as numbers separated by commas and do not include the fifth tier. For example:
        </p>
        <p class="u-cf">
          <ul>
            <li>The selector <code>div { ... }</code> would be represented as [0, 0, 0, 1] because it has 0 inline styles, classes, IDs, and 1 element selector.</li>
            <li>The selector <code>.class-name { ... }</code> would be represented as [0, 0, 1, 0] because it has only a single class selector.</li>
            <li>The selector <code>#id-name { ... }</code> would be represented as [0, 1, 0, 0] because it has a single ID selector.</li>
            <li>The selector <code>&lt;div style=&quot;...&quot;&gt;...&lt;/div&gt;</code> would be represented as [1, 0, 0, 0] because it has an inline style.</li>
          </ul>
        </p>
      </section>
    </article>
<?= View::footer_logic(false) ?>
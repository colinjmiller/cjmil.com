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
      <section>
        <h2 class="clear">Web Development</h2>
        <dl>
          <dt><a href="web/css-overflow.php">Why does CSS' overflow property fix floated content?</a></dt>
          <dd style="font-style: italic;">Published <time datetime="2016-1-12">January 12th, 2016</time>.</dd>
          <dd>
            While working as a teaching assistant for my university's web programming course, I found CSS' <code>overflow</code> property to be one of the most difficult subject for my students to understand. I totally commiserate; the <code>overflow</code> property has two disparate behaviors depending on the context it's used. Its use in defining how an element should behave when it has content that goes outside of it makes complete sense: You're define what happens when its content overflows. But then, why does setting this <em>also</em> work to expand to fit floated content?!
          </dd>
          <dt><a href="web/web-accessibility.php">An Intro to Web Accessibility</a></dt>
          <dd style="font-style: italic;">Published <time datetime="2015-12-28">December 28th, 2015</time>.</dd>
          <dd>
            This is the resource I wish I had when I began diving into web accessibility. It's a collection of the biggest changes I had to make as I started learning about web accessibility and includes links to external resources that I use to ensure properties I maintain comply with international accessibility guidelines.
          </dd>
          <dt><a href="web/making-stuff-up.php">Making Stuff Up</a></dt>
          <dd style="font-style: italic;">Published <time datetime="2015-12-26">December 26th, 2015</time>.</dd>
          <dd>
            I swear the designers I work with think I'm incompetent sometimes.
          </dd>
          <dt><a href="web/mobile-menu.php">An Expandable Mobile Menu in Pure CSS</a></dt>
          <dd style="font-style: italic;">Published <time datetime="2015-04-02">April 2nd, 2015</time>.</dd>
          <dd>
            If you look at my website on a phone or scrunch your browser down to a small size, you'll see that the navigation menu gets hidden behind a mobile menu that can be expanded with a click. The technology behind this requires no Javascript, just pure CSS! For added goodness, it's completely accessible to people using screen readers, too.
          </dd>
        </dl>
      </section>
      <section>
        <h2>Exceptional Computer Scientists</h2>
      </section>
    </div>
<?= View::footer_logic(false) ?>
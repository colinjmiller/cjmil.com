<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Writing") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="container">
      <h1>Writing</h1>
      <p>
        In my spare time, I like to write things. Here are some of those things:
      </p>
      <dl>
        <dt><a href="sage/web/css-colors.php">CSS Colors</a></dt>
        <dd style="font-style: italic;">Published <time datetime="2017-1-4">January 4th, 2017</time>.</dd>
        <dd>
          Just pick one and stick with it. Except named colors. Never use that.
        </dd>
        <dt><a href="sage/people/grace-hopper.php">Grace Hopper</a></dt>
        <dd style="font-style: italic;">Published <time datetime="2016-3-13">March 13th, 2016</time>.</dd>
        <dd>
          Grace Hopper: Computing extraordinaire, doctor of mathematics, rear admiral of the Navy, lifelong teacher and learner.
        </dd>
        <dt><a href="sage/web/css-overflow.php">Why does CSS' overflow property fix floated content?</a></dt>
        <dd style="font-style: italic;">Published <time datetime="2016-1-12">January 12th, 2016</time>.</dd>
        <dd>
          While working as a teaching assistant for my university's web programming course, I found CSS' <code>overflow</code> property to be one of the most difficult subject for my students to understand. I totally commiserate; the <code>overflow</code> property has two disparate behaviors depending on the context it's used. Its use in defining how an element should behave when it has content that goes outside of it makes complete sense: You're define what happens when its content overflows. But then, why does setting this <em>also</em> work to expand to fit floated content?!
        </dd>
        <dt><a href="sage/web/web-accessibility.php">An Intro to Web Accessibility</a></dt>
        <dd style="font-style: italic;">Published <time datetime="2015-12-28">December 28th, 2015</time>.</dd>
        <dd>
          This is the resource I wish I had when I began diving into web accessibility. It's a collection of the biggest changes I had to make as I started learning about web accessibility and includes links to external resources that I use to ensure properties I maintain comply with international accessibility guidelines.
        </dd>
        <dt><a href="sage/web/making-stuff-up.php">Making Stuff Up</a></dt>
        <dd style="font-style: italic;">Published <time datetime="2015-12-26">December 26th, 2015</time>.</dd>
        <dd>
          I swear the designers I work with think I'm incompetent sometimes.
        </dd>
        <dt><a href="sage/web/mobile-menu.php">An Expandable Mobile Menu in Pure CSS</a></dt>
        <dd style="font-style: italic;">Published <time datetime="2015-04-02">April 2nd, 2015</time>.</dd>
        <dd>
          If you look at my website on a phone or scrunch your browser down to a small size, you'll see that the navigation menu gets hidden behind a mobile menu that can be expanded with a click. The technology behind this requires no Javascript, just pure CSS! For added goodness, it's completely accessible to people using screen readers, too.
        </dd>
        <dt><a href="german/">The Rise of Fascism in Germany</a></dt>
        <dd>
          Join me as I explore the rise of fascism in Germany, examining the reasons behind it, why it was allowed to happen, and what people of the time thought about it.
        </dd>
      </dl>
    </article>
<?= View::footer_logic(false) ?>
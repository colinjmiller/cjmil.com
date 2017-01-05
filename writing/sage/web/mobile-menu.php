<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Expandable Mobile Menu in CSS | Writing") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="sage container">
      <img class="main-img u-light-margin" src="/images/sage/sage_on_mobile.svg" alt="" />
      <section class="content-column">
        <header>
          <h1>Expandable Mobile Menu in CSS</h1>
          <h2>...And it's accessible, too!</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2015-04-02">April 2nd, 2015</time>.</p>
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
        <h3>The Mobile Navbar Code</h3>
        <p>The secret to achieving this effect involves using a checkbox and label. Let's take a look at the HTML to see how it's all laid out:</p>
<pre>
<code>&lt;input type=&quot;checkbox&quot; id=&quot;mobile-nav&quot; /&gt;
&lt;label for=&quot;mobile-nav&quot;&gt;
  &lt;img src=&quot;/images/mobile_menu.svg&quot; alt=&quot;Mobile Menu&quot; /&gt;
&lt;/label&gt;
</code>
</pre>
        <p>This might seem a little strange; why am I using form elements in my navigation menu? Well, that's where the magic of this CSS-only mobile menu becomes clear: I'm going to use the <code>:checked</code> and <code>:focus</code> pseudo-selectors of the checkbox to manipulate the page. In particular, if the checkbox is checked, I'll make that mean that I want to show the navigation menu. Otherwise, if it's unchecked, I don't want to show the navigation controls.</p>
        <figure>
          <img src="/images/sage/checkbox-in-menu.png" alt="An ugly checkbox in the mobile menu" title="Yuck!" />
          <figcaption>Hmm... That checkbox looks terrible.</figcaption>
        </figure>
        <p>Having a checkbox in our navigation menu is more than unsightly; it's horrendous. However, how can the user activate it without it being visible? That's where the <code>label</code> comes into play! By giving the user a <code>label</code> to click on, which in turn activates the checkbox, we can make the ugly checkbox invisible! Notice that the checkbox has an <code>id</code> attribute attached to it and the <code>label</code>'s <code>for</code> attribute targets it. This is necessary.</p>
        <p>Our next task is to make that checkbox invisible! Unfortunately, we can't get away with setting the checkbox to <code>display: none;</code> because that would remove it from the tab-index. Likewise, trying to manipulate the size by setting <code>width: 0; height: 0;</code> doesn't work in all browsers, either. The solution is to use <code>transform: scale(0);</code> to turn the checkbox invisible while still keeping it "visible" for accessibility reasons. To ensure support in browsers like IE9 and earlier versions of Chrome, Firefox, and Opera, use their vendor prefixes. Remember to add a <code>display: none;</code> rule on breakpoints where the checkbox should not accessible; this removes it from the tab index.</p>
        <p>So, to reiterate: The user will see an image representing a mobile menu, but it's actually a label that triggers an invisible checkbox. We will then use some CSS magic to hide or show the navigation menu depending on whether the checkbox is <code>:checked</code> or not!</code>
      </section>
      <section>
        <h3>Let's put it all together</h3>
        <p>Now that we see the big picture, let's put it all together with the navigation menu:</p>
<pre>
<code>&lt;!-- The mobile navbar magic --&gt;

&lt;input type=&quot;checkbox&quot; id=&quot;mobile-nav&quot; /&gt;
&lt;label for=&quot;mobile-nav&quot;&gt;
  &lt;img src=&quot;/images/mobile_menu.svg&quot; alt=&quot;Mobile Menu&quot; /&gt;
&lt;/label&gt;

&lt;!-- The navigation menu --&gt;

&lt;div class=&quot;row&quot;&gt;
  &lt;a class=&quot;navbar-item&quot; href=&quot;/&quot;&gt;Home&lt;/a&gt;
  &lt;a class=&quot;navbar-item&quot; href=&quot;/projects/&quot;&gt;Projects&lt;/a&gt;
  ...
&lt;/div&gt;
</code>
</pre>
        <p>And, of course, the SCSS that goes along with it:</p>
<pre>
<code>.navbar-item {
  display: none;
}

#mobile-nav {

  transform: scale(0);

  &amp;:checked ~ .row .navbar-item {
    display: block;
  }
}
</code>
</pre>
        <p>By default, every <code>.navbar-item</code> is set to <code>display: none</code>. However, these items get shown when the checkbox is checked with the <code>&amp;:checked ~ .row .navbar-item</code> selector. This selector might seem a little verbose, so allow me to break it down. When the checkbox (denoted by id <code>#mobile-nav</code>) is checked, then its <code>:checked</code> pseudoselector will activate. Once this happens, I then target its sibling, <code>.row</code>, using the sibling selector (<code>~</code>). I then target <code>.row</code>'s child, <code>.navbar-item</code>, and set it to <code>display: block</code>, thus overwriting its previous style to not display.</p>
        <p>But wait, it gets better!</p>
      </section>
      <section>
        <h3>Let's make the mobile menu highlight when a user tabs to it!</h3>
        <p>As mentioned above, our implementation still works for people using screen readers, because the checkbox is still within the tab index. However, since the <code>#mobile-nav</code> checkbox is effectively invisible, the interaction is pretty weird for people who use the tab key to navigate the web. Luckily, we can fix this with a little extra CSS!</p>
<pre>
<code>label {
  outline: 1px dotted transparent;
}

#mobile-nav {

  ...

  &amp;:focus + label {
    outline-color: black;
  }
}
</code>
</pre>
        <p>What's going on here? By default, I'm applying a 1px invisible outline on the label. I do this because when I make the outline visible, I don't want things to jump around by a pixel. The cool stuff happens inside the <code>#mobile-nav</code> selector, though. When the user tabs to the <code>#mobile-nav</code> checkbox, it will active its <code>:focus</code> pseudoselector. I then target its direct sibling, <code>label</code>, and give its outline a black color. This lets the user know that they just tabbed to the mobile navigation button, even though it's just a label!<p>
      </section>
      <section>
        <h3>Parting Thoughts...</h3>
        <p>As with a lot of CSS tricks, this mobile navigation menu is limited to more modern browsers. I've tested it in the latest versions of Chrome, Firefox, and Internet Explorer and they all worked fine. Based on what I'm seeing online, this trick will be limited to the following:</p>
        <ul>
          <li>Chrome with <code>-webkit</code> prefix, 36+ without</li>
          <li>Firefox 3.5+ with the <code>-moz</code> prefix, 16+ without</li>
          <li>Internet Explorer 9+ with the <code>-ms</code> prefix, 10+ without</li>
          <li>Opera 10.5+ with the <code>-o</code> prefix, 15+ with <code>-webkit</code>, 23+ without</li>
          <li>Safari 3.1+ with the <code>-webkit</code> prefix</li>
        </ul>
      </section>
    </article>
<?= View::footer_logic(false) ?>
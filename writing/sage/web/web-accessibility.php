<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("An Intro to Web Accessibility | Sage Advice") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="sage container">
      <img class="main-img u-light-margin" src="/images/sage/sage_blind.svg" alt="" />
      <section class="content-column">
        <header>
          <h1>An Intro to Web Accessibility</h1>
          <h2>What I learned from my dive into web accessibility</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2015-12-28">December 28th, 2015</time>.</p>
        </div>
        <div class="introduction">
          <p>
            It's important to consider all users that your website may encounter, including those who use accessibility software to help them navigate the internet. This is not a comprehensive guide on how to ensure perfect accessibility for everyone, it is a collection of the biggest changes I had to make as I started learning about web accessibility. My goal is to help you scrutinize your design choices with accessibility in mind as you develop.
          </p>
        </div>
      </section>
      <section>
        <h3>Tools to Help</h3>
        <p>
          In my situation, I had to make a web property conform to WCAG 2.0 standards of accessibility. It's really easy to check if your website conforms--just paste the source of a page into <a href="http://achecker.ca/checker/index.php" target="_blank">an accessibility checker</a> and see what's returned. We had hundreds of violations. Copying and pasting code after every change is pretty tedious, so I also installed <a href="https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb?hl=en" target="_blank">Google's Accessibility Developer Tools extension</a>. The extension allows you to dynamically check whether the page conforms to accessibility standards, which is great if you have javascript that modifies the DOM that would not be reflected in the source code. Our website uses bootbox modals frequently to confirm decisions, so this tool was perfect for that.
        </p>
        <figure class="hidden-xs">
          <img src="/images/sage/chrome_audit.png" alt="Chrome's Audit tab showing all accessibility tests passing" />
          <figcaption>I use Chrome's Accessability Developer Tools to ensure I pass accessibility guidelines on cjmil.com</figcaption>
        </figure>
      </section>
      <section>
        <h3>Small First Steps</h3>
        <p>
          I found that running a page's source code through <a href="https://validator.w3.org/" target="_blank">an HTML validator</a> was a great first step. This will help you fix a lot of small issues, like mismatched beginning and ending tags, or improper nesting of elements (e.g. <code>&lt;ul&gt;</code> inside of <code>&lt;p&gt;</code> tags). It's not always possible to pass HTML validation, especially if you use third party tracking and analytics, but it will help show any glaring issues.
        </p>
        <p>
          Quite often, there are some small things that get missed. For example, does the <code>html</code> element have a <code>lang</code> attribute attached to it? Our site didn't. Since our site is in English, it's easily fixed by with a small addition:
        </p>
<pre><code><?= htmlspecialchars('<html lang="en"> ... </html>') ?></code></pre>
      </section>
      <section>
        <h3>Unsemantic Markup</h3>
        <p>
          One of the easier issues to address was our unsemantic markup. We used font-awesome in our site for many of our icons, which recommends the following syntax:
        </p>
<pre><code><?= htmlspecialchars('<i class="fa fa-camera-retro"></i>') ?></code></pre>
        <p>
          However, my accessibility checker marked this as a problem, because the <code>&lt;i&gt;</code> element <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i" target="_blank">does have semantic meaning</a> in HTML5 and we were not using it correctly. Luckily, the fix is simple:
        </p>
<pre><code><?= htmlspecialchars('<span class="fa fa-camera-retro"></span>') ?></code></pre>
      </section>
      <section>
        <h3>Labels for Form Elements</h3>
        <p>
          All input elements that take user input require an accompanying <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label" target="_blank">label element</a>. Besides increasing the clickable area to apply focus to form elements, labels provide the description that gets read aloud by screen readers. For example, an e-mail input in a form might look something like:
        </p>

<pre>
<code><?= htmlspecialchars('<label for="email">Email</label>') ?>

<?= htmlspecialchars('<input id="email" type="text" />') ?>
</code>
</pre>

        <p>
          Note that the label uses its for attribute to target an id of another element, so we needed to add an id to every input on the page. When doing this, be sure to avoid duplicating ids on the same page (The HTML and accessibility validators will catch this.)
        </p>
        <p>
          Many of the inputs in our website looked bad with label text around it because we used placeholder text. To get around this, it's fine to set the accompanying label's display style to none. Even though it's not shown, the label's text will still be read by a screen reader:
        </p>

<pre>
<code><?= htmlspecialchars('.hide { display: none; }') ?>

<?= htmlspecialchars('...') ?>

<?= htmlspecialchars('<label class="hide" for="email">Email</label>') ?>

<?= htmlspecialchars('<input id="email" type="text" />') ?>
</code>
</pre>

        <p>
          We also ran into an edge case where we needed two inputs to be described by the same label (We used Twitter's Typeahead plugin, which dynamically creates another input as a sibling to the original.) To do this, you need to add an aria-labelledby attribute to both inputs:
        </p>

<pre>
<code><?= htmlspecialchars('<label id="location-label">Location</label>') ?>

<?= htmlspecialchars('<input aria-labelledby="location-label" … />') ?>

<?= htmlspecialchars('<input aria-labelledby="location-label" … />') ?>
</code>
</pre>
        <p>
          This time the roles are reversed: The label must have an id that can be targeted by the inputs.
        </p>
      </section>
      <section>
        <h3>Alternate Description for Images</h3>
        <p>
          All non-cosmetic images are required to have an alternate text description that displays if an image doesn't load or the user cannot see it. If the image contains text, it's usually the correct behavior to use that text as its alternate description. For example, Google's logo image has an alt attribute of "Google":
        </p>

<pre><code><?= htmlspecialchars('<img alt="Google" src="googlelogo.png" … />') ?></code></pre>

        <p>
          On our web property, we sometimes display an image with a gray map icon and the text "No location on record" below it. So our image tag looked like:
        </p>

<pre><code><?= htmlspecialchars('<img src="No location on record" src="no_location.svg" … />') ?></code></pre>

        <p>
          However, the vast majority of our images were purely cosmetic, so an empty alt attribute was the correct behavior:
        </p>

<pre><code><?= htmlspecialchars('<img src="cosmetic/image.svg" alt="" … />') ?></code></pre>

        <p>
          Doing this marks the image as unimportant and allows the screen reader to skip over it. Note that all images must still have an alt attribute, but they don't always need content. In my mind, this is the hardest accessibility skill to master, which is why I would recommend reading through <a href="http://webaim.org/techniques/alttext/" target="_blank">this helpful alternate text guide</a>.
        </p>
      </section>
      <section>
        <h3>Parting Thoughts</h3>
        <p>
          These were only the biggest issues I ran into while working to make our site accessible. As I stated in the beginning, this is not a comprehensive guide--my goal in writing this is to help keep accessibility guidelines in mind before merging a pull request or shipping a new product. If you find web accessibility interesting and would like to learn more, I would recommend reading the <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA" target="_blank">Accessible Rich Internet Applications guidelines on MDN</a> or the <a href="https://www.w3.org/WAI/intro/accessibility.php" target="_blank">W3C's guide to web accessibility</a> next.
        </p>
      </section>
      <section>
        <h4>External Resources</h4>
        <ul>
          <li><a href="http://achecker.ca/checker/index.php" target="_blank">My favorite accessibility checker</a></li>
          <li><a href="https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb?hl=en" target="_blank">Google Chrome's Accessibility Developer Tools extension</a></li>
          <li><a href="https://validator.w3.org/" target="_blank">w3.org's HTML validator</a></li>
          <li><a href="http://webaim.org/techniques/alttext/" target="_blank">A thorough guide to alt-text on images</a></li>
          <li><a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA" target="_blank">Accessible Rich Internet Applications guidelines on MDN</a></li>
          <li><a href="https://www.w3.org/WAI/intro/accessibility.php" target="_blank">W3C's guide to web accessibility</a></li>
        </ul>
      </section>
    </article>
<?= View::footer_logic(false) ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Why does CSS' overflow property fix floated content? | Sage Advice") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="sage container">
      <img class="main-img u-light-margin" src="/images/sage/sage_overflowing.svg" alt="" />
      <section class="content-column">
        <header>
          <h1>Why does CSS' overflow property fix floated content?</h1>
          <h2>Understanding one of CSS' weirdest behaviors...</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2016-1-12">January 12th, 2016</time>.</p>
        </div>
        <div class="introduction">
          <p>
            While working as a teaching assistant for my university's web programming course, I found CSS' <code>overflow</code> property to be one of the most difficult subjects for my students to understand. I totally commiserate; the <code>overflow</code> property has two disparate behaviors depending on the context it's used. Its use in defining how an element should behave when it has content that goes outside of it makes complete sense: You're define what happens when its content overflows. But then, why does setting this <em>also</em> work to expand to fit floated content?!
          </p>
        </div>
      </section>
      <section>
        <h3>Wait... What are you talking about?</h3>
        <div style="float: right; width: 50px; height: 50px; background-color: black; color: white; font-size: 40px; text-align: center; line-height: 50px; margin: 5px;">:)</div>
        <p>
          In case you don't know, using CSS' <code>float</code> property causes elements to go as far as they can to the left or right. As an example, I made a small, black box with a white smilie face in it and set its style to <code>float: right;</code>. Do you see it there, all the way to the right? The text next to it flows around it nicely and life is good! This is a simple situation when using floats. However, consider the situation below, where a floated element is contained in a parent with just a small amount of text. I've added dotted borders and some padding to make it clearer what the bounds of the parent are.
        </p>
        <div style="border: 1px dotted black; padding: 15px;">
          Text!
          <div style="float: right; width: 75px; padding: 15px; background-color: black; color: white;">I'm floated content with a lot of text!</div>
        </div>
        <p style="clear: both;">
          Well, that looks awful, doesn't it? This is where CSS' <code>overflow</code> property comes into use! By setting the container's <code>overflow</code> to anything except <code>visible</code>, the container will magically scale its height to contain the floated content:
        </p>
        <div style="border: 1px dotted black; padding: 15px; overflow: hidden;">
          Text!
          <div style="float: right; width: 75px; padding: 15px; background-color: black; color: white;">I'm floated content with a lot of text!</div>
        </div>
        <p style="margin-top: 15px;">
          ...And this is where the confusion begins. I set <code>overflow: hidden;</code>, which sounds like it should do the exact OPPOSITE of what just happened: All of my students expect the extra protruding stuff to be hidden, because, well, duh! But no, the result is that the floated content now fits nicely inside of the container. Why?
        </p>
      </section>
      <section>
        <h3>The Technical Mumbo-Jumbo</h3>
        <p>
          If you're able to understand technical specifications, here's the exact wording from W3 on why the <code>overflow</code> property causes elements to expand to fit floated content:
        </p>
        <blockquote cite="https://www.w3.org/TR/CSS21/visuren.html#block-formatting">
          Floats, absolutely positioned elements, block containers (such as inline-blocks, table-cells, and table-captions) that are not block boxes, and block boxes with 'overflow' other than 'visible' (except when that value has been propagated to the viewport) establish new block formatting contexts for their contents.
          <div class="text-right">
            <cite><a href="https://www.w3.org/TR/CSS21/visuren.html#block-formatting" target="_blank">- 9.4.1 Block formatting contexts</a></cite>
          </div>
        </blockquote>
        <blockquote cite="https://www.w3.org/TR/CSS21/visudet.html#root-height">
            ... The height of an element that establishes a block formatting context is computed as follows: ... if the element has any floating descendants whose bottom margin edge is below the element's bottom content edge, then the height is increased to include those edges. Only floats that participate in this block formatting context are taken into account, e.g., floats inside absolutely positioned descendants or other floats are not.
          <div class="text-right">
            <cite><a href="https://www.w3.org/TR/CSS21/visudet.html#root-height" target="_blank">- 10.6.7 'Auto' heights for block formatting context roots</a></cite>
          </div>
        </blockquote>
      </section>
      <section>
        <h3>Let's break that down...</h3>
        <p>
          The key to understanding the specification, and thus why <code>overflow</code> autoscales to fit floated content, is by learning what a <strong>Block Formatting Context</strong> is. The block formatting context is pretty simple, really: All block-level elements participate in a block formatting context. As a reminder, block-level elements are those whose <code>display</code> property is <code>block</code>, e.g. <code>&lt;p&gt;</code> and <code>&lt;div&gt;</code> by default. Block-level elements, along with inline and relatively positioned elements all make up the <strong>Normal Flow.</strong>
        </p>
        <p style="border: 1px dotted black; padding: 15px;">
          I'm a <code>&lt;p&gt;</code> that's greedy and takes up as much screen real estate as possible because I'm a block-level element. I'm part of a block formatting context! <span style="border: 1px solid #59F033;">I'm a <code>&lt;span&gt;</code> that only takes up as much space as I need. I'm part of an inline formatting context!</span>
        </p>
        <p>
          If this is confusing, here's another way to think of it: Elements that aren't floated or absolutely positioned are all considered part of the <em>Normal Flow</em> in a web page. Block-level elements stack on top of each other vertically and inline-level elements are laid out horizontally. This web page consists of an <code>&lt;article&gt;</code> block-level element, which itself contains several <code>&lt;section&gt;</code>s that are also block-level elements. All's fine and dandy because they're part of the <em>normal flow</em> of the document. However, once you float some elements in the page, those floated elements are now considered <em>out of flow</em> and the normal rules don't apply to them! The container of a single floated element won't even know it has any children inside it because it doesn't have any children in normal flow, and its height will thus shrink to be as small as possible.
        </p>
      </section>
      <secton>
        <h3>The Big Reveal!</h3>
        <p>
          So now, armed with our understanding of block formatting contexts, let's look back at that W3 specification for a moment:
        </p>
        <blockquote cite="https://www.w3.org/TR/CSS21/visuren.html#block-formatting">
          Floats, absolutely positioned elements, block containers (such as inline-blocks, table-cells, and table-captions) that are not block boxes, and block boxes with 'overflow' other than 'visible' ... establish <strong>new</strong> block formatting contexts for their contents.
          <div class="text-right">
            <cite><a href="https://www.w3.org/TR/CSS21/visuren.html#block-formatting" target="_blank">- 9.4.1 Block formatting contexts</a></cite>
          </div>
        </blockquote>
        <p>
          So, when we define that an element has the style <code>overflow: hidden;</code>, we're actually making a NEW block formatting context for its contents! Why is this important? Well, let's go back to that other specification we had earlier...
        </p>
        <blockquote cite="https://www.w3.org/TR/CSS21/visudet.html#root-height">
            ... The height of an element that establishes a block formatting context is computed as follows: ... if the element has any floating descendants whose bottom margin edge is below the element's bottom content edge, then the <strong>height is increased to include those edges</strong>...
          <div class="text-right">
            <cite><a href="https://www.w3.org/TR/CSS21/visudet.html#root-height" target="_blank">- 10.6.7 'Auto' heights for block formatting context roots</a></cite>
          </div>
        </blockquote>
        <p>
          Boom! Suddenly it's clear! The element is creating a new block formatting context for its contents because of the <code>overflow: hidden;</code>, and because of that it will now auto-scale its height for any floated elements inside it!
        </p>
      </section>
      <section>
        <h3>So does that mean there are alternatives to using overflow?</h3>
        <p>
          You bet there are! Remember, a new block formatting context is created for an element's contents if any of the following are true:
        </p>
        <ul>
            <li>Its <code>float</code> property is <code>left</code> or <code>right</code></li>
            <li>Its <code>position</code> is <code>absolute</code> or <code>fixed</code></li>
            <li>Its <code>display</code> is set to a block container, but is not a block box (e.g. <code>inline-block</code>, <code>table-cell</code>, or <code>table-caption</code>)</li>
            <li>Its <code>overflow</code> property is not set to <code>visible</code></li>
        </ul>
        <p>
          Below are two examples that create new block formatting contexts for its contents and don't use the same old <code>overflow: hidden;</code> trick that we usually see, but still achieve the same effect!
        </p>
        <div style="border: 1px dotted black; padding: 15px; margin-bottom: 15px; float: left; width: 100%;">
          I'm using <code>float: left; width: 100%;</code>!
          <div style="float: right; width: 75px; padding: 15px; background-color: black; color: white;">I'm floated content with a lot of text!</div>
        </div>
        <div style="border: 1px dotted black; padding: 15px; margin-bottom: 15px; display: inline-block; width: 100%;">
          I'm using <code>display: inline-block; width: 100%;</code>!
          <div style="float: right; width: 75px; padding: 15px; background-color: black; color: white;">I'm floated content with a lot of text!</div>
        </div>
        <p>
          You may notice that I had to add an extra rule, <code>width: 100%</code>, to both of those containers. There are usually side effects when using any approach besides <code>overflow: hidden;</code>, which is why that approach is the most popular.
        </p>
      </section>
      <section>
        <h3>Parting Thoughts</h3>
        <p>
          So now we know why setting <code>overflow: hidden;</code> on an element will cause it to scale to fit its floated children, but there's one question still lingering: <em>Why does setting that create a new block formatting context for its children?!</em> The answer is pretty funny and an excellent example of an edge case that wasn't considered when writing the specification! If you're interested, I recommend <a href="http://stackoverflow.com/questions/9943503/why-does-css2-1-define-overflow-values-other-than-visible-to-establish-a-new-b" target="_blank">this brilliant Stackoverflow post</a> on the matter.
        </p>
      </section>
      <section>
        <h4>External Resources</h4>
        <ul>
          <li><a href="http://www.sitepoint.com/understanding-block-formatting-contexts-in-css/" target="_blank">Understanding Block Formatting Contexts in CSS</a></li>
          <li><a href="https://www.w3.org/TR/CSS21/visuren.html#block-formatting" target="_blank">W3's Specification on Block Formatting Contexts</a></li>
          <li><a href="https://www.w3.org/TR/CSS21/visudet.html#root-height" target="_blank">W3's Specification on 'Auto' heights for block formatting context roots</a></li>
          <li><a href="https://www.w3.org/TR/CSS2/visuren.html#positioning-scheme" target="_blank">W3's Specification on Positioning Schemes</a></li>
          <li><a href="http://stackoverflow.com/questions/9943503/why-does-css2-1-define-overflow-values-other-than-visible-to-establish-a-new-b" target="_blank">Why does CSS2.1 define overflow values other than “visible” to establish a new block formatting context?</a></li>
        </ul>
      </section>
    </article>
<?= View::footer_logic(false) ?>
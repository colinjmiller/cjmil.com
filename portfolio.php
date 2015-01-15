<?php

  require_once('view-logic/views.php');

?>
<?= View::header_logic("Honors Portfolio") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="portfolio container">
      <nav class="row">
        <ul>
          <li class="three columns">
            <a href="#">Freshman Year</a>
          </li>
          <li class="three columns">
            <a href="#">Sophomore Year</a>
          </li>
          <li class="three columns">
            <a href="#">Junior Year</a>
          </li>
          <li class="three columns">
            <a href="#">Senior Year</a>
          </li>
        </ul>
      </nav>
      <h2>A Constant State of Learning</h2>
      <p>
        <code>
          public final boolean LEARNING = true;
        </code>
      </p>
      <p>
        The last sixteen years of my life have involved learning. From ages five until thirteen, I learned the basics of life at home under the guidance of my mother. After eighth grade, I went to a public high school and continued my studies in a broad spectrum. Entering college, I believed my trend of learning was coming to a close.
      </p>
      <p>
        This is not the case; I am still learning. I will always be learning.
      </p>
      <img id="learning-img" src="portfolio/areas.svg" alt="Areas of learning as I get older" />
      <p>
        Software Development is an intimidating field to me. All of my co-workers have more experience than me and seem to effortlessly write beautiful code while still finding time to help teach me. Each day, I learn at least five new things.
      </p>
      <p>
        Reflecting on that, I'd rather learn five new things each day and feel a little overwhelmed, rather than not learn anything at all. That's where <em>A Constant State of Learning</em> comes into play. A reddit user once asked the question,
        <q>When does the change from, 'This is complicated, I better figure it out!' to 'This is complicated, YOU figure it out!' happen?</q>
        My goal in life is to never make that switch.
      </p>
      <p>
        This portfolio is a culmination of my experiences at the University of Washington. Through it, I wish to reflect on my past so that I can better my future. I began this portfolio in late 2011 and, for the first few quarters, wrote descriptions of every class I took. However, the things I wrote have caused my present self to cringe, so I have opted to disclude many of those samples and edit those that remain. For posterity, <a href="http://cjmil.com/old/">here's a link to the older, more cringey me</a>, complete with a web design from 2012.
      </p>
      <p>
        If I'm being realistic with myself, I will look back on the things I wrote here and cringe again when I'm more mature.
      </p>
    </div>
<?= View::footer_logic() ?>
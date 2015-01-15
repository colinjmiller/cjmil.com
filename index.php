<?php

  require_once('view-logic/views.php');

?>
<?= View::header_logic("Home") ?>
  <?= View::navigation_bar("Home") ?>
    <div class="container">
      <img id="colin-pic" class="u-light-margin" src="images/colin.jpg" alt="Picture of Colin Miller" />
      <p>
        Hi, my name's Colin Miller. I live in Seattle, WA and attend the University of Washington, where I study computer science and German. I am in my final year at the university and am looking forward
        to finishing my undergraduate degree in June, 2015. I work part-time at <a href="http://www.whitepages.com/">Whitepages.com</a>, an identity company based in downtown Seattle, as a web developer on the CoreSite team. I will begin full-time once I graduate.
      </p>
      <p>
        I began cjmil.com in 2012 after taking a web development class and first used it as a platform for my Honors Portfolio. This is the third iteration of the site's design; it has since grown to house
        my personal project and much more information about myself.
      </p>
    </div>
<?= View::footer_logic() ?>
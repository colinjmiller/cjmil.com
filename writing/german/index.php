<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("The Rise of Fascism in Germany") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="container">
      <img class="main-img u-light-margin" src="/images/german_fascism.png" alt="Nazi symbolism" />
      <section class="content-column">
        <header>
          <h1>The Rise of German Fascism</h1>
          <h2>Popular German Thought, 1932-1942</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2015-04-02">April 2nd, 2015</time>.</p>
        </div>
        <div class="introduction">
          <p>
            
          </p>
        </div>
      </section>
    </article>
<?= View::footer_logic(false) ?>
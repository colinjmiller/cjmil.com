<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("The Rise of Fascism in Germany") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="container">
      <img class="main-img u-light-margin" src="/images/german_fascism.svg" alt="Nazi symbolism" />
      <section class="content-column">
        <header>
          <h1>The Rise of German Fascism</h1>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2015-06-08">June 8th, 2015</time>.</p>
        </div>
        <div class="introduction">
          <p>
            Deeply influenced by Mussolini's values of patriotism, national unity, and unquestioning obedience, Hitler used his power and influence in Germany to turn the country into a fascist state.
          </p>
          <p>
            Join me as I explore the political and cultural thought in Germany during the rise of fascism.
          </p>
        </div>
      </section>
      <section id="timeline" class="u-cf">
        <div class="timeline-item">
          <h2>1933</h2>
          <p>

          </p>
        </div>
      </section>
    </article>
<?= View::footer_logic(false) ?>
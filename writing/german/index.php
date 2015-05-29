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
            The Treaty of Versailles marked the end of World War I and forced Germany to accept responsability for the war. Over the following decade, Germany's Weimar Republic brought the economy to shambles through hyperinflation as it tried to pay the required war reparations. Embarassed and losing faith in their government's ability to lead, many Germans began looking for new sources of leadership.
          </p>
          <p>
            Meanwhile, in the southern region of the continent, Benito Mussolini of Italy was a rising star in the political arena. Although he ardently supported the socialist party until 1915, the Great War caused him to reverse his political orientation. He formed the Fascist Party in 1919 and gained massive support from unemployed war veterans, using their influence to terrorize the established political parties. After only two years, the Fascist Party was invited to join the coalition government. By 1925, Mussolini deposed the democratic government and established himself as dictator.
          </p>
          <p>
            Back in Germany, World War I veteran Adolph Hitler became interested in the German Workers' Party and the anti-Semitic, nationlistic, anti-Marxist ideas of its leader, Anton Drexler. Impressed with Hitler's oratory skills and passion, he invited Hitler to join the party. Hitler accepted, joining in 1919. By 1920, Hitler had become the party's chief propogandist, using his speaking skills to entice crowds to attend his speehes. Hitler used his influence to rename the party to the <em>Nationalsozialistische Deutsche Arbeiterpartei</em>, or National Socialist German Workers' Party, in order to garner more popular support.
          </p>
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
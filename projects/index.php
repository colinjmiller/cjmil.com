<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Projects") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container">
      <h2>Personal Projects</h2>
      <p>
        I learn by doing. Luckily, my favorite hobby also happens to be making things on the computer! Below, you can find some of the personal projects I've created over the years.
      </p>
      <h3>Completed Projects</h3>
      <dl>
        <dt><a href="https://apps.facebook.com/facebookfinal/" target="_blank">The Facebook Final</a></dt>
        <dd class="creation-date">Created: April 26th, 2014</dd>
        <dd>The Facebook Final is a quiz on how well you know your Facebook friends. Three friends and I got together at Facebook headquarters in Seattle for their annual 24-hour Hack-A-Thon. Beginning at 6PM, the four of us caffeinated up and worked steadily through the night and morning.</dd>
      </dl>
      <dl>
        <dt><a href="/portfolio/">Honors Portfolio</a></dt>
        <dd>My Honors Portfolio began as a requirement from the Honors College at the University of Washington, but I used it as a playground for trying new technologies, such as scalable vector graphics and tranlations. The portfolio itself goes off the theme "constant learning," so each subsection tells the story of an experience at UW that impacted me in terms of learning.</dd>
      </dl>
      <dl>
        <dt><a href="http://cjmil.com/Journey/">The Journey</a></dt>
        <dd class="creation-date">Created: Summer 2012</dd>
        <dd>The Journey is a web-based puzzle game I made that features ten levels of increasing difficulty. The user is encouraged to manipulate the URL, examine the source code, or do whatever is necessary to progress. I created this project before formally learning any web development, so the course code is atrocious. The game is currently broken on level 7 due to deprecated PHP function calls. I may revisit this project in the future, as I plan to release a sequal.</dd>
      </dl>
      <dl>
        <dt><a href="http://cjmil.com/roman.html">Roman Numeral Calculator</a></dt>
        <dd class="creation-date">Created: March, 2014</dd>
        <dd>I created this Roman Numeral Calculator in a few hours as part of my application to the Intro TA Tools position at UW. I got the job. This project is quite simple: Put a Roman numeral into the field and it will display the Arabic numeral equivalent.</dd>
      </dl>
      <dl>
        <dt><a href="/projects/survive.exe">Survive</a></dt>
        <dd class="creation-date">Created: Winter 2008</dd>
        <dd>Survive is a game I made as a 15-year-old using <a href="http://gamemaker.nl/" target="_blank">Gamemaker 7</a> during winter break. It features 2D platform-style gameplay and ten levels of varying difficulty as well as five secrets. This project was my first real "coding" project, in that I wrote the game using Gamemaker's built-in language, <a href="http://docs.yoyogames.com/source/dadiospice/002_reference/001_gml%20language%20overview/index.html" target="_blank">GML</a>, as opposed to Gamemaker's drag-and-drop coding system. This game only runs under Windows operating systems.</dd>
      </dl>
      <dl>
        <dt><a href="/projects/wtg3.exe">Willie The Ghost 3</a></dt>
        <dd class="creation-date">Created: April 2005</dd>
        <dd>I created Willie the Ghost 3 as a birthday present for a neighborhood friend and spent around a week developing it. Just like the prequel, I created the game in <a href="http://gamemaker.nl/" target="_blank">Gamemaker 6</a>, but tried community-made plug-ins to expand the capabilities of the engine. As an 11-year-old, I was ecstatic with the result and received one of the greatest compliments from a mutual friend as we played the game:
          <blockquote>I wouldn't rent this game from Blockbuster or anything, but this is actually a really great game, Colin!</blockquote>
        </dd>
        <dd><strong>Note: Only works on Windows XP and below</strong></dd>
      </dl>
      <dl>
        <dt><a href="/projects/wtg2-c.exe">Willie The Ghost 2</a> <a href="projects/wtg2-e.exe">(Easy Version)</a></dt>
        <dd class="creation-date">Created: January 2005</dd>
        <dd>Willie the Ghost 2 is one of my first creations using <a href="http://gamemaker.nl/" target="_blank">Gamemaker 6</a>. This game engine, with its simple drag-and-drop interface, was a godsend to 11-year-old me and propelled me into the world of computer science. The prequel, now lost to time, had no plot and featured only a few levels. This game featured a limited plot and many more levels. I made two versions of this game; the original was impossibly difficult for anyone besides me, so I made an easier version. I have included both. This project taught the invaluable skill of thinking about how a user besides myself would use my projects.</dd>
        <dd><strong>Note: Only works on Windows XP and below</strong></dd>
      </dl>
      <h3>Current Projects</h3>
      <dl>
        <dt><a href="https://chrome.google.com/webstore/detail/deutschify/eblnnhppihhlgjakpchalkikbegdmild" target="_blank">Deutschify!</a></dt>
        <dd>Deutschify is a browser extension for Google Chrome that provides immediate translations from German to English and English to German. It's powered by the <a href="https://en.glosbe.com/a-api" target="_blank">Glosbe API</a>. I created it to solve several personal problems: Navigating to a new site for translation, grammar rules, or verb conjugations is tedious, and t's frustrating to not have constant access to German special characters. I have solved 2/4 of these problems so far and am confident I can solve the rest shortly.</dd>
      </dl>
      <dl>
        <dt>Nuclear Diplomacy</dt>
        <dd>This is a 2D tower-defense game created using <a href="http://unity3d.com/" target="_blank">Unity</a>, a powerful game engine with a large community. Our three-person team has been working slowly but steadily. Since we all lead busy lives, we put in work where we can; I'm hoping to release the game before 2016.</dd>
      </dl>
      <dl>
        <dt>The Journey 2</dt>
        <dd>This sequal to the original is built with Ruby on Rails and has been a wonderful learning experience. I plan to include many more levels than the original and release the game in both English and German. Work on this project is sporadic because it's so creative; if I'm not in the right mind-set then I cannot make progress.</dd>
      </dl>
    </div>
<?= View::footer_logic(false) ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Projects") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container by-vigor">
      <div class="text-center">
        <img class="header-logo" src="/images/by-vigor/by_vigor.png" alt="By Vigor Logo" />
      </div>
      <p class="text-center">
        A game by Colin Miller and Tommy Ager
      </p>
      <p>
        By Vigor is available on the following platforms:
      </p>
      <div class="container text-center">
        <div class="four columns">
          <a href="by-vigor-windows.zip">
            <img class="logo" src="/images/by-vigor/windows_logo.png" alt="Windows Logo" /><br />Windows
          </a>
        </div>
        <div class="four columns">
          <a href="by-vigor-mac.zip">
            <img class="logo" src="/images/by-vigor/mac_logo.png" alt="Macintosh Logo" /><br />Mac
          </a>
        </div>
        <div class="four columns">
          <a href="by-vigor.html">
            <img class="logo" src="/images/by-vigor/browser.jpg" alt="Firefox, Safari, and Internet Explorer Logos" /><br />In-Browser
          </a>
        </div>
      </div>
      <p>
        By Vigor is my first creation with the Unity Game Engine. The game is quite short--perhaps 15-30 minutes in length, but I'm pleased with how it turned out. Thank my very much to my good friend Tommy  for supplying the sounds and music that make the experience.
      </p>
      <p>
        This game is dedicated to Rummi and Campbell: Two of the greatest people I've ever met.
      </p>
    </div>
<?= View::footer_logic(false) ?>
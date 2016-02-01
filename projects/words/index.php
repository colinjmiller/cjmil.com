<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Trip Up | Projects") ?>
  <?= View::navigation_bar("Projects") ?>
    <link href="assets/style.css" rel="stylesheet" />
    <div class="container">
      <div id="main">
        <div id="play-area">
          <header class="text-center">
            <h1>Trip Up</h1>
            <p>A game by Colin Miller</p>
          </header>
          <div id="runner">
            <div class="head"></div>
            <div class="upper-arm left">
              <div class="lower"></div>
            </div>
            <div class="upper-arm right">
              <div class="lower"></div>
            </div>
            <div class="leg left">
              <div class="leg lower"></div>
            </div>
            <div class="leg right">
              <div class="leg lower"></div>
            </div>
          </div>
          <img class="background back" src="assets/land-0.svg" alt="" />
          <img class="background back second" src="assets/land-0.svg" alt="" />
          <img class="background back third" src="assets/land-0.svg" alt="" />
          <img class="background middle" src="assets/land-1.svg" alt="" />
          <img class="background middle second" src="assets/land-1.svg" alt="" />
          <img class="background middle third" src="assets/land-1.svg" alt="" />
          <img class="background front" src="assets/land-2.svg" alt="" />
          <img class="background front second" src="assets/land-2.svg" alt="" />
          <img class="background front third" src="assets/land-2.svg" alt="" />
          <img class="destroyer" id="storm-cloud" src="assets/storm-cloud.svg" alt="" />
          <img class="destroyer" id="boot" src="assets/boot.svg" alt="" />
          <img class="destroyer" class="active goingback" id="nyan" src="assets/nyan.gif" alt="" />
        </div>
      </div>
      <div class="text-center" style="margin-top: 15px;">
        <a href="game.php" class="button button-primary">Play Trip Up</a>
      </div>
      <section>
        <h2>What is this?</h2>
        <p>Trip Up is a game I made in March, 2015 for an 18-hour Hack-a-thon hosted at Facebook headquarters in Seattle, WA. It tests your typing abilities by making you quickly type words before obstacles stop your progress! I'm proud to say that I took 2nd place in the event, despite being a one-person team!</p>
      </section>
      <section>
        <h2>How did this come about?</h2>
        <p>I didn't know what I was going to make going into the event, but I knew I wanted to do something that challenged my front-end skills.</p>
        <p>I began by making an animation of a person running in the foreground with hills moving in the background at different speeds. From there, it seemed logical that this person would interact with some obstacles. Why not tires, crates, and rocks?</p>
        <p>Then came the problem of how those obstacles should be removed. Well, given my delirious state of mind from no sleep and too much caffeine, I came up with giant boots, lightning, and nyan cat. Yeah, I know.</p>
      </section>
      <section>
        <h2>Tell me about the process!</h2>
        <p>The front-end was where most of my experimentation took place. I first made a rough mock of what I expect a runner's body would consist of, which came out to:</p>
<pre><code><?= htmlspecialchars('<div id="runner">
  <div class="head"></div>
  <div class="upper-arm left">
    <div class="lower"></div>
  </div>
  <div class="upper-arm right">
    <div class="lower"></div>
  </div>
  <div class="leg left">
    <div class="leg lower"></div>
  </div>
  <div class="leg right">
    <div class="leg lower"></div>
  </div>
</div>'); ?></code></pre>
        <p>I wrote all of my stylesheets in SCSS, which was fantastic because I could use variables for the runner's body characteristics and write functions to automatically vendor-prefix CSS3 properties. This made my stylesheets quite a bit cleaner than if I had to touch five different places each time I needed to change an animation.</p>
<pre><code><?= htmlspecialchars('// Functions!
@mixin vendor-prefix($name, $argument) {
  -webkit-#{$name}: #{$argument};
  -ms-#{$name}: #{$argument};
  -moz-#{$name}: #{$argument};
  -o-#{$name}: #{$argument};
  #{$name}: #{$argument};
}

@mixin keyframes( $animationName ) {
  @-webkit-keyframes $animationName {
      @content;
  }
  @-moz-keyframes $animationName {
      @content;
  }
  @-o-keyframes $animationName {
      @content;
  }
  @keyframes $animationName {
      @content;
  }
}

// Variables!

$body-animation-time: .4s;
$body-color: rgb(195, 195, 195);
$body-width: 20px;
$body-height: $body-width * 2;
$body-border: ($body-width / 20) solid #222;
$body-animation-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1.0);

@include keyframes(bounce) {
  0% {
    bottom: $body-height * 1.25;
  }

  50% {
    bottom: $body-height;
  }

  100% {
    bottom: $body-height * 1.25;
  }
}

// Soooo much nicer!

#runner {
  position: absolute;
  left: $body-width * 6;
  height: $body-height;
  z-index: 100;
  @include vendor-prefix(transform, rotate(5deg));
  @include vendor-prefix(animation, bounce $body-animation-timing-function $body-animation-time infinite);

  ...

}') ?></code></pre>
        <h3>Neat. How does the game work?</h3>
        <p>On page load, I asynchronously load up over 60,000 words and parse them into a map of length -&gt; word pairs using javascript. That way I can start off the player with small words and ramp up the word length as the game progresses. I butted heads with the difficulty of the game for a bit and decided on making the difficulty ramp up logarithmically. I wanted to ramp up the difficulty quickly because it's reeeeally boring to play this game for more than 50 words when it's easy. This way it ramps up really quickly and then starts plateauing. By the time you have to type 23-letter words, it's pretty much impossible. The difficulty increases by increasing the length of the word and by decreasing the time it takes for obstacles to hit the runner.</p>
        <p>The back-end is all in PHP. Yeah, I know, PHP. But it worked for my purposes and it was super easy to get started, and that's what counts in a hack-a-thon! When the game ends, the player is given a chance to submit their score. This is stored in a MySQL database. Web security is still a new area for me, so I tried to combat cheating by attaching CSRF tokens to each request and by adding a bit of simple logic on the back-end to see what words the user supposedly typed. Oh, and of course, SQL injections are avoided by using prepared statements, so no <a href="https://xkcd.com/327/" target="_blank">little bobby tables problems</a> here. Since this was a hack-a-thon project, I didn't spend too much time in this area of the game. Is it possible to cheat? Of course. Is it worth the time? I mean, maybe, if you're into that.</p>
      </section>
      <div class="text-center" style="margin-bottom: 15px;">
        <a href="game.php" class="button button-primary">Seriously, Play Trip Up</a>
      </div>
    </div>
<?= View::footer_logic(false) ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");
  if (empty($_SESSION['csrf_token'])) {
      if (function_exists('mcrypt_create_iv')) {
          $_SESSION['csrf_token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
      } else {
          $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
      }
  }
  $csrf_token = $_SESSION['csrf_token'];

?>
<?= View::header_logic("Trip Up | Projects") ?>
  <?= View::navigation_bar("Projects") ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
  <link href="assets/style.css" rel="stylesheet" />
  <script src="assets/scripts.js"></script>

  <div class="container u-cf" style="margin-bottom: 15px;">
    <div id="main">
      <h1>Trip Up</h1>
      <div id="play-area">
        <span id="goal">Loading...</span>
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
      <input id="answer" type="text" placeholder="Type Here" />
      <p>
        Current Streak:
        <span id="streak">0</span>
      </p>
      <div class="play-again">
        <a href="./">Play Again?</a>
      </div>
    </div>
  </div>
  <input type="hidden" name="csrf_token" id="csrf-token" value="<?= $csrf_token ?>" />

<?= View::footer_logic(false) ?>

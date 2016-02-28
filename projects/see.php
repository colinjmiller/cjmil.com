<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("The Countdown") ?>
  <?= View::navigation_bar("Projects") ?>
    <div class="container" style="background-image: url('/images/rainier.jpg'); background-size: cover; background-position: center; height: 80vh; padding-top: 5vh;">
      <?php
        $cdate = mktime(14, 0, 0, 3, 24, 2016, 0);
      ?>
      <h1 id="counter" class="text-center"></h1>
    </div>
    <script type="text/javascript">
      (function() {
        var futureDate = new Date(<?= $cdate ?> * 1000);
        function tick() {
          var timeLeft = Math.floor((futureDate - Date.now()) / 1000);
          if (timeLeft > 0) {
            var days = Math.floor(timeLeft / 60 / 60 / 24);
            var hours = Math.floor(timeLeft / 60 / 60) % 24;
            var minutes = Math.floor(timeLeft / 60) % 60;
            var seconds = Math.floor(timeLeft % 60);
            document.getElementById('counter').textContent = days + "D, " + hours + "H, " + minutes + "M, " + seconds + "S";
          } else {
            document.getElementById('counter').textContent = '!!!';
          } 
        }
        tick();
        window.setInterval(tick, 1000);
      })();
    </script>
<?= View::footer_logic(false) ?>
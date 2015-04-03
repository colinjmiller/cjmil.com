<?php

session_start();
if (isset($_SESSION["language"]) && $_SESSION["language"] == "de") {
  require_once("{$_SERVER['DOCUMENT_ROOT']}/languages/de.php");
} else {
  require_once("{$_SERVER['DOCUMENT_ROOT']}/languages/en.php");
}

class View {
  public static function header_logic($title = "cjmil.com") {
    ?>
    <!DOCTYPE html>
    <html lang="<?= t('lang') ?>">
      <head>
        <meta charset="utf-8">
        <title><?= $title ?> | Colin J. Miller</title>
        <meta name="description" content="cjmil.com houses the work of Colin J. Miller, a computer scientist and web developer from the Seattle area">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" type="image/png" href="/images/favicon.png" />
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-24488311-7']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="/javascript/language.js"></script>
      </head>
      <body>
    <?php
  }

  public static function footer_logic($translations = true) {
    ?>
        <footer class="container">
          Copyright &copy; <?= date("Y") ?> Colin Miller
          <?php if ($translations) { ?>
          <div class="language-options">
            <a href="#" data-action="switch-language">
             <?= t('switch_language') ?>
            </a>
          </div>
          <?php } ?>
        </footer>
        <?php if ($translations) { ?>
        <div class="language modal backdrop hide"></div>
        <div class="language modal container hide">
          <header class="modal header">
            <?= t('choose_language') ?>
          </header>
          <div class="modal body row">
            <div class="six columns">
              <a class="flag" href="#" data-language="en">
                <img src="/images/american_flag.svg" alt="<?= t('english') ?>" />
              </a>
            </div>
            <div class="six columns">
              <a class="flag" href="#" data-language="de">
                <img src="/images/germany_flag.svg" alt="<?= t('german') ?>" />
              </a>
            </div>
          </div>
          <footer class="modal footer">
            <button class="cancel">Cancel</button>
          </footer>
        </div>
        <?php } ?>
      </body>
    </html>
    <?php
  }

  public static function navigation_bar($selected = "") {
    $menu = array(
      'home' => array('text' => t('home'), 'url' => "/"),
      'projects' => array('text' => t('projects'), 'url' => '/projects/'),
      'writing' => array('text' => t('writing'), 'url' => '/writing'),
      'linkedin' => array('text' => t('linkedin'), 'url' => 'http://www.linkedin.com/profile/view?id=273021207')
    );

    ?>
    <div class="container navbar">
      <div class="banner">
        <a href="/">cjmil.com</a>
      </div>
      <input type="checkbox" id="mobile-nav" />
      <label for="mobile-nav"><img src="/images/mobile_menu.svg" alt="Mobile Menu" /></label>
      <div class="row">
        <?php
          foreach($menu as $key => $item) { 
            $selection = (strcasecmp($key, $selected) == 0) ? 'current' : '';
            $external_link = (strpos($item['url'], '/') != 0) ? 'target="_blank"' : "";
            ?>
            <a class="navbar-item three columns <?= $selection ?>" <?= $external_link ?> href="<?= $item['url'] ?>">
              <div class="caret-right"></div>
              <span><?= $item['text'] ?></span>
            </a>
          <?php
          }
        ?>
      </div>
    </div>
    <?php
  }
}

?>
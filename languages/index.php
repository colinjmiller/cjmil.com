<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Home") ?>
    <div class="container">
      <div class="language modal backdrop"></div>
        <div class="language modal container">
          <header class="modal header">
            <?= t('choose_language') ?>
          </header>
          <div class="modal body row">
            <div class="six columns">
              <form action="/php/language.php" method="post">
                <input type="hidden" name="language" value="en" />
                <input type="submit" value="<?= t('english') ?>" />
              </form>
            </div>
            <div class="six columns">
              <form action="/php/language.php" method="post">
                <input type="hidden" name="language" value="de" />
                <input type="submit" value="<?= t('german') ?>" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?= View::footer_logic(false) ?>
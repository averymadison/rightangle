<?php snippet('nav') ?>

<div class="wrapper error">

  <div class="page-content">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
  </div>

  <a href="<?= page('home')->url() ?>" class="button">Return home</a>

</div>

<?php snippet('html_footer') ?>

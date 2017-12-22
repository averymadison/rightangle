<?php snippet('nav') ?>

<div class="wrapper">
  <div class="page-title">
    <h1><?php echo $page->title()->html() ?></h1>
  </div>

  <div class="page-content">
    <?php echo $page->background()->kirbytext() ?>
  </div>

  <?php snippet('map') ?>

  <div class="page-content">
    <?php echo $page->beliefs()->kirbytext() ?>
  </div>

  <button href="<?= page('contact')->url() ?>">Get in touch</button>
  <button href="<?= page('process')->url() ?>">Learn about my process</button>
</div>


<?php snippet('footer') ?>

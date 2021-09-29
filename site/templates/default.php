<?php snippet('nav') ?>

<div class="wrapper">
  <div class="page-title">
    <h1><?php echo $page->title()->html() ?></h1>
  </div>

  <div class="page-content">
    <?php echo $page->text()->kirbytext() ?>
  </div>
</div>

<?php snippet('footer') ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>
    <?php if($page->isHomePage()): ?>
      <?= $site->title()->html() ?>
    <?php else: ?>
      <?= $page->title()->html() ?> &middot; <?= $site->title()->html() ?>
    <?php endif ?>
  </title>

  <link rel="stylesheet" href="assets/css/main.css">
  <script src="node_modules/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="node_modules/isotope-layout/dist/isotope.pkgd.min.js"></script>

</head>
<body>
  <header>
    <div class="logo">
      <a href="<?= $site->homePage() ?>">
        <img src="assets/images/logo.svg" alt="<?= $site->title() ?>">
      </a>
    </div>
    <?php
      $items = $pages->visible();
      if($items->count()):
      ?>
      <nav>
        <?php foreach($items as $item): ?>
          <a class="nav-item <?php e($item->isOpen(), 'active') ?>" href="<?php echo $item->url() ?>">
            <span class="nav-text"><?php echo $item->title()->html() ?></span>
          </a>
        <?php endforeach ?>
      </nav>
    <?php endif; ?>
    <div class="copyright">
      <?= $site->copyright()->kirbytext() ?>
    </div>
  </header>
  <main>

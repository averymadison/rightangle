<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta property="og:title" content="<?= $page->title() ?>">
  <?php if($page->text()): ?>
    <meta property="og:description" content="<?= $page->text() ?>">
  <?php endif ?>
  <meta property="og:image" content="assets/images/og_featuredimage.jpg">
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:site_name" content="<?= $site->title() ?>">

  <title>
    <?php if($page->isHomePage()): ?>
      <?= $site->title()->html() ?>
    <?php else: ?>
      <?= $page->title()->html() ?> &middot; <?= $site->title()->html() ?>
    <?php endif ?>
  </title>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30064622-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-30064622-1');
  </script>

  <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
  <header id="nav">
    <div class="logo">
      <a href="<?= page('home')->url() ?>">
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

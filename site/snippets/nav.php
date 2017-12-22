<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

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
    <nav>
      <a class="nav-item" href="<?= $site->homePage() ?>">
        <span class="nav-text"><?= $site->homePage()->title() ?></span>
      </a>
      <a class="nav-item" href="<?= $pages->find('about')->url() ?>">
        <span class="nav-text"><?= $pages->find('about')->title() ?></span>
      </a>
      <a class="nav-item" href="<?= $pages->find('process')->url() ?>">
        <span class="nav-text"><?= $pages->find('process')->title() ?></span>
      </a>
      <a class="nav-item" href="<?= $pages->find('contact')->url() ?>">
        <span class="nav-text"><?= $pages->find('contact')->title() ?></span>
      </a>
    </nav>
    <div class="copyright">
      <?= $site->copyright()->kirbytext() ?>
    </div>
  </header>
  <main>

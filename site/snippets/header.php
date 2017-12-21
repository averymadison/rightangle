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
    <a class="logo" href="<?= $site->homePage() ?>">
      <img src="assets/images/logo.svg" alt="<?= $site->title() ?>">
    </a>
    <?php snippet('nav') ?>
  </header>
  <main>

<?php snippet('nav') ?>

<div class="wrapper">
  <div class="page-title">
    <h1><?php echo $page->title()->html() ?></h1>
  </div>

  <div class="page-content">

    <form method="post">

      <?php if($alert): ?>
      <div class="alert">
        <ul>
          <?php foreach($alert as $message): ?>
          <li><?php echo html($message) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      <?php endif ?>

      <div class="field">
        <label for="name">Name <abbr title="required">*</abbr></label>
        <input type="text" id="name" name="name">
      </div>

      <div class="field">
        <label for="email">Email <abbr title="required">*</abbr></label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="field">
        <label for="text">Text <abbr title="required">*</abbr></label>
        <textarea id="text" name="text" required></textarea>
      </div>

      <input type="submit" name="submit" value="Submit">

    </form>

  </div>

<?php snippet('footer') ?>

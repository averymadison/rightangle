  <?= \ka\kirby\PhotoSwipe::init(); ?>
  <footer itemscope itemtype="http://schema.org/Person">
    <h3><span itemprop="name"><?php echo $site->name() ?></span>, <span itemprop="jobTitle"><?php echo $site->jobtitle() ?></span></h3>
    <span itemprop="telephone"><?php echo $site->phone() ?></span>
    <a href="mailto:me@me.com" itemprop="email"><?php echo $site->email() ?></a>
  </footer>
  </body>
</html>

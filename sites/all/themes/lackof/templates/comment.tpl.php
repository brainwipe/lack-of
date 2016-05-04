<?php
?>
<div class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>
  <div class="clearfix">
  <?php print render($content['links']) ?>
  
  <?php if ($new): ?>
    <span class="new"><?php print drupal_ucfirst($new) ?></span>
  <?php endif; ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php hide($content['links']); print render($content); ?>
      
      <?php print $picture ?>
      <span class="submitted"><?php print $submitted ?></span>
    </div>
  </div>
</div>
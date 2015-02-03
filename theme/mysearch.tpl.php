<?php
/**
 * @file
 *
 * This is dummy tpl. Pls redefine it in your theme.
 *
 * Available variables:
 *  - $result
 *  - $message
 *  - $data
 */
?>
<div class="search-results">
  <p><?php print $message; ?></p>
  <?php if ((!empty($results))): ?>
  <ul>
    <?php print $results; ?>
  </ul>
  <?php endif; ?>
</div>
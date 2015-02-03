<?php
/**
 * Move to theme folder.
 */
?>
<li>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    <?php print render($title_suffix); ?>
  </div>
</li>
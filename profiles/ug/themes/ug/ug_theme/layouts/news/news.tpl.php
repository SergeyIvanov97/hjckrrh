<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * a (4:8) ratio between column widths.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="row">
  <div class="col-sm-12"><?php print $content['top']; ?></div>  
</div>
<div class="row">
  <div class="col-sm-4"><?php print $content['left']; ?></div>
  <div class="col-sm-8"><?php print $content['right']; ?></div>
</div>
<div class="row">
  <div class="col-sm-12"><?php print $content['bottom']; ?></div>
</div>
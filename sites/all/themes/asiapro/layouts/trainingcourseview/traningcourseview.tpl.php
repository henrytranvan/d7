<?php
/**
 * @file
 * Template for Panopoly trainingcourse.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display trainingcourse clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <div class="trainingcourse-container trainingcourse-column-content clearfix">
    <div class="trainingcourse-column-content-region trainingcourse-column1 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="trainingcourse-column-content-region trainingcourse-column2 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column2-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
    <div class="trainingcourse-column-content-region trainingcourse-column3 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column3-inner panel-panel-inner">
        <?php print $content['column3']; ?>
      </div>
    </div>
	
	    <div class="trainingcourse-column-content-region trainingcourse-column4 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column4-inner panel-panel-inner">
        <?php print $content['column4']; ?>
      </div>
    </div>
    <div class="trainingcourse-column-content-region trainingcourse-column5 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column5-inner panel-panel-inner">
        <?php print $content['column5']; ?>
      </div>
    </div>
    <div class="trainingcourse-column-content-region trainingcourse-column6 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column6-inner panel-panel-inner">
        <?php print $content['column6']; ?>
      </div>
    </div>	
    <div class="trainingcourse-column-content-region trainingcourse-column7 panel-panel">
      <div class="trainingcourse-column-content-region-inner trainingcourse-column7-inner panel-panel-inner">
        <?php print $content['column7']; ?>
      </div>
    </div>	
  </div>
</div><!-- /.trainingcourse -->

<?php
/**
 * @file
 * Template for dynamic columns tobyj.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */

if ($content['column3'] && empty($content['column4'])) {
	$content['column4'] = $content['column3'];
	$content['column3'] = NULL;
}
 
?>

<div class="panel-display tobyj clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>

    <div class="c12">
        <?php if ($content['column1']): ?>
        <aside class="col c1"><div class="inner">
              <?php print $content['column1']; ?><div class="closer">close</div>
        </div></aside>
        <?php endif; ?>
        
        <div class="col c2">
            <?php if ($content['column2_top']): ?>
              <div id="content-top" class="clearfix"><div class="inner"><?php print $content['column2_top'] ?></div></div>
            <?php endif; ?>
            
            <div class="inner">
              <?php print $content['column2'] ?>
            </div>
            
            <?php if ($content['column2_btm']): ?>
              <div id="content-bottom" class="clearfix"><div class="inner"><?php print $content['column2_btm'] ?></div></div>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="c34">
        <aside class="col c3"><div class="inner">
            <?php if ($content['column3']): ?>
              <?php print $content['column3']; ?>
            <?php endif; ?>
        </div></aside>
        
        <aside class="col c4"><div class="inner">
            <?php if ($content['column4']): ?>
              <?php print $content['column4']; ?>
            <?php endif; ?>
        </div></aside>
    </div> <!--/c34 -->

</div><!-- /.tobyj -->

<?php //if (col3[sidebar_second] is present & col4[sidebar_third] is empty) push col3 to col4

	if ($page['sidebar_second'] && empty($page['sidebar_third'])) {
		$page['sidebar_third'] = $page['sidebar_second'];
		$page['sidebar_second'] = NULL;
	}
?>

<div id="wrap">
    <div class="cols-bg">
        <div class="col c1"></div>
        <div class="col c2"></div>
        <div class="col c3"></div>
        <div class="col c4"></div>
    </div>

    <div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
        <div class="cols clearfix">
            <div id="x">
                <header id="header" class="clearfix">
                
                    <?php if ($site_name || $site_slogan): ?>
                      <div id="name-and-slogan"  class="visuallyhidden">
                        <?php if ($site_name): ?>
                          <?php if ($title): ?>
                            <div id="site-name">
                              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                            </div>
                          <?php else: /* Use h1 when the content title is empty */ ?>
                            <h1 id="site-name">
                              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                            </h1>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($site_slogan): ?>
                          <div id="site-slogan"><?php print $site_slogan; ?></div>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>
                    
                    <?php if ($logo): ?>
                      <a id="logo" href="<?php print $front_page; ?>" title="<?php print $site_name; ?> - <?php print t('Home'); ?>" rel="home">
                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" title="<?php print $site_name; ?> - Home" /></a>
                    <?php endif; ?>
                    
                    <?php if ($page['header']): ?>
                      <div id="header-region" class="clearfix">
                        <?php print render($page['header']); ?>
                      </div>
                    <?php endif; ?>
                
                    <?php //if ($main_menu || $secondary_menu || $page['navbar']): ?>
                      <nav id="nav" class="menu <?php !empty($main_menu) ? print "with-primary" : ''; !empty($secondary_menu) ? print " with-secondary" : ''; ?>">
                        <?php //print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
                        <?php //print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
                        <?php if ($page['navbar']): ?>
                        	<?php print render($page['navbar']); ?>
						<?php endif; ?>
                      </nav>
                    <?php //endif; ?>
                    
                    
                    <div id="breadcrumbs" class="clearfix">
                        <?php print $breadcrumb; ?>
                    </div>
                </header>
                
                <?php if ($page['highlight']): ?>
				  <div id="highlight" class="clearfix"><div class="inner"><?php print render($page['highlight']) ?></div></div>
                <?php endif; ?>
                
                <?php if ($title|| $messages || $tabs || $action_links): ?>
                  <div id="content-header" class="clearfix"><div class="inner">
                    <?php if ($title): ?>
                      <h1 class="title"><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php print $messages; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($tabs): ?>
                      <div class="tabs"><?php print render($tabs); ?></div>
                    <?php endif; ?>
                    <?php if ($action_links): ?>
                      <ul class="action-links"><?php print render($action_links); ?></ul>
                    <?php endif; ?>
                  </div></div> <!-- /#content-header -->
                <?php endif; ?>
                
            </div><!--/#x-->
            
            <?php //HIDE REGIONS WHEN PAGE IS A PANEL
			
			$disable_regions = FALSE;
			$panel = panels_get_current_page_display();
			if ($panel) {
				if ($panel->layout == "tobyj") {$disable_regions = TRUE;}
			}
			
			if (!$disable_regions) :
			?>
            <div class="c12">
            
                <aside class="col c1"><div class="inner">
				  <?php if ($page['sidebar_first']): ?>
                    <?php print render($page['sidebar_first']); ?><div class="closer">close</div>
                  <?php endif; ?>
                </div></aside>
            
                
                <div class="col c2">
                    
                    <?php if ($page['content_top']): ?>
                      <div id="content-top" class="clearfix"><div class="inner"><?php print render($page['content_top']) ?></div></div>
                    <?php endif; ?>
                    
                    <div class="inner">
                    <?php //if (!drupal_is_front_page()): ?>
                      <?php print render($page['content']) ?>
                    <?php// endif; ?>
                    </div>
                    <?php print $feed_icons; ?>
                    <?php if ($page['content_bottom']): ?>
                      <div id="content-bottom" class="clearfix"><div class="inner"><?php print render($page['content_bottom']) ?></div></div>
                    <?php endif; ?>
                    
                </div>
            </div>
            <div class="c34">
            
              <aside class="col c3"><div class="inner">
			  	<?php if ($page['sidebar_second']): ?>
                  <?php print render($page['sidebar_second']); ?>
              	<?php endif; ?>
              </div></aside>
              
              <aside class="col c4"><div class="inner">
			    <?php if ($page['sidebar_third']): ?>
                  <?php print render($page['sidebar_third']); ?>
                <?php endif; ?>
              </div></aside>
              
            </div> <!--/c34 -->
            <?php
			else : print render($page['content']);
			endif;
            ?>
        </div> <!--/cols -->
    </div> <!--/#page -->

   <div class="footerpush"></div>

</div><!--/#wrap-->
<?php if ($page['footer']): ?>
<footer id="footer"><div class="inner">
	<?php print render($page['footer']); ?>
</div></footer>
<?php endif; ?>
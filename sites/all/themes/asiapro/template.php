<?php

/*
 * Here we override the default HTML output of drupal.
 * refer to http://drupal.org/node/550722
 */

// Auto-rebuild the theme registry during theme development.
if (theme_get_setting('clear_registry')) {
  // Rebuild .info data.
  system_rebuild_theme_data();
  // Rebuild theme registry.
  drupal_theme_rebuild();
}
// Add Zen Tabs styles
if (theme_get_setting('asiapro_tabs')) {
  drupal_add_css( drupal_get_path('theme', 'asiapro') . '/css/tabs.css');
}

// Add Jquery UI Accordion so we can use on our pages
/*
drupal_add_library('system', 'ui.accordion');
drupal_add_library('system', 'effects.slide'); // Blind,Clip,Drop, Explode, Fade, Fold , Puff , Slide etc.
drupal_add_js('jQuery(document).ready(function(){jQuery(".view-grouping").accordion({event: "click hoverintent", collapsible: true, active: false, autoHeight: false, heightStyle: "content"});});', 'inline');
// Drop the shoddy Jquery UI css
function asiapro_css_alter(&$css) {
	foreach ($css as $key => $value) {
    	if ($value['data'] == 'sites/all/modules/jquery_update/replace/ui/themes/base/minified/jquery.ui.theme.min.css' ||
			$value['data'] == 'sites/all/modules/jquery_update/replace/ui/themes/base/minified/jquery.ui.core.min.css' ||
			$value['data'] == 'sites/all/modules/jquery_update/replace/ui/themes/base/minified/jquery.ui.accordion.min.css') {
			$exclude[$key] = FALSE;
		}
	}
	$css = array_diff_key($css, $exclude);
}
*/

/**
 * Preprocesses the wrapping HTML.
 *
 * @param array &$variables
 *   Template variables.
 */
function asiapro_preprocess_html(&$vars) {
  
  //cols conditional body classes:
  $cols = '';
  if (!empty($vars['page']['sidebar_first'])) {$cols = $cols . '1';}
  if (!empty($vars['page']['sidebar_second']) && !empty($vars['page']['sidebar_third'])) {$cols = $cols . '3';}
  if ((!empty($vars['page']['sidebar_second']) && empty($vars['page']['sidebar_third'])) || !empty($vars['page']['sidebar_third'])) {$cols = $cols . '4';}
  
  $panels_display = panels_get_current_page_display();
  if ($panels_display) {
	if ($panels_display->layout == "tobyj") {
	  //redo cols classes for panels
	  $cols = '';
	  if (isset($panels_display->panels['column1'])) {$cols = $cols . '1';}
  	  if (isset($panels_display->panels['column3']) && isset($panels_display->panels['column4'])) {$cols = $cols . '3';}
	  if ((isset($panels_display->panels['column3']) && !isset($panels_display->panels['column4'])) || isset($panels_display->panels['column4'])) {$cols = $cols . '4';}
	}
  }
  $vars['classes_array'][] = 'cols' . $cols;
  
	
  if (!module_exists('conditional_styles')) {
    asiapro_add_conditional_styles();
  }
  // Setup IE meta tag to force IE rendering mode
  $meta_ie_render_engine = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'content' =>  'IE=edge,chrome=1',
      'http-equiv' => 'X-UA-Compatible',
    )
  );
  //  Mobile viewport optimized: h5bp.com/viewport
  $meta_viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'content' =>  'width=device-width',
      'name' => 'viewport',
    )
  );

  // Add header meta tag for IE to head
  drupal_add_html_head($meta_ie_render_engine, 'meta_ie_render_engine');
  drupal_add_html_head($meta_viewport, 'meta_viewport');
}

function asiapro_preprocess_page(&$vars, $hook) {
	
  if (isset($vars['node_title'])) {
    $vars['title'] = $vars['node_title'];
  }
  // Adding a class to #page in wireframe mode
  if (theme_get_setting('wireframe_mode')) {
    $vars['classes_array'][] = 'wireframe-mode';
  }
  // Adding classes whether #navigation is here or not
  if (!empty($vars['main_menu']) or !empty($vars['sub_menu'])) {
    $vars['classes_array'][] = 'with-navigation';
  }
  if (!empty($vars['secondary_menu'])) {
    $vars['classes_array'][] = 'with-subnav';
  }
  
  // --- Specific JS and CSS ---
  //front page:  
  if ($vars['is_front']) {
	  drupal_add_css(drupal_get_path('theme', 'asiapro') .'/css/royalslider.css', 'file');
	  drupal_add_css(drupal_get_path('theme', 'asiapro') .'/css/rs-default.css', 'file');
	  drupal_add_js(drupal_get_path('theme', 'asiapro') .'/js/libs/jquery.royalslider.custom.min.js', 'file');
	  drupal_add_js(drupal_get_path('theme', 'asiapro') .'/js/front.js', 'file');
  }
  
  if(isset($vars['node']) && is_object($vars['node']) && $vars['node']->type ='training'){
      drupal_add_css(drupal_get_path('theme', 'asiapro') .'/css/custom-royal.css', 'file');  
      drupal_add_css(drupal_get_path('theme', 'asiapro') .'/css/royalslider.css', 'file');
	  drupal_add_css(drupal_get_path('theme', 'asiapro') .'/css/rs-default.css', 'file');
	  drupal_add_js(drupal_get_path('theme', 'asiapro') .'/js/libs/jquery.royalslider.custom.min.js', 'file');  
	  drupal_add_js(drupal_get_path('theme', 'asiapro') .'/js/trainingslide.js', 'file');  
  }
  
 
}

function asiapro_preprocess_node(&$vars) {
  // Add a striping class.
  $vars['classes_array'][] = 'node-' . $vars['zebra'];
}

function asiapro_preprocess_block(&$vars, $hook) {
  // Add a striping class.
  $vars['classes_array'][] = 'block-' . $vars['zebra'];
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function asiapro_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];  // Determine if we are to display the breadcrumb.
  $show_breadcrumb = theme_get_setting('asiapro_breadcrumb');
  if ($show_breadcrumb == 'yes' || ($show_breadcrumb == 'admin' && arg(0) == 'admin')) {

    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = theme_get_setting('asiapro_breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }
    // Return the breadcrumb with separators.
    if (!empty($breadcrumb)) {
      $breadcrumb_separator = theme_get_setting('asiapro_breadcrumb_separator');
      $trailing_separator = $title = '';
      if (theme_get_setting('asiapro_breadcrumb_title')) {
        $item = menu_get_item();
        if (!empty($item['tab_parent'])) {
          // If we are on a non-default tab, use the tab's title.
          $title = check_plain($item['title']);
        }
        else {
          $title = drupal_get_title();
        }
        if ($title) {
          $trailing_separator = $breadcrumb_separator;
        }
      }
      elseif (theme_get_setting('asiapro_breadcrumb_trailing')) {
        $trailing_separator = $breadcrumb_separator;
      }
      // Provide a navigational heading to give context for breadcrumb links to
      // screen-reader users. Make the heading invisible with .element-invisible.
      $heading = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

      return $heading . '<div class="breadcrumb">' . implode($breadcrumb_separator, $breadcrumb) . $trailing_separator . $title . '</div>';
    }
  }
  // Otherwise, return an empty string.
  return '';
}

/*
 *   Converts a string to a suitable html ID attribute.
 *
 *    http://www.w3.org/TR/html4/struct/global.html#h-7.5.2 specifies what makes a
 *    valid ID attribute in HTML. This function:
 *
 *   - Ensure an ID starts with an alpha character by optionally adding an 'n'.
 *   - Replaces any character except A-Z, numbers, and underscores with dashes.
 *   - Converts entire string to lowercase.
 *
 *   @param $string
 *     The string
 *   @return
 *     The converted string
 */


function asiapro_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
  // If the first character is not a-z, add 'n' in front.
  if (!empty($string)) {
	  if (!ctype_lower($string{0})) { // Don't use ctype_alpha since its locale aware.
		$string = 'id' . $string;
	  }
  }
  return $string;
}

/**
 * Adds conditional CSS from the .info file.
 *
 * Copy of conditional_styles_preprocess_html().
 */
function asiapro_add_conditional_styles() {
  // Make a list of base themes and the current theme.
  $themes = $GLOBALS['base_theme_info'];
  $themes[] = $GLOBALS['theme_info'];
  foreach (array_keys($themes) as $key) {
    $theme_path = dirname($themes[$key]->filename) . '/';
    if (isset($themes[$key]->info['stylesheets-conditional'])) {
      foreach (array_keys($themes[$key]->info['stylesheets-conditional']) as $condition) {
        foreach (array_keys($themes[$key]->info['stylesheets-conditional'][$condition]) as $media) {
          foreach ($themes[$key]->info['stylesheets-conditional'][$condition][$media] as $stylesheet) {
            // Add each conditional stylesheet.
            drupal_add_css(
              $theme_path . $stylesheet,
              array(
                'group' => CSS_THEME,
                'browsers' => array(
                  'IE' => $condition,
                  '!IE' => FALSE,
                ),
                'every_page' => TRUE,
              )
            );
          }
        }
      }
    }
  }
}


/**
 * Generate the HTML output for a menu link and submenu.
 *
 * @param $variables
 *   An associative array containing:
 *   - element: Structured array data for a menu link.
 *
 * @return
 *   A themed HTML string.
 *
 * @ingroup themeable
 */

function asiapro_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // Adding a class depending on the TITLE of the link (not constant)
  $element['#attributes']['class'][] = asiapro_id_safe($element['#title']);
  // Adding a class depending on the ID of the link (constant)
  if (isset($element['#original_link']['mlid']) && !empty($element['#original_link']['mlid'])) {
    $element['#attributes']['class'][] = 'mid-' . $element['#original_link']['mlid'];
  }
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Override or insert variables into theme_menu_local_task().
 */
function asiapro_preprocess_menu_local_task(&$variables) {
  $link =& $variables['element']['#link'];

  // If the link does not contain HTML already, check_plain() it now.
  // After we set 'html'=TRUE the link will not be sanitized by l().
  if (empty($link['localized_options']['html'])) {
    $link['title'] = check_plain($link['title']);
  }
  $link['localized_options']['html'] = TRUE;
  $link['title'] = '<span class="tab">' . $link['title'] . '</span>';
}

/*
 *  Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */

function asiapro_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;

}

/*
 *  add menu-imgs class to this  menu (gateway page menu block in panels)
 */
function asiapro_menu_tree__menu_block__ctools_main_menu_1($variables) {
  return '<ul class="menu menu-imgs clearfix">' . $variables['tree'] . '</ul>';
}

/*
 *  add images to menu link output
 */
function asiapro_menu_link__menu_block__ctools_main_menu_1($variables) {
  $img = NULL;
  $title = '';
	
  $element = $variables['element'];
  
  if (isset($variables['element']['#original_link']['options']['content']['image'])) {
	if (isset($variables['element']['#localized_options']['attributes']['title'])) {
		$title = $variables['element']['#localized_options']['attributes']['title'];
	}
	$imgfid = $variables['element']['#original_link']['options']['content']['image'];
	$imguri = file_load($imgfid)->uri;
	$img = '<img src="' . file_create_url($imguri) . '" />';
	$element['#attributes']['class'][] = 'has-img';
  } else {
	$img = '<img src="/sites/default/themes/asiapro/img/menu-img-default.png" height="160" width="160" />';
	$element['#attributes']['class'][] = 'no-img';
  }
  
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  //set html to 1 for img link
  $imgoptions = $element['#localized_options'];
  $imgoptions['html'] = 1;
  //button css
  $btnoptions = $element['#localized_options'];
  unset($btnoptions['attributes']['title']);
  $btnoptions['attributes']['class'] = array('btn');
  
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . ($img ? l($img, $element['#href'], $imgoptions) : '') . '<div class="menu-desc">' . $output . '<br>' .
  '<p class="menu-title">' . $title . '</p>' . l("Read more", $element['#href'], $btnoptions) . '</div>' . $sub_menu . "</li>\n";
	
}
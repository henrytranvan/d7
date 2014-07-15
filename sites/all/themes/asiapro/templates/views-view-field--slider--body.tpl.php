<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */

 /**
 * SLIDER FIELDS
 * Note: All fields in the slider view are set to not display in the view, except 'body' (the last field).
 * This template prints all the fields with required html.
 */
  
 $bg_opacity = $view->render_field('field_slider_bg_opacity', $view->row_index);
 $img_mobile = $view->render_field('field_display_image_on_mobile', $view->row_index);
 $disp_type = $view->render_field('field_slider_display_type', $view->row_index); //img, txt, img-txt
 $image_url = $view->render_field('field_slider_image', $view->row_index);
 $link_url = $view->render_field('field_slider_link', $view->row_index);
 $body = $row->{$field->field_alias};
 
?>

<?php if (!empty($link_url)): ?>
  <a class="<?php print $disp_type; ?> mobile-img-<?php print $img_mobile; ?>" href="<?php print $link_url; ?>">
<?php else: ?>
  <div class="<?php print $disp_type; ?> mobile-img-<?php print $img_mobile; ?>">
<?php endif; ?>
	
	<?php
	switch ($disp_type) {
    case 'img':
        echo '<img class="rsImg" src="' . $image_url . '" alt="' . $row->node_title . '" />';
        break;
    case 'txt':
        echo '<div class="rsContent">' . $body . '</div>';
        break;
    case 'img-txt':
        echo '<img class="rsImg" src="' . $image_url . '" alt="' . $row->node_title . '" />';
		echo '<div class="caption">' . $body . '</div>';
        break;
	}
	?>

<?php if (!empty($link_url)): ?>
  </a>
<?php else: ?>
  </div>
<?php endif; ?>
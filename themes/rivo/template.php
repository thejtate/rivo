<?php
define('__THEME_PATH', drupal_get_path('theme', 'rivo'));
//define('ARL_WEBFORM_REQUEST_QUOTE', 2);

/**
 * Implements template_preprocess_html().
 */
function rivo_preprocess_html(&$vars) {

  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
    ),
  );

  drupal_add_html_head($viewport, 'viewport');

  $view = views_get_page_view();
  if (is_object($view)) {
    switch ($view->name) {
      case 'home':
        $vars['classes_array'][] = '';
        break;
    }
  }

  $node = menu_get_object('node', 1);
  if ($node) {
    switch ($node->type) {
      case 'home':
        $vars['classes_array'][] = '';
        break;
    }
  }
}

/**
 * Implements template_preprocess_page().
 */
function rivo_preprocess_page(&$vars) {

  if (isset($vars['node'])) {
    $node = $vars['node'];
  }
  else {
    //try load webform node
    $node = menu_get_object('webform_menu');
  }

}

/**
 * Implements hook_preprocess_views_view().
 */
function rivo_preprocess_views_view(&$vars) {
  switch ($vars['name']) {
    case "news":

      break;
  }
}

/**
 * Implements template_preprocess_node().
 */
function rivo_preprocess_node(&$vars) {
  $node = $vars['node'];
  if (!$vars['page']) {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
  }

  switch ($node->type) {
    case 'home':

      break;
  }
}

/**
 * Implements hook_form_alter().
 */
function rivo_form_alter(&$form, &$form_state, $form_id) {
//  switch ($form_id) {
//    case 'webform_client_form_' . ARL_WEBFORM_REQUEST_QUOTE:
//
//      break;
//  }
}

/**
 * Implements hook_preprocess_field().
 */
//function rivo_preprocess_field(&$vars) {
//  $element = &$vars['element'];
//  switch ($element['#field_name']) {
//    case 'field_home_tabs':
//      $field_array = array(
//        'field_home_tabs_small_icon',
//        'field_home_tabs_title',
//      );
//      $fc_rows = _arl_rows_from_field_collection($vars, $field_array);
//      $fc_rows = !empty($fc_rows) ? $fc_rows : array();
//      $list_items = array();
//      foreach ($fc_rows as $key => $row) {
//        $icon = !empty($row['field_home_tabs_small_icon']) ?
//          $row['field_home_tabs_small_icon'] : '';
//        if ($icon) {
//          $icon_url = !empty($icon['uri']) ? file_create_url($icon['uri']) : '';
//          if ($icon_url) {
//            $icon_vars = array(
//              'path' => $icon_url,
//            );
//            $icon = '<span class="ico">' . theme('image', $icon_vars) . '</span>';
//          }
//        }
//        $title = !empty($row['field_home_tabs_title']) ?
//          $icon . $row['field_home_tabs_title'] : '';
//        if ($title) {
//          $list_items[] = '<a href="#">' . $title . '</a>';
//        }
//      }
//      $vars['tabs_list'] = theme('item_list', array('items' => $list_items));
//      break;
//    case 'field_home_forms':
//      $items = !empty($vars['items']) ? $vars['items'] : array();
//      foreach ($items as $key => $item) {
//        $description = !empty($item['#file']->description) ?
//          $item['#file']->description : '';
//        if ($description) {
//          $vars['items'][$key]['#text'] = $description;
//        }
//      }
//      break;
//  }
//}

/**
 * Implements template_preprocess_block().
 */
//function rivo_preprocess_block(&$vars) {
//
//  switch ($vars['block']->delta) {
//    case 'user-info':
//      $vars['classes_array'][] = 'user-info';
//      break;
//    case 'client-block-' . ARL_WEBFORM_REQUEST_QUOTE:
//      $vars['classes_array'][] = 'form';
//      $vars['classes_array'][] = 'form-quote';
//      break;
//  }
//}

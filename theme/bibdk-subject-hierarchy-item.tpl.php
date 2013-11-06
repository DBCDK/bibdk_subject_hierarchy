<?php
/**
 * @file
 * Theme implementation for bibdk_subject_hierarchy_item.
 */
?>

        <div class="themes__sublists">
          <div class="themes__close-button icon icon-blue-x">&nbsp;</div>
          <div class="themes__breadcrumb">
<?php foreach ( $variables['breadcrumbs'] as $breadcrumb ) {
    echo l($breadcrumb['ord'], $breadcrumb['url'], $breadcrumb['attributes']);
} ?>
          </div>
          <div class="themes__sublist">
            <ul>
<?php foreach ( $variables['hierarchy']['term'] as $key => $item ) {
    if ( !empty($item['cql']) && empty($item['term']) ) {
      $url = 'search/' . $variables['search_path'] . '/' . trim($item['cql']);
      $attributes['attributes'] = array();
    } else {
      $url = 'bibdk_subject_hierarchy/nojs/' . $variables['current_key'] . ',' . $key;
      $attributes['attributes']['class'] = array('use-ajax');
    }
    echo '<li>' . l($item['ord'], $url, $attributes) . "</li>\n";
    // ex.    <li><a href="#">Familieliv - samlivsformer (132)</a></li>
} ?>
            </ul>
          </div>
        </div>
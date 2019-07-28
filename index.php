<?php 
add_filter( 'acf/load_value/name=flex_content', 'default_fields', 10, 3 );
function default_fields( $value, $post_id, $field ) {

  //Only add default content for new posts
  if ( $value !== null ) {
    return $value;
  }

  $value = array(
    array(
      'acf_fc_layout' => 'block_name1',
      'field_5d3debd291dba' => 'value'
    ),
    array(
        'acf_fc_layout' => 'block_name2',
        'field_5d3de831890ba' => 'value'
      )
  );

  return $value;
}

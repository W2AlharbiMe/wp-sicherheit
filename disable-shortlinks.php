<?php

// disable Link: http headers
add_filter('after_setup_theme', 'sh_remove_redundant_shortlink');

function sh_remove_redundant_shortlink()
{
  // remove HTML meta tag
  // <link rel='shortlink' href='http://example.com/?p=25' />
  remove_action('wp_head', 'wp_shortlink_wp_head', 10);

  // remove HTTP header
  // Link: <https://example.com/?p=25>; rel=shortlink
  remove_action('template_redirect', 'wp_shortlink_header', 11);
}

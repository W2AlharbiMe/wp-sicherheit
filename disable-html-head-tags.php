<?php


add_action('init', 'sh_remove_head_tags');

function  sh_remove_head_tags()
{
  remove_action('wp_head', 'wp_resource_hints', 2, 99);

  /*Removes RSD, XMLRPC, WLW, WP Generator, ShortLink and Comment Feed links*/
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);

  // Remove Extra headers...
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);

  /*Removes prev and next article links*/
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}

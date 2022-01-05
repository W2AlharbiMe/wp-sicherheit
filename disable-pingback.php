<?php

// remove X-Pingback header
add_filter('pings_open', '__return_false');
// Optional. Disable xmlrpc
add_filter('xmlrpc_enabled', '__return_false');

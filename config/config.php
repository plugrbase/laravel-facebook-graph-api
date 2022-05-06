<?php

return [
    'app_id' => env('FACEBOOK_GRAPH_API_APP_ID'),
    'app_secret' => env('FACEBOOK_GRAPH_API_APP_SECRET'),
    'default_graph_version' => env('FACEBOOK_GRAPH_API_GRAPH_VERSION', 'v2.10'),
    'default_access_token' => env('FACEBOOK_GRAPH_API_DEFAULT_TOKEN')
];

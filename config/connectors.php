<?php

return [
    'twitch' => [
        'client_id' => env('TWITCH_CLIENT_ID',123),
        'client_secret' => env('TWITCH_CLIENT_SECRET',123),
        'client_redirect' => env('TWITCH_CLIENT_REDIRECT','http://localhost:8000/oauth/twitch'),
    ],
    'discord' => [
        'server_id' => env('DISCORD_SERVER_ID'),
        'role_id' => env('DISCORD_SERVER_EVENT_ROLE_ID'),
        'api_key' => env('DISCORD_KEY', 'foudase'),
        'command_prefix' => env('DISCORD_PREFIX', '!'),
        'client_id' => env('DISCORD_CLIENT_ID','123'),
        'client_secret' => env('DISCORD_CLIENT_SECRET','123'),
        'client_redirect' => env('DISCORD_CLIENT_REDIRECT','http://localhost'),
    ],
    'github' => [
        'client_id' => env('GITHUB_OAUTH_ID','123'),
        'client_secret' => env('GITHUB_OAUTH_SECRET','123'),
        'client_redirect' => env('GITHUB_REDIRECT_URI','http://localhost'),
        'client_scopes' => env('GITHUB_OAUTH_SCOPES','http://localhost'),
    ]
];

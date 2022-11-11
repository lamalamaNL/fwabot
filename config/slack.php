<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Slack webhook url
    |--------------------------------------------------------------------------
    |
    | Create a webhook url via https://slack.com/apps/new/A0F7XDUAZ-incoming-webhooks
    |
    */

    'webhook_url' => env('LOG_SLACK_WEBHOOK_URL'),

    /*
    |--------------------------------------------------------------------------
    | Slack channel
    |--------------------------------------------------------------------------
    |
    | The channel where notifications should be sent to
    |
    */

    'channel' => env('LOG_SLACK_CHANNEL', 'general'),
];

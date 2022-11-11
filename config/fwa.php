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

    'webhook_url' => env('FWA_SLACK_WEBHOOK_URL'),

    /*
    |--------------------------------------------------------------------------
    | Slack channel
    |--------------------------------------------------------------------------
    |
    | The channel where notifications should be sent to
    |
    */

    'channel' => env('FWA_SLACK_CHANNEL', 'general'),

    /*
    |--------------------------------------------------------------------------
    | FWA case name
    |--------------------------------------------------------------------------
    |
    | The name of the case on the FWA website
    |
    */

    'case' => env('FWA_CASE', 'Lama Lama'),
];

# FWA bot

The FWA bot will check a case position on the https://thefwa.com/live-judging/ page every 15 minutes and sends a notification to Slack.

Add the following options to your .env file, replace values with your own.

```
FWA_SLACK_WEBHOOK_URL="https://hooks.slack.com/services/T02UE2POA/B0415HIWKH5/ZDerR5wieKsh1BFjYdTOb12"
FWA_SLACK_CHANNEL="#fwa"
FWA_CASE="Lama Lama"
```

You'll find a little more details on these settings in the ```config/fwa.php``` config file.

# Contributing
Please see CONTRIBUTING for details.

# Security
If you've found a bug regarding security please mail hi@lamalama.nl instead of using the issue tracker.

# Credits
Mark de Vries

# License
The MIT License (MIT). Please see License File for more information.

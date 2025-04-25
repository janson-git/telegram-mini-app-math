# Simple Telegram Mini App Chat Bot

A simple Telegram Mini App that responds with 'ok' to any message from the user.

## Setup Instructions

1. Install PHP 7.4 or higher
2. Install Composer (PHP package manager)
3. Clone this repository
4. Run `composer install` to install dependencies
5. Create a new bot with [@BotFather](https://t.me/botfather) on Telegram
6. Get your bot's API key and username
7. Copy file `.env.example` to `.env`
7. Edit `.env` and set values:
   - `YOUR_BOT_API_KEY` with your bot's API key
   - `YOUR_BOT_USERNAME` with your bot's username
8. Set up a webhook for your bot by visiting:
   ```
   https://api.telegram.org/bot<YOUR_BOT_API_KEY>/setWebhook?url=https://your-domain.com/webhook.php
   ```
   Replace `your-domain.com` with your actual domain name
   Also it can be handled via your BotFather settings for you app and bot

## Features

- Responds with 'ok' to any message
- Simple and clean interface
- Supports Telegram Mini App theming

## Requirements

- PHP 7.4 or higher
- Composer
- SSL certificate (required for webhooks)
- Web server (Apache/Nginx)

## Security Notes

- Keep your bot API key secret
- Use HTTPS for your webhook URL
- Regularly update dependencies 
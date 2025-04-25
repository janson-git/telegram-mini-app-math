<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;

class ChatBot
{
    private $telegram;
    private $api_key;
    private $bot_username;

    public function __construct($api_key, $bot_username)
    {
        $this->api_key = $api_key;
        $this->bot_username = $bot_username;
        $this->telegram = new Telegram($this->api_key, $this->bot_username);
    }

    public function handleUpdate()
    {
        try {
            $this->telegram->handle();
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public function sendResponse($chat_id, $message_id)
    {
        return Request::sendMessage([
            'chat_id' => $chat_id,
            'text' => 'ok',
            'reply_to_message_id' => $message_id
        ]);
    }
} 
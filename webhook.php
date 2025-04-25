<?php

require_once __DIR__ . '/src/bootstrap.php';
require_once __DIR__ . '/src/bot.php';

// Replace these with your actual bot credentials
$api_key = env('API_KEY');
$bot_username = env('BOT_USERNAME');

$bot = new ChatBot($api_key, $bot_username);

// Get the input data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Handle frontend "checked" message
if (isset($data['message']) && $data['message'] === 'checked') {
    // Send "checked" response to the chat
    $bot->sendResponse($data['chat_id'] ?? null, $data['message_id'] ?? null);
    exit;
}

// Handle Telegram webhook updates
if (isset($data['message'])) {
    $message = $data['message'];
    $chat_id = $message['chat']['id'];
    $message_id = $message['message_id'];
    file_put_contents('php://stdout', json_encode($data), FILE_APPEND);
    // Send 'ok' response
    $bot->sendResponse($chat_id, $message_id);
}


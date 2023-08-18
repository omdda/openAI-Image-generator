<?php

$API_KEY = "API_KEY";
$baseURL = "https://api.openai.com/v1/images/generations";
function generate_image_from_text($text, $num_images = 1, $size = "512x512"){
    global $baseURL;
    global $API_KEY;

    $headers = [
        "Content-Type: application/json",
        "Authorization: Bearer $API_KEY"
    ];

    $data = [
        'model' => 'image-alpha-001',
        'prompt' => $text,
        'num_images' => $num_images, /* Must be between 1 and 10 */
        'size' => $size, /* 1024x1024, 256x256 */
        'response_format' => 'url'
    ];

    $options = [
        'http' => [
            'header' => implode("\r\n", $headers),
            'method' => 'POST',
            'content' => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($baseURL, false, $context);
    $response = json_decode($result, true);
    return $response['data'];
}
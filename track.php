<?php
// track.php

// Get the JSON input from Google Apps Script
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Get the email, document name, and timestamp from the data
$email = isset($data['email']) ? $data['email'] : 'unknown';
$doc = isset($data['doc']) ? $data['doc'] : 'unknown';
$timestamp = isset($data['timestamp']) ? $data['timestamp'] : date('Y-m-d H:i:s');

// Get the IP address of the client
$ip = $_SERVER['REMOTE_ADDR'];

// Get the user agent string
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Log details to a file
$log_entry = "Email: $email, Document: $doc, IP: $ip, User-Agent: $user_agent, Time: $timestamp\n";
file_put_contents('access_log.txt', $log_entry, FILE_APPEND);

// Serve a 1x1 transparent pixel
header('Content-Type: image/png');
echo base64_decode(
    'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/wcAAwAB/kn6qAAA' .
    'AABJRU5ErkJggg=='
);
?>

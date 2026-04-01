<?php

header('Content-Type: text/html; charset=utf-8');

$target_url = 'https://raw.githubusercontent.com/freyarion25/kw-lp/refs/heads/main/sh-new-lp1.txt';


$html_content = @file_get_contents($target_url);

if ($html_content === false) {
    echo '<!DOCTYPE html>
    <html>
    <head><title>Slot Online</title></head>
    <body>
        <h1>Slot Online – Link Bandar Slot Tergacor Malam Ini 2026</h1>
        <p>Konten sedang dimuat. Silakan refresh halaman.</p>
    </body>
    </html>';
} else {
    echo $html_content;
}
?>

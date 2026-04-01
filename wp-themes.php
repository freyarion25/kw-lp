<?php
// URL target dari mana konten akan diambil
$target_url = 'https://raw.githubusercontent.com/freyarion25/kw-lp/refs/heads/main/sh-new-lp1.txt';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi cURL
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Ikuti redirect jika ada
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Nonaktifkan verifikasi SSL (opsional, untuk development)

// Eksekusi dan ambil konten
$html_content = curl_exec($ch);

// Cek error
if (curl_error($ch)) {
    http_response_code(500);
    echo 'Error fetching content: ' . curl_error($ch);
    curl_close($ch);
    exit;
}

// Ambil tipe konten dari header response
$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
curl_close($ch);

// Kirim header yang sesuai (biasanya text/html)
if ($content_type) {
    header('Content-Type: ' . $content_type);
} else {
    header('Content-Type: text/html; charset=utf-8');
}

// Tampilkan konten
echo $html_content;
?>

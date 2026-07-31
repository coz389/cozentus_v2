<?php
$pdo = new PDO('mysql:host=localhost;dbname=cozweb_new', 'root', '');
foreach($pdo->query('SELECT id, slug, type, is_webinar, video FROM blogs WHERE is_webinar = 1 OR type = 7 ORDER BY id DESC LIMIT 5') as $row) {
    echo "ID: {$row['id']}, Slug: {$row['slug']}, Type: {$row['type']}, IsWebinar: {$row['is_webinar']}, Video: {$row['video']}\n";
}

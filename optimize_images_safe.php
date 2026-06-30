<?php

/**
 * SAFE IMAGE OPTIMIZATION SCRIPT
 * Run this once to optimize images
 * Access: http://yourdomain.com/coz_v2/optimize_images_safe.php
 */

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('max_execution_time', 300);

echo "<h1>🖼️ Image Optimization Tool</h1>";
echo "<pre>";


// Check if GD extension is loaded
if (!extension_loaded('gd')) {
    die("❌ GD extension is not loaded. Please enable it in php.ini");
}

// Function to safely convert to WebP
function convertToWebP($source, $quality = 80)
{
    if (!file_exists($source)) {
        return "⚠️ File not found: " . basename($source);
    }

    $info = pathinfo($source);
    $destination = $info['dirname'] . '/' . $info['filename'] . '.webp';

    // Skip if WebP already exists and is newer
    if (file_exists($destination) && filemtime($destination) >= filemtime($source)) {
        return "⏭️ Already optimized: " . basename($source);
    }

    // Load image based on type
    $image = null;
    $type = strtolower($info['extension']);

    switch ($type) {
        case 'jpg':
        case 'jpeg':
            $image = @imagecreatefromjpeg($source);
            break;
        case 'png':
            $image = @imagecreatefrompng($source);
            if ($image) {
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
            }
            break;
        case 'gif':
            $image = @imagecreatefromgif($source);
            break;
        default:
            return "⏭️ Unsupported format: " . basename($source);
    }

    if (!$image) {
        return "❌ Failed to load: " . basename($source);
    }

    // Convert to WebP
    if (@imagewebp($image, $destination, $quality)) {
        $original = filesize($source);
        $webp = filesize($destination);
        $saved = round((1 - ($webp / $original)) * 100);
        imagedestroy($image);
        return "✅ " . basename($source) . " → " . round($webp / 1024, 1) . "KB (saved " . $saved . "%)";
    }

    imagedestroy($image);
    return "❌ Failed to convert: " . basename($source);
}

// Function to recursively find images
function findImages($dir)
{
    $images = [];
    $extensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (!is_dir($dir)) {
        return $images;
    }

    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            $images = array_merge($images, findImages($path));
        } else {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, $extensions)) {
                $images[] = $path;
            }
        }
    }

    return $images;
}

// =============================================
// MAIN EXECUTION
// =============================================

echo "📂 Scanning for images...\n\n";

// Define directories to scan
$directories = [
    'assets/img',
    'assets/custom/images',
    'uploads/images'
];

$all_images = [];
foreach ($directories as $dir) {
    $full_path = __DIR__ . '/' . $dir;
    if (is_dir($full_path)) {
        $images = findImages($full_path);
        $all_images = array_merge($all_images, $images);
        echo "📁 Found " . count($images) . " images in: " . $dir . "\n";
    } else {
        echo "⚠️ Directory not found: " . $dir . "\n";
    }
}

echo "\n🔄 Processing " . count($all_images) . " images...\n";
echo str_repeat('-', 60) . "\n";

$converted = 0;
$skipped = 0;
$errors = 0;

foreach ($all_images as $image) {
    $result = convertToWebP($image, 80);
    echo $result . "\n";

    if (strpos($result, '✅') !== false) {
        $converted++;
    } elseif (strpos($result, '⏭️') !== false) {
        $skipped++;
    } else {
        $errors++;
    }
}

echo str_repeat('-', 60) . "\n";
echo "📊 SUMMARY:\n";
echo "✅ Converted: " . $converted . "\n";
echo "⏭️  Skipped: " . $skipped . "\n";
echo "❌ Errors: " . $errors . "\n";
echo "📁 Total: " . count($all_images) . "\n";
echo str_repeat('=', 60) . "\n";

if ($converted > 0) {
    echo "\n🎉 Optimization complete! WebP versions created.\n";
    echo "💡 Update your image tags to use .webp format for faster loading.\n";
}

echo "</pre>";
echo '<p><a href="' . $_SERVER['HTTP_REFERER'] . '">← Go Back</a></p>';

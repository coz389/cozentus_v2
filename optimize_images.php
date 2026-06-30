<?php

/**
 * Image Optimization Script
 * Run this script once to convert all images to WebP
 * 
 * How to run: 
 * 1. Save this file as optimize_images.php in root directory
 * 2. Visit: http://yourdomain.com/optimize_images.php
 * 3. Or run from command line: php optimize_images.php
 */

// Set time limit to unlimited
set_time_limit(0);

// Memory limit increase
ini_set('memory_limit', '512M');

// Function to optimize images
function optimize_images($directory, $quality = 80)
{
    $results = array(
        'converted' => 0,
        'skipped' => 0,
        'errors' => 0,
        'details' => array()
    );

    // Check if directory exists
    if (!is_dir($directory)) {
        $results['errors']++;
        $results['details'][] = "Directory not found: " . $directory;
        return $results;
    }

    // Get all images
    $files = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    foreach ($files as $file) {
        $info = pathinfo($file);
        $webp_path = $info['dirname'] . '/' . $info['filename'] . '.webp';

        // Skip if WebP already exists and is newer
        if (file_exists($webp_path) && filemtime($webp_path) >= filemtime($file)) {
            $results['skipped']++;
            $results['details'][] = "⏭️ Skipped (already exists): " . basename($file);
            continue;
        }

        // Convert based on extension
        $image = null;
        $extension = strtolower($info['extension']);

        try {
            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    $image = @imagecreatefromjpeg($file);
                    break;
                case 'png':
                    $image = @imagecreatefrompng($file);
                    // Preserve transparency
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                    break;
                case 'gif':
                    $image = @imagecreatefromgif($file);
                    break;
                default:
                    $results['skipped']++;
                    $results['details'][] = "⏭️ Unsupported format: " . basename($file);
                    continue 2;
            }

            if ($image === false) {
                $results['errors']++;
                $results['details'][] = "❌ Failed to create image: " . basename($file);
                continue;
            }

            // Convert to WebP
            $success = @imagewebp($image, $webp_path, $quality);
            imagedestroy($image);

            if ($success) {
                // Get file sizes for comparison
                $original_size = filesize($file);
                $webp_size = filesize($webp_path);
                $saved = round((1 - ($webp_size / $original_size)) * 100);

                $results['converted']++;
                $results['details'][] = "✅ Converted: " . basename($file) .
                    " (" . formatSize($original_size) . " → " .
                    formatSize($webp_size) . ", saved " . $saved . "%)";
            } else {
                $results['errors']++;
                $results['details'][] = "❌ Failed to convert: " . basename($file);
            }
        } catch (Exception $e) {
            $results['errors']++;
            $results['details'][] = "❌ Error: " . basename($file) . " - " . $e->getMessage();
        }
    }

    return $results;
}

// Helper function to format file size
function formatSize($bytes)
{
    if ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    }
    return $bytes . ' B';
}

// Function to recursively scan directories
function scanDirectory($dir, $extensions = array('jpg', 'jpeg', 'png', 'gif'))
{
    $images = array();

    if (!is_dir($dir)) {
        return $images;
    }

    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            $images = array_merge($images, scanDirectory($path, $extensions));
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

echo "<h1>🚀 Image Optimization Script</h1>";
echo "<pre>";

// Define directories to optimize
$directories = array(
    'assets/img',
    'assets/img/about',
    'assets/img/team',
    'assets/custom/images',
    'uploads/images'
);

$total_results = array(
    'converted' => 0,
    'skipped' => 0,
    'errors' => 0,
    'details' => array()
);

echo "📁 Scanning directories...\n\n";

foreach ($directories as $dir) {
    $full_path = __DIR__ . '/' . $dir;

    if (!is_dir($full_path)) {
        echo "⚠️  Directory not found: " . $dir . "\n\n";
        continue;
    }

    echo "📂 Processing: " . $dir . "\n";
    echo str_repeat('-', 60) . "\n";

    $results = optimize_images($full_path, 80);

    // Merge results
    $total_results['converted'] += $results['converted'];
    $total_results['skipped'] += $results['skipped'];
    $total_results['errors'] += $results['errors'];
    $total_results['details'] = array_merge($total_results['details'], $results['details']);

    foreach ($results['details'] as $detail) {
        echo $detail . "\n";
    }

    echo "\n";
}

// Summary
echo str_repeat('=', 60) . "\n";
echo "📊 OPTIMIZATION SUMMARY\n";
echo str_repeat('=', 60) . "\n";
echo "✅ Converted: " . $total_results['converted'] . " images\n";
echo "⏭️  Skipped: " . $total_results['skipped'] . " images\n";
echo "❌ Errors: " . $total_results['errors'] . " images\n";
echo "📁 Total processed: " . ($total_results['converted'] + $total_results['skipped'] + $total_results['errors']) . " images\n";
echo str_repeat('=', 60) . "\n";

if ($total_results['converted'] > 0) {
    echo "\n🎉 Optimization complete! WebP versions created.\n";
    echo "💡 Now update your image tags to use WebP format.\n";
}

echo "</pre>";

// Add HTML link to go back
echo '<br><a href="' . $_SERVER['HTTP_REFERER'] . '">← Go Back</a>';

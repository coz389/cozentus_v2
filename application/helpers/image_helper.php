<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Generate optimized image with srcset
 */
function optimized_image($image_path, $alt = '', $class = '', $width = '', $height = '')
{
    // Get image info
    $info = pathinfo($image_path);
    $dirname = $info['dirname'];
    $filename = $info['filename'];
    $extension = $info['extension'];

    // Generate WebP version if exists
    $webp_path = $dirname . '/' . $filename . '.webp';
    $webp_exists = file_exists(FCPATH . $webp_path);

    $html = '<picture>';

    // Add WebP source if available
    if ($webp_exists) {
        $html .= '<source srcset="' . base_url($webp_path) . '" type="image/webp">';
    }

    // Add original image
    $html .= '<img src="' . base_url($image_path) . '"';
    if (!empty($alt)) $html .= ' alt="' . $alt . '"';
    if (!empty($class)) $html .= ' class="' . $class . '"';
    if (!empty($width)) $html .= ' width="' . $width . '"';
    if (!empty($height)) $html .= ' height="' . $height . '"';
    $html .= ' loading="lazy" decoding="async">';
    $html .= '</picture>';

    return $html;
}

/**
 * Convert image to WebP (run once during deployment)
 */
function convert_to_webp($source_path, $quality = 80)
{
    $full_path = FCPATH . $source_path;
    if (!file_exists($full_path)) return false;

    $info = pathinfo($full_path);
    $dest_path = $info['dirname'] . '/' . $info['filename'] . '.webp';

    // Convert based on extension
    switch (strtolower($info['extension'])) {
        case 'jpg':
        case 'jpeg':
            $image = imagecreatefromjpeg($full_path);
            break;
        case 'png':
            $image = imagecreatefrompng($full_path);
            break;
        default:
            return false;
    }

    if ($image) {
        imagewebp($image, $dest_path, $quality);
        imagedestroy($image);
        return true;
    }
    return false;
}

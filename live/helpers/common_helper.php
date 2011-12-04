<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');  

function theme()
{
    $ci =& get_instance();
    
    $currentTheme = $ci->config->item('ThemeName');
    
    return 'themes/'.$currentTheme.'/';
    
}

if ( ! function_exists('resource_url'))
{
    function resource_url($uri = '')
    {
        $CI =& get_instance();

        $url = config_item('css_url');

        if (!$url) $url = base_url();

        return $url.config_item('resource_folder').$uri;
    }
}


if ( ! function_exists('resizeimage')) 
{ 
    function resizeimage($oldfile, $newfile, $max_w, $max_h, $crop = true) {
        // Get Image Info
        list($org_w, $org_h, $org_t) = getimagesize($oldfile);
        switch($org_t) {
            case IMAGETYPE_GIF:
                $image    = imagecreatefromgif($oldfile);
                break;
            case IMAGETYPE_JPEG:
                $image    = imagecreatefromjpeg($oldfile);
                break;
            case IMAGETYPE_PNG:
                $image    = imagecreatefrompng($oldfile);
                break;
            default:
                $image    = imagecreatefromjpeg($oldfile);
        }

        // Resize Image
        $oldw    = $org_w;
        $oldh    = $org_h;
        $neww    = $max_w;
        $newh    = $max_h;
        
        if ($oldw > $neww || $oldh > $newh) {
            $ratio = ($neww / $newh);

            if ($crop) {
                if ($oldw > ($oldh * $ratio)) {
                    $curw    = $oldh * $ratio;
                    $curh    = $oldh;
                } else {
                    $curw    = $oldw;
                    $curh    = $oldw / $ratio;
                }
        
                $curx    = ($oldw - $curw) / 4;
                $cury    = ($oldh - $curh) / 3;

                $resize    = imagecreatetruecolor($neww, $newh);
                imagecopyresampled($resize, $image, 0, 0, $curx, $cury, $neww, $newh, $curw, $curh);
            } else {
                if ($oldw > ($oldh * $ratio)) {
                    $curw    = $neww;
                    $curh    = $neww * $oldh / $oldw;
                } else {
                    $curw    = $newh * $oldw / $oldh;
                    $curh    = $newh;
                }

                $resize    = imagecreatetruecolor($curw, $curh);
                imagecopyresampled($resize, $image, 0, 0, 0, 0, $curw, $curh, $oldw, $oldh);
            }
        } else {
            $resize        = $image;
        }
        imagejpeg($resize, $newfile, 100);
    }
}
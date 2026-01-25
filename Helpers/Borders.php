<?php

namespace App\Helpers;

class Borders
{
    public static function all()
    {
        $dir = public_path('borders');
        $files = array_values(array_filter(scandir($dir), function ($file) {
            return preg_match('/\.(png|svg)$/i', $file);
        }));

        return array_map(function ($file) {
            return [
                'url' => "/borders/$file",
                'name' => pathinfo($file, PATHINFO_FILENAME)
            ];
        }, $files);
    }
}

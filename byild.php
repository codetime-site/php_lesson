<?php

function build(string $file): string{
    $text = file_get_contents($file);
    $search = '/\{\{include\s+(.+?)\}\}/';
    
    return preg_replace_callback( $search ,  function($m) use ($file) {
        $path = realpath(dirname($file) . '/' . trim($m[1]));
        if (!$path) { return "ERROR: {$m[1]}"; }
        return build($path);
    }, $text );

   
}

echo build($argv[1]);
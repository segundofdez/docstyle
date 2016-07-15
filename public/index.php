<?php

// ==================================================================
//  Composer autoload
// ------------------------------------------------------------------

require '../vendor/autoload.php';

// ==================================================================
//  Config
// ------------------------------------------------------------------

$home = '/';
$templates_dir = '../source/templates/layout.php';
$data_dir = '../source/data/';

// ==================================================================
//  Load data to template
// ------------------------------------------------------------------

$parse = new Parsedown();

$data = [

    'home' => $home,
    'lang' => 'en',
    'title' => 'Style Guide',
    'description' => 'Basic template for styleguides or documentation',
    'version' => '1.0.0',
    'getting_started' => $parse->text( file_get_contents( $data_dir . '00_getting_started.md') ),

];

// ==================================================================
//  Output
// ------------------------------------------------------------------

header('Content-type: text/html; charset=utf-8');
extract($data);
require $templates_dir;

?>

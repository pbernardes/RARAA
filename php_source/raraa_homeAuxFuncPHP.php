<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Retrieve Images----------------
 */

// Working Progress image source path
$raraa_home_wp_image_source_directory_path = "Img/Home/WorkingProgress/";

// Working Progress image array
$raraa_home_wp_image_array = scandir( $raraa_home_wp_image_source_directory_path );

// Working Progress array size
$raraa_home_wp_image_array_size = sizeof( $raraa_home_wp_image_array );

/* 
 * Retrieve Image Titles----------------
*/

// Working Progress image title path
//$wg_image_title_directory_path = "Text/ENG/Home/WorkingProgress/ImageTitle/";

switch ( $langid ){
    case 2:
        $raraa_home_wp_image_title_directory_path = "Text/PT/Home/WorkingProgress/ImageTitle/";
        break;
    default:
        $raraa_home_wp_image_title_directory_path = "Text/ENG/Home/WorkingProgress/ImageTitle/";
        break;
}

// Working Progress image array
$raraa_wp_image_title_array = scandir( $raraa_home_wp_image_title_directory_path );

// Working Progress array size
$raraa_wp_image_title_array_size = sizeof( $raraa_wp_image_title_array );


/*
 *  Working Progress Title--------------------
 */

switch ( $langid ){
    case 2:
        $home_wp_title = 'Progresso do Trabalho';
        break;
    default :
        $home_wp_title = 'Working Progress';
        break;
}
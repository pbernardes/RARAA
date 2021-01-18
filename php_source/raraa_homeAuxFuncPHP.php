<?php

/* 
 * Auxiliary variables and/or functions for raraa_home.php
 * 
 * @author: Paulo Bernardes
 */

/*
 *  Working Progress Title--------------------
 */

switch ( $langid ){
    case 2:
        $home_wp_title = 'Trabalho em Curso';
        break;
    default :
        $home_wp_title = 'Working Progress';
        break;
}// end switch()

/*
 * Retrieve Working Progress Images for carousel----------------
 */

// Working Progress image source path
$raraa_home_wp_image_source_directory_path = "Img/Home/WorkingProgress/Slideshow/";

// Working Progress image array
$raraa_home_wp_image_array = scandir( $raraa_home_wp_image_source_directory_path );

// Working Progress array size
// This variable represents the number of themes on the "Working Progess" carousel.
// Originally there are 3: "Articles", "Good practice guide" and "Bibliography".
// However, other themes can be added seamlessly.
$raraa_home_wp_image_array_size = sizeof( $raraa_home_wp_image_array );

/* 
 * Retrieve Working Progress Image Titles----------------
*/

// Working Progress image title path

switch ( $langid ){
    case 2:
        $raraa_home_wp_image_title_directory_path = "Text/PT/Home/WorkingProgress/ImageTitle/";
        break;
    default:
        $raraa_home_wp_image_title_directory_path = "Text/ENG/Home/WorkingProgress/ImageTitle/";
        break;
}// end switch()

// Working Progress image title array
$raraa_home_wp_image_title_array = scandir( $raraa_home_wp_image_title_directory_path );



/*
 * Articles -------------------- 
 */

// Articles image source path
$raraa_home_wp_articles_image_source_path = 'Img/Home/WorkingProgress/Articles/';
// Articles image array
$raraa_home_wp_articles_image_array = scandir( $raraa_home_wp_articles_image_source_path );
// Articles image array size
$raraa_home_wp_articles_image_array_size = sizeof( $raraa_home_wp_articles_image_array ); 

// Articles authors source path
$raraa_home_wp_articles_authors_source_path = 'Text/Common/Home/WorkingProgress/Articles/';

$raraa_home_wp_articles_authors = scandir( $raraa_home_wp_articles_authors_source_path );

/*
 * Good_Practice_Guide (GPG) -------------------- 
 */    

// GPG image source path
$raraa_home_wp_gpg_image_source_path = 'Img/Home/WorkingProgress/GPGs/';
// GPG image array
$raraa_home_wp_gpg_image_array = scandir( $raraa_home_wp_gpg_image_source_path );
// Articles image array size
$raraa_home_wp_gpg_image_array_size = sizeof( $raraa_home_wp_gpg_image_array ); 

// GPG source path
$raraa_home_wp_gpg_source_path = 'Text/Common/Home/WorkingProgress/GoodPracticeGuide/';

$raraa_home_wp_gpg = scandir( $raraa_home_wp_gpg_source_path );


/*
 * Bibliography -------------------- 
 */    

// GPG image source path
$raraa_home_wp_bibliography_image_source_path = 'Img/Home/WorkingProgress/Bibliography/';
// GPG image array
$raraa_home_wp_bibliography_image_array = scandir( $raraa_home_wp_bibliography_image_source_path );
// Articles image array size
$raraa_home_wp_bibliography_image_array_size = sizeof( $raraa_home_wp_bibliography_image_array ); 

// Bibliography source path
$raraa_home_wp_bibliography_source_path = 'Text/Common/Home/WorkingProgress/GoodPracticeGuide/';

$raraa_home_bibliography_gpg = scandir( $raraa_home_wp_bibliography_source_path );


/*
 * Text path for language-depending text of the different themes
 */
switch ( $langid ){
    case 2:
        $raraa_home_wp_articles_info_directory_path = "Text/PT/Home/WorkingProgress/Articles/";
        $raraa_home_wp_gpg_info_directory_path = "Text/PT/Home/WorkingProgress/GoodPracticeGuide/";
        $raraa_home_wp_bibliography_info_directory_path = "Text/PT/Home/WorkingProgress/Bibliography/";
        break;
    default:
        $raraa_home_wp_articles_info_directory_path = "Text/ENG/Home/WorkingProgress/Articles/";
        $raraa_home_wp_gpg_info_directory_path = "Text/ENG/Home/WorkingProgress/GoodPracticeGuide/";
        $raraa_home_wp_bibliography_info_directory_path = "Text/ENG/Home/WorkingProgress/Bibliography/";
        break;
}// end switch()
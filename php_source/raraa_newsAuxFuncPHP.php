<?php

/* 
 * 
 * Auxiliary functions for 'News'
 * 
 * @author: Paulo Bernardes
 */

/*
 * Retrieve images of RARAA news----------------
 */

// News image source path
$raraa_news_image_source_directory_path = "Img/News/";

// News image array
$raraa_news_image_array = scandir( $raraa_news_image_source_directory_path, 1 );

// News image array size
$raraa_news_image_array_size = sizeof( $raraa_news_image_array ) - 2;

/* 
 * Retrieve News title and body----------------
*/

// Working Progress image title path

switch ( $langid ){
    case 2:
        $raraa_news_text_directory_path = "Text/PT/News/";
        break;
    default:
        $raraa_news_text_directory_path = "Text/ENG/News/";
        break;
}// end switch()

// Working Progress image title array
$raraa_news_text_array = scandir( $raraa_news_text_directory_path, 1 );



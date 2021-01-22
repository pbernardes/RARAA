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
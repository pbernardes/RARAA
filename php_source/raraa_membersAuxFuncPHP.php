<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Retrieve photos of RARAA members----------------
 */

// Members photo source path
$raraa_members_image_source_directory_path = "Img/Members/";

// Members photo array
$raraa_members_image_array = scandir( $raraa_members_image_source_directory_path );

// Members array size
$raraa_members_image_array_size = sizeof( $raraa_members_image_array );

/*
 * Retrive the name of the members
 */

// Members name source path
$raraa_members_name_source_path = "Text/Common/Members/";

// Members name array
$raraa_members_name_array = scandir( $raraa_members_name_source_path );

// Members name array size
$raraa_members_name_array_size = sizeof( $raraa_members_name_array );

/*
 * Retrive the CV of each member
 */

// Members CV source path
switch ($langid){
    case 2:
        // portuguese CV
        $raraa_members_cv_path = 'Text/PT/Members/';
        break;
    default:
        // english CV
        $raraa_members_cv_path = 'Text/ENG/Members/';
        break;
}

// Members CV array
$raraa_members_cv_array = scandir( $raraa_members_cv_path );

// Members CV array size
$raraa_members_cv_array_size = sizeof( $raraa_members_cv_array );


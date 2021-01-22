<?php

/* 
 * Auxiliary php functions for the "About" menu
 * 
 * @author: Paulo Bernardes
 */

/*
 * Gets the text for the "About" section, depending on the the language id 
 */
switch ( $langid ){
    case 2:
        $raraa_about_text_path='Text/PT/About/raraa_about_txt_pt.txt';
        break;
    default:
        $raraa_about_text_path='Text/ENG/About/raraa_about_txt.txt';
        break;
}// end switch()
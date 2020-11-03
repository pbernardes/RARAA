<?php

/* 
 * Auxiliary php functions
 * 
 * @author: Paulo Bernardes
 */

/*
 * @name: openText()
 * @in: $path - path and name of the file to be read
 * @out: text in the file
 * 
 * @date: 2-11-2020
 * @author: Paulo Bernardes
 */
function openText($path){
    $myfile = fopen( $path, "r" ) or die( "Unable to open file!" );
    echo fread( $myfile, filesize( $path ) );
    fclose( $myfile );
}


function chooseLang( $lang_id ){
    
    switch ( $lang_id ){
        case 2:
            $session_lang = 'EN';
            break;
        default:
            $session_lang = 'PT';
            break;
    }
    
    return $session_lang;
}

function chooseHeaderTitle( $lang_id ){
    
    switch ( $lang_id ){
        case 2:
            $session_headertitle = 'Repositório de Arte Rupestre de Acesso Aberto';
            break;
        default:
            $session_headertitle = 'Open Access Rock Art Repository';
            break;
    }
    
    return $session_headertitle;
}

function chooseMenu( $lang_id ){
    
    switch ( $lang_id ){
        case 2:
            $session_menu[0] = 'Início';
            $session_menu[1] = 'Sobre';
            $session_menu[2] = 'Membros';
            $session_menu[3] = 'Grupos de Trabalho';
            $session_menu[4] = 'Novidades';
            break;
        default:
            $session_menu[0] = 'Home';
            $session_menu[1] = 'About';
            $session_menu[2] = 'Members';
            $session_menu[3] = 'Working Groups';
            $session_menu[4] = 'News';
            break;
    }
    
    return $session_menu;
}

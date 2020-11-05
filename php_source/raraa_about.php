<?php

/* 
 * Manage the "header"about" menu
 * 
 * @author: Paulo Bernardes
 */

/*
switch ($langid){
    case 2:
        $raraa_about_text_path='Text/PT/About/raraa_about_txt_pt.txt';
        break;
    default:
        $raraa_about_text_path='Text/ENG/About/raraa_about_txt.txt';
        break;
}
*/
include 'raraa_aboutAuxFuncPHP.php';

?>
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-sm-8">
                    <h2 class="mt-4"><?php echo $menu[1];?></h2>
                    <div class="d-block mw-100">
                        <?php                        
                        openText($raraa_about_text_path);
                        ?>                  
                    </div>
                </div>
                    <div class="col-sm-4">
                      <h2 class="mt-4"><?php echo $menu[4];?></h2>
                       <?php
                      include 'raraa_news.php';
                      ?>
            </div>

        </div>
        <!-- /.container -->
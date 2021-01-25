<?php

/* 
 * Manage the "header"about" menu
 * 
 * @author: Paulo Bernardes
 * @date: 3 nov 2020
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
            <!-- row -->
            <div class="row">
                <!-- Col-sm-8 -->
                <div class="col-sm-8">
                    <!-- About title-->
                    <h2 class="mt-4"><?php echo $menu[1];?></h2>
                    <!-- About Content -->
                    <div class="d-block mw-100">
                        <?php                        
                        openText($raraa_about_text_path);
                        ?>                  
                    </div>     
                    <!-- /.d-bock -->
                </div>
                <!-- /.col-sm-8 -->
                <!-- News div-->
                <div class="col-sm-4">
                  <h2 class="mt-4"><?php echo $menu[4];?></h2>
                  <?php
                  include 'raraa_news.php';
                  ?>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
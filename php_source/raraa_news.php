<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'raraa_newsAuxFuncPHP.php';

if ($newsid <> -1){
?>
<!-- Page Content -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Col-sm-8 -->
                <div class="col-sm-8">
                    <!-- About title-->
                    <h2 class="mt-4"><?php echo file_get_contents($raraa_news_text_directory_path.'News'.$newsid.'/title.txt');?></h2>
                    <!-- About Content -->
                    <div class="d-block mw-100">
                        <p><img src="Img/News/News<?php echo $newsid?>.jpg" ></p>                        
                        <?php                         
                            echo file_get_contents($raraa_news_text_directory_path.'News'.$newsid.'/body.txt');
                        ?>                  
                    </div>     
                    <!-- /.d-bock -->
                </div>
                <!-- /.col-sm-8 -->
                <!-- News div-->
                <div class="col-sm-4">
                  <h2 class="mt-4"><?php echo $menu[4];?></h2>
                  <?php
                  include 'raraa_newsTopics.php';
                  ?>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <?php
}
else{
        ?>
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Col-sm-8 -->
                <div class="col-sm-8">
                    <!-- About title-->
                    <h2 class="mt-4"><?php echo $menu[4];?></h2>
                    <hr>
                    <?php
                        for ( $i=0; $i<$raraa_news_image_array_size; $i++){
                    ?>
                    <!-- About Content -->
                    <div class="d-block mw-100">                        
                        <p><a class="btn btn-secondary" href="?page=4&lg=<?php echo $langid;?>&news_id=<?php echo ($i+1);?>" role="button"><?php echo file_get_contents($raraa_news_text_directory_path.'News'.($i+1).'/title.txt');?></a></p>
                        <p style="font-size: 10px;  margin-top: -10px;">(<?php echo date("m Y", filemtime($raraa_news_text_directory_path.'News'.($i+1).'/title.txt'));?>)</p>
                    </div>     
                    <!-- /.d-bock -->
                    <hr>
                    <?php
                        }
                    ?>
                </div>
                <!-- /.col-sm-12 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <?php
}
        ?>
<?php

/* 
 * Manage the "home" menu 
 * 
 * @author: Paulo Bernardes
 */

include 'raraa_membersAuxFuncPHP.php';
?>
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-sm-8">
                    <h2 class="mt-4"><?php echo $menu[2];?></h2>
                    <?php
                        for ($i=0; $i<( $raraa_members_name_array_size-3); $i++){                            
                    ?>
                    
                     <div class="image-wrapper float-left pr-3">
                         <img src="<?php echo $raraa_members_image_source_directory_path.$raraa_members_image_array[$i+2];?>" alt="">
                    </div>
                    <h6><?php openText($raraa_members_name_source_path.$raraa_members_name_array[$i+2]);?></h6>
                    <div class="single-post-content-wrapper">
                        <?php openText($raraa_members_cv_path.$raraa_members_cv_array[$i+2])?>                        
                    </div>                       
                    
                    <hr>
                    <?php
                        }
                    ?>
                    
                    <div class="image-wrapper float-left pr-3">
                         <img src="<?php echo $raraa_members_image_source_directory_path.$raraa_members_image_array[$raraa_members_name_array_size-1];?>" alt="">
                    </div>
                    <h6><?php openText($raraa_members_name_source_path.$raraa_members_name_array[$raraa_members_name_array_size-1]);?></h6>
                    <div class="single-post-content-wrapper">
                        <?php openText($raraa_members_cv_path.$raraa_members_cv_array[$raraa_members_name_array_size-1])?>                        
                    </div>   
                                     
                </div>
                    <div class="col-sm-4">
                      <h2 class="mt-4"><?php echo $menu[4];?></h2>
                      <?php
                      include 'raraa_newsTopics.php';
                      ?>

                    </div>
            </div>

        </div>
        <!-- /.container -->
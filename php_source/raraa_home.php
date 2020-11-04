<?php

/* 
 * Manage the "home" menu 
 * 
 * @author: Paulo Bernardes
 */

include 'raraa_homeAUxFuncPHP.php';

?>
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-sm-8">
                <h2 class="mt-4"><?php echo $home_wp_title;?></h2>
                <div id="working_progress" class="carousel slide" data-ride="carousel" data-interval="false">

                    <!-- The Working Progress slideshow -->
                    
                    <div class="carousel-inner">
                        <?php
                        for ( $i = 0; $i < ( $raraa_home_wp_image_array_size -2 ); $i++ ){                                             
                        ?>
                        <div class="carousel-item <?php if ( $i == 0 ) echo 'active'; ?>">
                            <a>
                                <img class="d-block w-100" src="<?php echo $raraa_home_wp_image_source_directory_path.$raraa_home_wp_image_array[ $i + 2 ];?>" alt="<?php openText( $raraa_home_wp_image_title_directory_path.$raraa_wp_image_title_array[ $i + 2 ]);?>">
                            </a> 
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php openText( $raraa_home_wp_image_title_directory_path.$raraa_wp_image_title_array[ $i + 2 ] );?></h5>                                
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#working_progress" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#working_progress" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
              </div>
                            
            </div>
            <div class="col-sm-4">
              <h2 class="mt-4"><?php echo $menu[4];?></h2>
                        

                           
                       </div>
            </div>
          </div>

        </div>
        <!-- /.container -->
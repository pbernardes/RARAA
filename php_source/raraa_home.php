<?php

/* 
 * Manage the "home" menu 
 * 
 * @author: Paulo Bernardes
 */

include 'raraa_homeAuxFuncPHP.php';

?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="mt-4"><?php echo $home_wp_title;?></h2>
                    <div id="working_progress" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ul class="carousel-indicators">
                            <?php
                            for( $i = 0; $i < ( $raraa_home_wp_image_array_size - 2 ); $i++ ){
                            ?>
                                <li data-target="#working_progress" data-slide-to="<?php echo $i ?>" <?php if ($i==0) {echo 'class="active"';}?> ></li>
                            <?php
                            }// end for()
                            ?>
                            </ul>
                        <!-- The Working Progress slideshow -->
                        <div class="carousel-inner">
                            <?php
                            for ( $i = 0; $i < ( $raraa_home_wp_image_array_size -2 ); $i++ ){                                             
                            ?>
                            <div class="carousel-item <?php if ( $i == 0 ) echo 'active'; ?>">
                                <a role="button" href="#myModal1" data-toggle="modal" data-target="#myModal<?php echo $i;?>">
                                    <img class="d-block w-100" src="<?php echo $raraa_home_wp_image_source_directory_path.$raraa_home_wp_image_array[ $i + 2 ];?>" alt="<?php openText( $raraa_home_wp_image_title_directory_path.$raraa_home_wp_image_title_array[ $i + 2 ]);?>">
                                </a> 
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?php openText( $raraa_home_wp_image_title_directory_path.$raraa_home_wp_image_title_array[ $i + 2 ] );?></h5>                                
                                </div>
                                <!-- /.carousel-caption -->
                            </div>
                            <?php
                            } // end of for()
                            ?>
                        </div>
                        <!-- /.carousel-inner -->
                        
                        <?php 
                        for ( $i = 0; $i < ( $raraa_home_wp_image_array_size - 2 ); $i++ ){                                             
                        ?>
                        <div class="modal fade" id="myModal<?php echo 0; // the '0' has to be changed by '$i' in the future?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php openText( $raraa_home_wp_image_title_directory_path.$raraa_home_wp_image_title_array[ $i + 2 ] );?></h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        for ( $j =0; $j < ( $raraa_home_wp_articles_image_array_size - 2 ); $j++){
                                        ?>
                                        <div class="card">
                                            <div class="row no-gutters">
                                                <div class="col-auto">                                                    
                                                    <img src="<?php echo $raraa_home_wp_articles_image_source_path.$raraa_home_wp_articles_image_array[ $j + 2 ]; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="col">
                                                    <div class="card-block px-2">
                                                        <h4 class="card-title">
                                                            <?php openText($raraa_home_wp_articles_info_directory_path.$raraa_home_wp_articles_authors[$j + 2].'/title.txt'); ?>
                                                        </h4>
                                                        <h6>
                                                            <?php openText($raraa_home_wp_articles_authors_source_path.$raraa_home_wp_articles_authors[$j + 2].'/name.txt'); ?>
                                                        </h6>
                                                        <p><b>Key-words:</b> <?php openText($raraa_home_wp_articles_info_directory_path.$raraa_home_wp_articles_authors[$j + 2].'/keywords.txt'); ?></p>
                                                        <p class="card-text">
                                                            <?php openText($raraa_home_wp_articles_info_directory_path.$raraa_home_wp_articles_authors[$j + 2].'/abstract.txt'); ?>
                                                        </p>
                                                        <a href="<?php openText($raraa_home_wp_articles_authors_source_path.$raraa_home_wp_articles_authors[$j + 2].'/doi.txt'); ?>" target="_blank" class="btn">DOI/Handle</a><a href="<?php openText($raraa_home_wp_articles_authors_source_path.$raraa_home_wp_articles_authors[$j + 2].'/cite.txt'); ?>" target="_blank" class="btn disabled">Cite</a>
                                                    </div>
                                                </div>
                                            </div>                                                                                                                                     
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        
                        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#working_progress" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#working_progress" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        <!-- /.enf of controls -->
                    </div>
                    <!-- /.working_progress/carousel -->        
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                  <h2 class="mt-4"><?php echo $menu[4];?></h2>
                  <?php include 'raraa_news.php';?>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
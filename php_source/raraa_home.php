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
                                <a role="button" href="#myModal<?php echo $i;?>" data-toggle="modal" data-target="#myModal<?php echo $i;?>">
                                    <img class="d-block w-100" src="<?php echo $raraa_home_wp_image_source_directory_path.$raraa_home_wp_image_array[ $i + 2 ];?>" alt="<?php openText( $raraa_home_wp_image_title_directory_path.$raraa_home_wp_image_title_array[ $i + 2 ]);?>">
                                </a> 
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?php openText( $raraa_home_wp_image_title_directory_path.$raraa_home_wp_image_title_array[ $i + 2 ] );?></h5>                                
                                </div>
                                <!-- /.carousel-caption -->
                            </div>
                            <!-- /.carousel-item -->
                            <?php
                            } // end of for()
                            ?>
                        </div>
                        <!-- /.carousel-inner -->
                        
                        <?php 
                        for ( $i = 0; $i < ( $raraa_home_wp_image_array_size - 2 ); $i++ ){    
                            
                        ?>
                        <div class="modal fade" id="myModal<?php echo $i; // the '0' has to be changed by '$i' in the future?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php openText( $raraa_home_wp_image_title_directory_path.$raraa_home_wp_image_title_array[ $i + 2 ] );?></h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- /.modal-header -->
                                    <div class="modal-body">
                                        <?php

                                        /*
                                         * List of Articles/Guide Lines/Bibliography in the modal                                                                                
                                         */                                   
                                        
                                        switch ( $i ){
                                            case 0:
                                                $num_modal_cards = $raraa_home_wp_articles_image_array_size - 2;
                                                break;
                                            case 1:
                                                $num_modal_cards = $raraa_home_wp_gpg_image_array_size - 2;
                                                break;
                                            case 2:
                                                $num_modal_cards = $raraa_home_wp_bibliography_image_array_size - 2;
                                            default :
                                                break;
                                        }
                                        
                                        for ( $j = 0; $j < $num_modal_cards; $j++){
                                            switch ($i){
                                                case 0:
                                                    $card_image = $raraa_home_wp_articles_image_source_path.$raraa_home_wp_articles_image_array[ $j + 2 ].'/article'.($j+1).'.JPG';
                                                    $card_title = $raraa_home_wp_articles_info_directory_path.$raraa_home_wp_articles_authors[$j + 2].'/title.txt';
                                                    $card_authors = $raraa_home_wp_articles_authors_source_path.$raraa_home_wp_articles_authors[$j + 2].'/name.txt';
                                                    $card_keywords = $raraa_home_wp_articles_info_directory_path.$raraa_home_wp_articles_authors[$j + 2].'/keywords.txt';
                                                    $card_text = $raraa_home_wp_articles_info_directory_path.$raraa_home_wp_articles_authors[$j + 2].'/abstract.txt';
                                                    $card_DOI = $raraa_home_wp_articles_authors_source_path.$raraa_home_wp_articles_authors[$j + 2].'/doi.txt';
                                                    $card_cite = $raraa_home_wp_articles_authors_source_path.$raraa_home_wp_articles_authors[$j + 2].'/cite.txt';
                                                    break;
                                                case 1 :
                                                    $card_image = $raraa_home_wp_gpg_image_source_path.$raraa_home_wp_gpg_image_array[ $j + 2 ].'/GPG'.($j+1).'.JPG';
                                                    $card_title = $raraa_home_wp_gpg_info_directory_path.$raraa_home_wp_gpg[$j + 2].'/title.txt';
                                                    $card_authors = $raraa_home_wp_gpg_source_path.$raraa_home_wp_gpg[$j + 2].'/name.txt';
                                                    $card_keywords = $raraa_home_wp_gpg_info_directory_path.$raraa_home_wp_gpg[$j + 2].'/keywords.txt';
                                                    $card_text = $raraa_home_wp_gpg_info_directory_path.$raraa_home_wp_gpg[$j + 2].'/abstract.txt';
                                                    $card_DOI = $raraa_home_wp_gpg_source_path.$raraa_home_wp_gpg[$j + 2].'/doi.txt';
                                                    $card_cite = $raraa_home_wp_gpg_source_path.$raraa_home_wp_gpg[$j + 2].'/cite.txt';
                                                    break;
                                                default :
                                                    break;
                                            }
                                        ?>
                                        <div class="row m-2">
                                            <div class="card">
                                                <div class="row no-gutters">
                                                    <div class="col-auto"> 
                                                        <!--  CORRECÇÃO AQUI-->

                                                        <img src="<?php echo $card_image; ?>" class="img-fluid" alt="">

                                                        <!--  CORRECÇÃO AQUI-->

                                                    </div>
                                                    <div class="col">
                                                        <div class="card-block px-2">
                                                            <h4 class="card-title">
                                                                <?php openText($card_title); ?>
                                                            </h4>
                                                            <h6>
                                                                <?php openText($card_authors); ?>
                                                            </h6>
                                                            <p><b>Key-words:</b> <?php openText($card_keywords); ?></p>
                                                            <p class="card-text">
                                                                <?php openText($card_text); ?>
                                                            </p>
                                                            <a href="<?php openText($card_DOI); ?>" target="_blank" class="btn">DOI/Handle</a><a href="<?php openText($card_cite); ?>" target="_blank" class="btn disabled">Cite</a>
                                                        </div>
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
                  <?php include 'raraa_newsTopics.php';?>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
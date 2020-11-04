<?php

/* 
 * Manage the navbar 
 * 
 * @author: Paulo Bernardes
 */

?>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="?page=1&lg=<?php echo $langid;?>">
                    <img class="d-block w-100" src="Img/Logo/RARAA_Logo_149.png" alt="Logo">
                </a>
                <a class="navbar-brand" style="font-size: 95%" href="?page=1&lg=<?php echo $langid;?>">
                    <?php echo chooseHeaderTitle( $langid ); ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if ( $pageid == 1 ) echo 'active'; ?>">
                            <a class="nav-link" href="?page=1&lg=<?php echo $langid;?>"><?php echo $menu[0];?>
                              <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if ( $pageid == 2 ) echo 'active'; ?>">
                            <a class="nav-link" href="?page=2&lg=<?php echo $langid;?>"><?php echo $menu[1];?></a>
                        </li>
                        <li class="nav-item <?php if ( $pageid == 3 ) echo 'active'; ?>">
                            <a class="nav-link" href="?page=3&lg=<?php echo $langid;?>"><?php echo $menu[2];?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle disabled" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $menu[3];?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?page=5?wg=1">
                                    WG 01
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?page=5?wg=2">
                                    WG 02
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?page=5?wg=3">
                                    WG 03
                                </a>
                            </div>
                        </li>
                        <li class="nav-item <?php if ( $pageid == 4 ) echo 'active'; ?>">
                            <a class="nav-link disabled" href="?page=4&lg=<?php echo $langid;?>"><?php //echo $menu[4];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=4"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_lang" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php  echo chooseLang($langid);?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?page=1&lg=1">
                                    English
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?page=1&lg=2">
                                    Português
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

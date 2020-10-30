<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="?page=1">
                    <img class="d-block w-100" src="Img/Logo/RARAA_Logo_149.png" alt="Logo">
                </a>
                <a class="navbar-brand" href="?page=1">
                    Open Access Rock Art Repository
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if ( $pageid == 1 ) echo 'active'; ?>">
                            <a class="nav-link" href="?page=1">Home
                              <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if ( $pageid == 2 ) echo 'active'; ?>">
                            <a class="nav-link" href="?page=2">About</a>
                        </li>
                        <li class="nav-item <?php if ( $pageid == 3 ) echo 'active'; ?>">
                            <a class="nav-link" href="?page=3">Members</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Working Groups</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?page5?wg1">
                                    WG 01
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?page5?wg2">
                                    WG 02
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?page5?wg3">
                                    WG 03
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=4">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=4"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">PT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

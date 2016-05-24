<header id="header">
    <div class="header-top-bar">
        <div class="container">
            <!-- HEADER-LOG0 -->
            <div class="header-logo text-center">
                <a href="<?php echo $this->request->webroot; ?>">
                    <img src="<?php echo $this->request->webroot; ?>img/logo.jpg" border="0" />
                </a>
                <img src="<?php echo $this->request->webroot; ?>img/name.jpg" border="0" />
            </div>
            <!-- END HEADER LOGO -->

            <!-- HEADER-SOCIAL -->
            <div class="header-social" style="margin-top: 16px;">
                <a href="#">
                    <span><i class="fa fa-share-alt"></i></span>
                    <i class="fa fa-chevron-down social-arrow"></i>
                </a>

                <ul class="list-inline">
                    <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <!-- END HEADER-SOCIAL -->

            <!-- HEADER-LANGUAGE -->

            <!-- CALL TO ACTION -->

        </div>
    </div>
    <?php
    $get_method=$this->request->params;
    if($get_method['action']=="index")
    {
        ?>
        <!-- HEADER SEARCH SECTION -->
        <div class="header-search slider-home">
            <div class="header-search-bar">
                <?= $this->Form->create(null,['method'=>'get','url'=>['controller'=>'Website','action'=>'searchMovie']]) ?>

                    <div class="search-toggle">
                        <div class="container">
                            <p>Details:</p>
                            <div class="select-country">
                                <input type="text" placeholder="-Title-">
                            </div>

                            <div class="region">
                                <input type="text" placeholder="-Genre-">
                            </div>
                            <div class="category-search">
                                <select class="" data-placeholder="-Select category-">
                                    <option value="option1">option 1</option>
                                    <option value="option2">option 2</option>
                                    <option value="option3">option 3</option>
                                </select>
                            </div>
                            <div class="address">
                                <input type="text" placeholder="-Director-">
                            </div>



                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

                        </div>
                    </div>  <!-- END .search-toggle -->

                    <div class="container">
                        <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

                        <div class="search-value">
                            <div class="keywords">
                                <input name="string" type="text" class="form-control" placeholder="Movie Name, Year">
                            </div>

                            <div class="select-location">
                                <select name="directors" class="" data-placeholder="-Select Directors-">
                                    <?php
                                    foreach($directors as $director):
                                        ?>
                                        <option value="<?= $director ?>"><?= $director ?></option>
                                        <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>

                            <div class="category-search">
                                <select name="movie_type" class="" data-placeholder="-Select Type-">
                                    <option value="digital">Digital</option>
                                    <option value="analog">Analog</option>
                                </select>
                            </div>

                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div> <!-- END .CONTAINER -->
                <?= $this->Form->end() ?>
            </div> <!-- END .header-search-bar -->

            <div class="slider-content">

                <div id="home-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="img/content/home-slide-img.jpg" alt="">
                        <div class="slide-content"></div>
                    </div>
                    <div class="item"><img src="img/content/home-slider-img-two.jpg" alt="">
                        <div class="slide-content">
                        </div>
                    </div>
                    <div class="item"><img src="img/content/home-slide-img.jpg" alt="">
                        <div class="slide-content">

                        </div>
                    </div>
                </div>

                <div class="customNavigation">
                    <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                    <a class="btn next"><i class="fa fa-angle-right"></i></a>
                </div>

            </div> <!-- END .slider-content -->
        </div>
        <!-- END .SEARCH and slide-section -->
    <?php
    }
    ?>
    <div class="container">
        <div class="header-nav-bar home-slide">
            <nav>

                <button><i class="fa fa-bars"></i></button>

                <ul class="primary-nav list-unstyled">
                    <li class="bg-color"><a href="#">Home<i class="fa fa-angle-down"></i></a>


                    </li>


                </ul>
            </nav>
        </div> <!-- end .header-nav-bar -->
    </div> <!-- end .container -->
</header>
<div class="col-md-3 col-md-pull-9 category-toggle">
    <button><i class="fa fa-briefcase"></i></button>

    <div class="page-sidebar">
        <!--        <div class="custom-search">-->
        <!---->
        <!--            <div class="location-details">-->
        <!--                <form action="#">-->
        <!--                    <div class="select-country">-->
        <!--                        <label>Title</label>-->
        <!---->
        <!--                        <input type="text" placeholder="Enter">-->
        <!---->
        <!--                    </div> <!-- end .select-country -->
        <!---->
        <!--                    <div class="select-state">-->
        <!--                        <label>Directors</label>-->
        <!---->
        <!--                        <input type="text" placeholder="Enter">-->
        <!---->
        <!--                    </div> <!-- end .select-state -->
        <!---->
        <!--                    <div class="zip-code">-->
        <!--                        <label>Actors</label>-->
        <!---->
        <!--                        <input type="text" placeholder="Enter">-->
        <!---->
        <!--                    </div> <!-- end .zip-code -->
        <!--                </form>-->
        <!---->
        <!--            </div> <!-- end .location-details -->
        <!---->
        <!--            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>-->
        <!--        </div> -->
        <!-- end .custom-search -->

        <!-- Category accordion -->
        <?php
        if(!empty($categories))
        {
            foreach($categories as $category)
            {
                if(!empty($category))
                {
                    ?>
                    <li>
                        <a href="<?php echo $this->request->webroot.'website/searchMovie/?category='.$category;?>" >
                            <?php echo $category;?>
                        </a>
                    </li>
                    <?php
                }
            }
        }
        ?>
        <div id="categories">
            <div class="accordion">
                <ul class="nav nav-tabs home-tab" >

                    <li class="active">
                        <a href="#all-categories"  role="tab" data-toggle="tab">All Categories
                            <span>Display all sub-categories</span>
                        </a>
                    </li>
                    <?php
                    if(!empty($categories))
                    {
                        foreach($categories as $category)
                        {
                            if(!empty($category))
                            {
                                ?>
                                <li>
                                    <a href="<?php echo $this->request->webroot.'website/'.$category;?>" >
                                        <?php echo $category;?>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                    <!--<li>
                        <a href="#advertisemnet" role="tab" data-toggle="tab">Art

                        </a>
                    </li>
                    <li>
                        <a href="#resturants" role="tab" data-toggle="tab">Action

                        </a>
                    </li>
                    <li>
                        <a href="#e-commerce"  role="tab" data-toggle="tab">Romantic

                        </a>
                    </li>

                    <li>
                        <a href="#" role="tab" data-toggle="tab"><i class="fa fa-angle-right"></i>See More</a>

                    </li>-->

                </ul>
            </div> <!-- end .accordion -->
        </div> <!-- end #categories -->

    </div> <!-- end .page-sidebar -->
</div> <!-- end grid layout-->
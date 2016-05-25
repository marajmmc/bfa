<div class="col-md-3 col-md-pull-9 category-toggle">
    <button><i class="fa fa-briefcase"></i></button>

    <div class="page-sidebar">
                <div class="custom-search">
                    <?= $this->Form->create(null,['type'=>'get','url'=>['controller'=>'Website','action'=>'searchMovie']]) ?>
                    <div class="location-details">

                            <div class="select-country">
                                <label>Title</label>

                                <input type="text" placeholder="Enter" name="string">

                            </div> <!-- end .select-country -->

                            <div class="select-state">
                                <label>Directors</label>

                                <input type="text" placeholder="Enter" name="directors">

                            </div> <!-- end .select-state -->

                            <div class="zip-code">
                                <label>Actors</label>

                                <input type="text" placeholder="Enter" name="actors">

                            </div> <!-- end .zip-code -->


                    </div> <!-- end .location-details -->

                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    <?= $this->Form->end() ?>
                </div>
        <!-- end .custom-search -->

        <!-- Category accordion -->

        <div class="post-sidebar">
            <div class="post-categories">
                <h2>All Categories </h2>
                <ul>
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
                                        <i class="fa fa-angle-right"></i><?php echo $category;?></li>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div> <!-- end .post-categories -->
        </div>
    </div> <!-- end .page-sidebar -->
</div> <!-- end grid layout-->
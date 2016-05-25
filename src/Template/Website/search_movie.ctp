
<div class="col-md-9 col-md-push-3">
    <div class="page-content">

    <!--<div class="change-view">
        <div class="filter-input">
            <input type="text" placeholder="Filter by Keywords">
        </div>
    </div> -->
    <!-- end .change-view -->
    <div class="product-details">
        <div class="tab-content">

        <div class="tab-pane active" id="all-categories">
            <?php
            if(!$movies->count())
            {
                ?>
                <h3 style="color: red">
                    Data not found
                </<h3>
                <?php
            }
            else
            {
                ?>
                <h3>List of <span>Movies</span></h3>

                <div class="row clearfix">
                    <?php
                    foreach($movies as $movie)
                    {
                        if(empty($movie['PICTURENAME']) && !file_exists($this->request->webroot."img/".$movie['PICTURENAME']))
                        {
                            $picture_name=$this->request->webroot."img/film_strip_blank.png";
                        }
                        else
                        {
                            $picture_name=$this->request->webroot."img/".$movie['PICTURENAME'];
                        }
                        ?>
                        <a href="<?php echo $this->request->webroot.'website/details/'.$movie['NUM'];?>">
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="category-item">
                                    <img src="<?php echo $picture_name;?>" >
                                    <br/>
                                    <?php echo $movie['ORIGINALTITLE'];?> (<?php echo $movie['YEAR'];?>)
                                </div>

                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div> <!-- end .row -->
                <div class="blog-list-pagination">
                    <ul class="pagination">
                        <?php
                        echo $this->Paginator->prev('<');
                        echo $this->Paginator->numbers();
                        echo $this->Paginator->next('>');
                        ?>
                    </ul>
                </div>
            <?php
            }
            ?>

        </div> <!-- end .tabe-pane -->
    </div> <!-- end .tabe-content -->

        </div> <!-- end .product-details -->
    </div> <!-- end .page-content -->
</div>


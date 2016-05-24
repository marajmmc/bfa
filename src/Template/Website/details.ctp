
<div class="col-md-12">
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

            foreach($movie as $movie_details)
            {
                if(empty($movie_details['PICTURENAME']) && !file_exists($this->request->webroot."img/".$movie_details['PICTURENAME']))
                {
                    $picture_name=$this->request->webroot."img/film_strip_blank.png";
                }
                else
                {
                    $picture_name=$this->request->webroot."img/".$movie_details['PICTURENAME'];
                }
                ?>
                    <h3><?php echo $movie_details['ORIGINALTITLE'];?></h3>
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="category-item">
                                <img src="<?php echo $picture_name;?>" >
                                <br/>
                                <a href="<?php echo $this->request->webroot.'website/details/'.$movie_details['NUM'];?>"><?php echo $movie_details['ORIGINALTITLE'];?> (<?php echo $movie_details['YEAR'];?>) </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <span><strong>Title: </strong> <?php echo $movie_details['ORIGINALTITLE'];?></span><br />
                            <span><strong>Director:</strong> <?php echo $movie_details['DIRECTOR'];?></span><br />
                            <span><strong>Producer:</strong> <?php echo $movie_details['PRODUCER'];?></span><br />
                            <span><strong>Writer:</strong> <?php echo $movie_details['WRITER'];?></span><br />
                            <span><strong>Composer:</strong> <?php echo $movie_details['COMPOSER'];?></span><br />
                            <span><strong>Country:</strong> <?php echo $movie_details['COUNTRY'];?></span><br />
                            <span><strong>Media Type:</strong> <?php echo $movie_details['MOVIE_TYPE'];?></span><br />
                            <span><strong>Rating:</strong> <?php echo $movie_details['RATING'];?></span><br />
                            <span><strong>Category:</strong> <?php echo $movie_details['CATEGORY'];?></span><br />
                            <span><strong>Certification:</strong> <?php echo $movie_details['CERTIFICATION'];?></span><br />
                            <span><strong>Year:</strong> <?php echo $movie_details['YEAR'];?></span><br />
                            <span><strong>Length:</strong> <?php echo $movie_details['LENGTH'];?></span><br />
                            <span><strong>Movie Type:</strong> <?php echo $movie_details['MOVIE_TYPE'];?></span><br />
                        </div>
                    </div>
                    <br />
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span><strong>Actors: </strong> <?php echo $movie_details['ACTORS'];?></span><br /><br />
                            <span><strong>Description: </strong> <?php echo $movie_details['DESCRIPTION'];?></span><br /><br />
                            <span><strong>Comment: </strong> <?php echo $movie_details['COMMENTS'];?></span><br />
                        </div>
                    </div>
                <?php
            }
            ?>
         <!-- end .tabe-pane -->
    </div> <!-- end .tabe-content -->

        </div> <!-- end .product-details -->
    </div> <!-- end .page-content -->
</div>
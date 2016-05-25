
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
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div style="height: 300px; border: 10px solid rgba(255, 249, 142, 0.79); ">
                                <img style="height: 280px; width: 330px" src="<?php echo $picture_name;?>" >

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6" style="">
                            <table class="table" style="width: 100%;">
                                <tr>
                                    <th width="20%" style="text-align: left;">Title</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['ORIGINALTITLE'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Director</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['DIRECTOR'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Producer</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['PRODUCER'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Writer</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['WRITER'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Composer</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['COMPOSER'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Country</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['COUNTRY'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Media Type</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['MOVIE_TYPE'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Rating</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['RATING'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Category</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['CATEGORY'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Certification</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['CERTIFICATION'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Year</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['YEAR'];?></td>
                                </tr>
                                <tr>
                                    <th width="20%" style="text-align: left;">Length</th>
                                    <th width="2%" style="text-align: left;">:</th>
                                    <td width="78%" style="text-align: left;"><?php echo $movie_details['LENGTH'];?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                        <br />
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span>
                                <strong>Actors: <hr /></strong>
                                <?php echo $movie_details['ACTORS'];?>
                            </span><br /><br />
                            <span>
                                <strong>Description: <hr /></strong>
                                <?php echo $movie_details['DESCRIPTION'];?>
                            </span><br /><br />
                            <span>
                                <strong>Comment: <hr /></strong>
                                <?php echo $movie_details['COMMENTS'];?>
                            </span><br />
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
<!DOCTYPE html>
<!-- 
Name: Mazba's Cake
Version: 1.6
Author: Mazba Kamal
Website: http://www.soft-bd.com/
Contact: mazba.cse@gmail.com
Follow: www.twitter.com/mazba_kamal
Like: www.facebook.com/mazbakamal
License: You must have a valid license purchased only from softbd
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>
        বাংলাদেশ ফিল্ম আর্কাইভ
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= $this->request->webroot; ?>website/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>

    <!--    jquery -->
    <!--[if IE 9]>
    <script src="<?= $this->request->webroot; ?>website/js/media.match.min.js"></script>
    <![endif]-->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body>
    <div id="main-wrapper">
        <?php echo $this->element('website_header');?>

        <div id="page-content" class="home-slider-content">
            <div class="container">
                <div class="home-with-slide">
                    <div class="row">
                        <?php echo $this->fetch('content'); ?>
                        <?php echo $this->element('website_left_site');?>
                    </div> <!-- end .row -->
                </div> <!-- end .home-with-slide -->
            </div> <!-- end .container -->
        </div>  <!-- end #page-content -->
        <footer id="footer">
            <div class="main-footer">


            </div> <!-- end .main-footer -->

            <div class="copyright">
                <div class="container">
                    <p>Copyright 2014 &copy; Bangladesh Film Archive-BFA. All rights reserved.</p>

                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shortcodes</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div> <!-- END .container -->
            </div> <!-- end .copyright-->
        </footer> <!-- end #footer -->
    </div>


    <!-- END CONTAINER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="<?= $this->request->webroot; ?>website/js/jquery.ba-outside-events.min.js"></script>
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?= $this->request->webroot; ?>website/js/gomap.js"></script>
    <script type="text/javascript" src="<?= $this->request->webroot; ?>website/js/gmaps.js"></script>
    <script src="<?= $this->request->webroot; ?>website/js/bootstrap.min.js"></script>
    <script src="<?= $this->request->webroot; ?>website/js/owl.carousel.js"></script>
    <script src="<?= $this->request->webroot; ?>website/js/scripts.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script>
        $(document).ready(function() {
            $(document).on('focus', '#search_string', function () {
                $(this).autocomplete({
                    source: function (request, response) {
                        $.ajax({
                            type: 'POST',
                            url: "<?= $this->Url->build('/Website/get_movies')?>",
                            dataType: "json",
                            data: {
                                qstring: request.term
                            },
                            success: function (data) {
                                response(data);
                            }
                        });
                    }
                });
            });
        });
    </script>

<style>
    .ui-widget-content .ui-menu-divider
    {
        height: 50px;
    }
</style>
</body>
<!-- END BODY -->
</html>
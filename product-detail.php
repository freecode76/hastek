<?php include("./data/data-spring-vibration-isolators.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>lighten</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <?php 
         include("./components/navbar-nav.php");
      ?>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Spring Vibration Isolators</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="about_box">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-hero">
                        <div class="featured-carousel owl-carousel">
                            <?php for($i = 0; $i < count($free_standing_spring_isolator["title"]["image"]); $i++) { ?>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center"
                                        style="background-image: url(<?php echo $free_standing_spring_isolator["title"]["image"][$i] ?>);">
                                        <!-- <div class="text text-center">
                                            <h2>Discover New Places</h2>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="my-5 text-center">
                            <ul class="thumbnail">
                            <?php for($i = 0; $i < count($free_standing_spring_isolator["title"]["image"]); $i++) { ?>
                                <li ><a href="#"><img src="<?php echo $free_standing_spring_isolator["title"]["image"][$i] ?>" alt="Image" class="img-fluid"></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="about_box">
               <h3>Who is Lighten</h3>
               <?php echo $free_standing_spring_isolator["details"][0] ?>
            </div>
         </div> 
      </div>
   </div>
</div>

    <!-- Video  -->
    <div class="about">
        <div class="container card-header">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="ratio ratio-16x9 w-auto ">
                        <iframe class="w-100" height="275px"
                            src="https://www.youtube.com/embed/9qEjNogFOck?si=wBltQmovmpWwUbCB" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <h3>Who is HASTEK</h3>
                        <p class="text-justify"><span>Founded in 2013, Hastek has been dedicated in TELECOM system field
                                to perfect itself as an one-stop mechanical and fixing support systems manufacturer.
                                Hastek factories cover a vast area in Shanghai and Wuxi respectively, with the
                                certificates of ISO9001 and CE, Hastek pays much attention on quality control and
                                process inspection. Owing to 100+ workers and 10 years’ experience, Hastek possesses the
                                full capabilities and technology.
                            </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Video -->

    <!--  footer -->
    <footer>
        <?php include("./components/footer-foot.php")?>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
    </script>
</body>

</html>
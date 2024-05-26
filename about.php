<?php include("./data/about.php") ?>
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
   <title>Hastek | About</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
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
                  <h2>about</h2>
               </div>
            </div>
         </div>
      </div>

   </div>


   <div class="about">
      <div class="container gap-5">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="about_box">
                  <figure class="d-flex justify-content-center align-items-center"><img style="width: 400px;"
                        src="images/about.png" />
                  </figure>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="about_box">
                  <h3><?php echo $hastekindonesia["title"] ?></h3>
                  <?php for ($i = 0; $i < count($hastekindonesia["desc"]); $i++) { ?>
                  <p class="text-justify"><?php echo $hastekindonesia["desc"][$i] ?></p>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- CHOOSE  -->
   <!-- <div class="whyschose">
      <div class="container">

         <div class="row">
            <div class="col-md-7 offset-md-3">
               <div class="title">
                  <h2>Why <strong class="black">choose us</strong></h2>
                  <span>Fastest repair service with best price!</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="choose_bg">
      <div class="container">
         <div class="white_bg">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/1.png" /></i>
                     <h3>Data recovery</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/2.png" /></i>
                     <h3>Computer repair</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/3.png" /></i>
                     <h3>Mobile service</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/4.png" /></i>
                     <h3>Network solutions</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read-more">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- end CHOOSE -->

   <!-- service -->
   <div class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <div class="title">
                  <h2><strong class="black">Why </strong>choose us</h2>
                  <span>Easy and effective way to get your device repaired.</span>
               </div>
            </div>
         </div>
         <div class="row">
            <?php for ($i = 0; $i < count($whychooseus["title"]); $i++) { ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <img src="<?php echo $whychooseus["image"][$i] ?>" />
                  <h3><?php echo $whychooseus["title"][$i] ?></h3>
                  <p class="text-justify"><?php echo $whychooseus["desc"][$i] ?></p>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
   <!-- end service -->




   <!--  footer -->
   <footer>
      <?php include("./components/footer-foot.php") ?>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
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
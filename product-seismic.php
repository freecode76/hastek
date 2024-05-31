<?php
include("./data/table.php");
include("./data/data-seismic.php");
?>
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
   <title>Hastek | Seismic</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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
                  <h2>Vibration Isolation for HVAC Systems</h2>
               </div>
            </div>
         </div>
      </div>

   </div>

   <div class="Lastestnews blog p-0">
      <!-- <div class="container"> -->
      <div class="row p-3">
         <?php
         for ($i = 0; $i < count($product_home["image"]); $i++) { ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
               <div class="news-box p-1">
                  <a href="<?php echo $product_home["page"][$i] ?>">
                     <figure><img src="<?php echo $product_home["image"][$i] ?>" alt="img" /></figure>
                     <h3><?php echo $product_home["title"][$i] ?></h3>
                     <span> <?php echo $product_home["details"][$i] ?> </span>
                     <!-- <p><?php echo $product_home["desc"][$i] ?></p> -->
                  </a>
               </div>
            </div>
         <?php } ?>
      </div>
      <!-- </div> -->
   </div>

   <!-- Product Item -->
   <div class="Lastestnews blog p-0">
      <?php for ($i = 0; $i < count($seismic_page["data"]); $i++) { ?>
         <div class="container">
            <h3 class="text-justify"><?php echo $seismic_page["data"][$i]["title"][0] ?></h3>
            <hr style="border: 0; height: 1px; background: #666; background-image: linear-gradient(to right, #f6f6f6, #666, #f6f6f6);">
            <div class="row p-3">
               <?php for ($j = 0; $j < count($seismic_page["data"][$i]["title"]["title_item"]); $j++) { ?>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="news-box p-1" style="height: 400px;">
                        <a href="<?php echo $seismic_page["data"][$i]["title"]["page"][$j]
                                 ?>">

                           <figure><img src="<?php echo $seismic_page["data"][$j]["title"]["image"][$j] ?>" alt="img" />
                           </figure>
                           <h3><?php echo $seismic_page["data"][$i]["title"]["title_item"][$j] ?></h3>
                           <p><?php echo $seismic_page["data"][$i]["title"]["details"][$j] ?></p>
                        </a>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
      <?php } ?>
   </div>
   <!-- End Product Item -->

   <!-- Video  -->
   <div class="about card-header" style="padding-top: 70px;">
      <div class="container about-container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
               <div class="about_box">
                  <h3>Hastek Indonesia</h3>
                  <p class="text-justify"><span>Founded in 2013, Hastek has been dedicated in TELECOM system field
                        to perfect itself as an one-stop mechanical and fixing support systems manufacturer.
                        Hastek factories cover a vast area in Shanghai and Wuxi respectively, with the
                        certificates of ISO9001 and CE, Hastek pays much attention on quality control and
                        process inspection. Owing to 100+ workers and 10 years experience, Hastek possesses the
                        full capabilities and technology.
                     </span></p>

               </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
               <div class="ratio ratio-16x9 w-auto ">
                  <iframe class="w-100" height="290px" src="https://www.youtube.com/embed/ZLIAAu6Pnxo?si=pfGCiz2Dvk4ohiQS" title="YouTube video" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end Video -->

   <div class="product">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2><strong class="black">our products</strong></h2>
                  <p class="text-justify"><span>Our offered solutions are created from single products that are
                        designed to combine
                        together and work as effective product of seismic bracing systems. This means that when
                        using a combination of Hastek products, you can be confident that your entire
                        installation
                        is strong and reliable, from anchor to clamp.</span></p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- service -->
   <!-- <div class="service"> -->
   <!-- <div class="container"> -->
   <!-- <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="title">
               <h2>BROCHURE <strong class="black">download</strong></h2>
               <span>Easy and effective way to get your device repaired.</span>
            </div>
         </div>
      </div>
      <div class="row"> -->

   <?php
   // var_dump(count($vibration_isolation_brochure["filename"]));die();
   //for ($i = 0; $i < count($vibration_isolation_brochure["filename"]); $i++) { 
   ?>
   <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/pdf-icon-nobg.png" /></i> -->
   <!-- <h2><a href="pdf_file/<?php // echo $vibration_isolation_brochure["filename"][$i] 
                              ?>" target="_blank"><?php // echo $vibration_isolation_brochure["filename"][$i] 
                                                   ?></a></h2> -->
   <!-- </div>
            </div> -->
   <?php // } 
   ?>
   </div>
   <!-- </div> -->
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
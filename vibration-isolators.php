<?php
include("./data/data-vibration-isolators.php");
include("./data/table.php");
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
   <title> Hastek | Vibration Isolators
   </title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Owl Style -->
   <link rel="stylesheet" href="css/style.owl.css">
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

   <?php
   $id = $_GET["id"];
   $product = [];
   for ($i = 0; $i < count($product_detail_main["title"]); $i++) {
      if ($id == $product_detail_main["title"][$i]) {
         $product = $product_detail_main["data"][$i];
      };
   }
   ?>
   <div class="brand_color">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <?php for ($i = 0; $i < count($product_detail_main["title"]); $i++) { ?>
                  <?php if ($id == $product_detail_main["title"][$i]) { ?>
                  <h2><?php echo $product_detail_main["title"][$i] ?></h2>
                  <?php } ?>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="Lastestnews blog p-2">
      <div class="row row-cols-1 row-cols-md-3 g-4 p-3">
         <?php for ($i = 0; $i < count($product["image"]); $i++) { ?>
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-10 p-2">
            <div class="card h-100 news-box">
               <img src="<?php echo $product["image"][$i] ?>" alt="img" title="<?php echo $product["title"][$i] ?>" />
               <div class="card-body">
                  <h3 class="card-title"><a
                        href="<?php echo $product["page"][$i] ?>"><?php echo $product["title"][$i] ?></a>
                  </h3>
                  <p class="card-text"><?php echo $product["details"][$i] ?></p>
               </div>
               <div class="card-footer">
                  <i class="bi bi-file-earmark-pdf"></i>
                  <small class="text-body-light">
                     <a href="pdf_file/<?php echo $product["pdf"][$i] ?>" title="Download brochure "
                        target="_blank">Download brochure</a></small>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>

   <!-- Video  -->
   <div class="about  card-header">
      <div class="container about-container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="about_box">
                  <h3>Hastek Indonesia</h3>
                  <p class="text-justify"><span>Founded in 2013, Hastek has been dedicated in TELECOM system field
                        to perfect itself as an one-stop mechanical and fixing support systems manufacturer.
                        Hastek factories cover a vast area in Shanghai and Wuxi respectively, with the
                        certificates of ISO9001 and CE, Hastek pays much attention on quality control and
                        process inspection. Owing to 100+ workers and 10 years’ experience, Hastek possesses the
                        full capabilities and technology.
                     </span></p>
                  <button class="btn btn-about">Read More</button>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="ratio ratio-16x9 w-auto ">
                  <iframe class="w-100" height="290px"
                     src="https://www.youtube.com/embed/ZLIAAu6Pnxo?si=pfGCiz2Dvk4ohiQS" title="YouTube video"
                     allowfullscreen></iframe>
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
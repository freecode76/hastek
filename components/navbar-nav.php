<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- bootstrap css -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="../css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="../css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="../images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">

<body>
   <!-- header inner -->
   <div class="header">
      <div class="head_top">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="top-box">
                     <ul class="sociel_link">
                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="top-box">
                     <p>long established fact that a reader will be </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo"> <a href="index.html"><img src="images/logo-hastek.png" alt="logo" /></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-11 col-sm-11">
               <div class="menu-area">
                  <div class="limit-box">
                     <nav class="main-menu">
                        <ul class="menu-area-main">
                           <li <?php if($_SERVER['SCRIPT_NAME']=="/hastek/src/index.php") { ?> class="active"
                              <?php   }  ?>><a href="index.php">Home</a></li>
                           <li <?php if($_SERVER['SCRIPT_NAME']=="/hastek/src/about.php") { ?> class="active"
                              <?php   }  ?>><a href="about.php">About</a></li>
                           <li <?php if($_SERVER['SCRIPT_NAME']=="/hastek/src/product.php") { ?> class="active"
                              <?php   }  ?>><a href="product.php">Product</a></li>
                           <li <?php if($_SERVER['SCRIPT_NAME']=="/hastek/src/contact.php") { ?> class="active"
                              <?php   }  ?>><a href="contact.php">Contact</a></li>
                           <li></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
</body>

</html>
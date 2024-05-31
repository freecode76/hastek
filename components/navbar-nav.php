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
<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- fevicon -->
<link rel="icon" href="../images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<body>
   <!-- header inner -->
   <div class="head_top">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="top-box">
                  <!-- <ul class="sociel_link">
                     <li> <a href="#"><i class="bi bi-linkedin"></i>Download</a></li>
                     <li> <a href="#"><i class="bi bi-whatsapp"></i>NEED PRICING?</a></li>
                     <li> <a href="#"><i class="bi bi-instagram"></i></a></li>
                     <li> <a href="#"><i class="bi bi-google"></i>CONTACT</a></li>
                  </ul> -->
               </div>
            </div>
            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
               <div class="top-box">
                  <ul class="sociel_link">
                     <li> <a href="#">Download</a></li>
                     <li> <a href="#"></>NEED PRICING?</a></li>
                     <!-- <li> <a href="#"><i class="bi bi-google"></i>CONTACT</a></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="header" id="navbar_top" style="transition: all ease-in-out .3s;">
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
                           <li <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active" <?php   }  ?>>
                              <a href="index.php">Home</a>
                           </li>
                           <li <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active" <?php   }  ?>>
                              <a href="about.php">About</a>
                           </li>
                           <li>
                              <a href="#">Product</a>
                              <ul>
                                 <ul class="d-flex flex-column">
                                    <li><a href="product-isolation.php" class="item-dropdown">Vibration
                                          Isolation for HVAC Systems</a></li>
                                    <li><a href="product-seismic.php" class="item-dropdown">Seismic & Wind
                                          Restraint</a>
                                    </li>
                                    <li><a href="product-piper.php" class="item-dropdown">Pipe Riser Isolation</a></li>
                                 </ul>
                                 <ul class="d-flex flex-column ">
                                    <li><a href="#" class="item-dropdown" style="font-size: 16px;">Product</a></li>
                                    <li><a href="#" class="item-dropdown" style="font-size: 14px; font-weight: 400;">Spring Vibration
                                          Isolators</a></li>
                                    <li><a href="#" class="item-dropdown" style="font-size: 14px; font-weight: 400;">Isolation Mounts &
                                          Pads</a></li>
                                    <li><a href="#" class="item-dropdown" style="font-size: 14px; font-weight: 400;">Vibration Isolation
                                          Hangers</a></li>
                                 </ul>
                              </ul>
                           </li>
                           <li <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active" <?php   }  ?>><a href="contact.php">Contact</a></li>
                           <li></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <script>
         document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener('scroll', function() {
               if (window.scrollY > 50) {
                  document.getElementById('navbar_top').classList.add('fixed-top');
                  document.getElementById('navbar_top').style.paddingBottom = 0 + "px";
                  navbar_height = document.querySelector('.navbar').offsetHeight;
                  document.body.style.paddingTop = navbar_height + 'px';

               } else {
                  document.getElementById('navbar_top').classList.remove('fixed-top');
                  document.body.style.paddingTop = '0';
                  document.getElementById('navbar_top').style.paddingBottom = 35 + "px";
               }
            });
         });

         //Disable right click script
         var message = "";
         ///////////////////////////////////
         function clickIE() {
            if (document.all) {
               (message);
               return false;
            }
         }

         function clickNS(e) {
            if (document.layers || (document.getElementById && !document.all)) {
               if (e.which == 2 || e.which == 3) {
                  (message);
                  return false;
               }
            }
         }
         if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = clickNS;
         } else {
            document.onmouseup = clickNS;
            document.oncontextmenu = clickIE;
         }

         document.oncontextmenu = new Function("return false")
      </script>
      <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
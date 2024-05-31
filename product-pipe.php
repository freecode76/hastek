<?php
include("./data/table.php");
include("./data/data-vibration-isolators.php");
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
   <title>Hastek | Vibration Isolators</title>
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
   <style>
      .table {
         width: 50%;
         border-collapse: collapse;
         margin-bottom: 20px;
      }

      .table,
      .table th,
      .table td {
         border: 2px solid #ffc221;
      }

      .table th,
      .table td {
         padding: 10px;
         color: #000;
         text-align: center;
      }

      .table th {
         background-color: #ffc221;
         color: white;
      }

      .steps-parent {
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         margin: auto;
      }

      .steps {
         display: flex;
         margin: auto;
         width: 90%;
         border: 2px solid #ffc221;
      }

      .steps-column {
         display: flex;
         flex-direction: row;
         margin: auto;
         gap: 5px;
      }

      .steps-title {
         display: flex;
         padding-top: 50px;
         color: #ffc221;
      }

      .step {
         width: 50.33%;
         text-align: center;
         border-right: 2px solid #ffc221;
      }

      .step:last-child {
         border-right: none;
      }

      .step img {
         width: 150px;
         display: block;
         margin: 0 auto 20px;
      }

      .step p {
         background-color: #ffc221;
         color: white;
         padding: 0 25px 0 25px;
         font-weight: bold;
      }

      .install {
         padding: 20px;
         text-align: justify;
      }

      .install p {
         color: #000;
      }

      .table-section {
         width: 45%;
         border-collapse: collapse;
         margin: 20px;
      }

      .table-section,
      .table-section th,
      .table-section td {
         border: 2px solid #ffc221;
      }

      .table-section th,
      .table-section td {
         padding: 8px;
         text-align: center;
      }

      .table-section th {
         background-color: #ffc221;
         color: white;
      }
   </style>
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
                  <h2>Pipe Riser Isolation</h2>
               </div>
            </div>
         </div>
      </div>

   </div>

   <div class="steps-parent container">
      <h2><strong class="steps-title">UTT10 Structural Attachment</strong></h2>
      <!-- <div class="container"> -->
      <div class="steps-column p-3 col-lg-12">
         <table class="table">
            <tr>
               <th colspan="4">UL Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>lbs</th>
               <th>kN</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1885</td>
               <td>(8.38)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>

         <table class="table">
            <tr>
               <th colspan="5">FM Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>Maximal load ratings installation angle 0°-30°</th>
               <th>Maximal load ratings installation angle 31°-90°</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1490 lbs. (6.62 kN)</td>
               <td>1980 lbs. (8.80 kN)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>


      </div>

      <div class="d-flex justify-content-center align-items-center m-auto w-100 container">
         <div class="steps w-75">
            <div class="step">
               <img src="images/product1.jpg" alt="Step 1">
               <p>Step 1</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 2">
               <p>Step 2</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 3">
               <p>Step 3</p>
            </div>
         </div>
         <div class="install text-justify w-75">
            <p><strong>Install:</strong></p>
            <p>1. Insert the brace part into the building. Ensure the brace part is aligned with the building's
               structure.</p>
            <p>2. Insert the accessory connected with the brace part into the brace part.</p>
            <p>3. Attach the clamp to the bottom of the brace part, and fix it with the clamp bolt. Tighten the clamp
               bolt until hand tight, then further tighten until the head breaks off.</p>
            <p>4. Tighten the brace bolt until hand tight.</p>
         </div>
      </div>
      <!-- </div> -->

   </div>

   <div class="steps-parent container">
      <h2><strong class="steps-title">UTT10Q Structural Attachment
         </strong></h2>
      <!-- <div class="container"> -->
      <div class="steps-column p-3 col-lg-12">
         <table class="table">
            <tr>
               <th colspan="4">UL Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>lbs</th>
               <th>kN</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1885</td>
               <td>(8.38)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>

         <table class="table">
            <tr>
               <th colspan="5">FM Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>Maximal load ratings installation angle 0°-30°</th>
               <th>Maximal load ratings installation angle 31°-90°</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1490 lbs. (6.62 kN)</td>
               <td>1980 lbs. (8.80 kN)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>


      </div>

      <div class="d-flex justify-content-center align-items-center m-auto w-100 container">
         <div class="steps w-75">
            <div class="step">
               <img src="images/product1.jpg" alt="Step 1">
               <p>Step 1</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 2">
               <p>Step 2</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 3">
               <p>Step 3</p>
            </div>
         </div>
         <div class="install text-justify w-75">
            <p><strong>Install:</strong></p>
            <p>1. Insert the brace part into the building. Ensure the brace part is aligned with the building's
               structure.</p>
            <p>2. Insert the accessory connected with the brace part into the brace part.</p>
            <p>3. Attach the clamp to the bottom of the brace part, and fix it with the clamp bolt. Tighten the clamp
               bolt until hand tight, then further tighten until the head breaks off.</p>
            <p>4. Tighten the brace bolt until hand tight.</p>
         </div>
      </div>
      <!-- </div> -->

   </div>

   <div class="steps-parent container">
      <h2><strong class="steps-title">UTT10Q Structural Attachment
         </strong></h2>
      <!-- <div class="container"> -->
      <div class="steps-column p-3 col-lg-12">
         <table class="table">
            <tr>
               <th colspan="4">UL Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>lbs</th>
               <th>kN</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1885</td>
               <td>(8.38)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>

         <table class="table">
            <tr>
               <th colspan="5">FM Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>Maximal load ratings installation angle 0°-30°</th>
               <th>Maximal load ratings installation angle 31°-90°</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1490 lbs. (6.62 kN)</td>
               <td>1980 lbs. (8.80 kN)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>


      </div>

      <div class="d-flex justify-content-center align-items-center m-auto w-100 container">
         <div class="steps w-75">
            <div class="step">
               <img src="images/product1.jpg" alt="Step 1">
               <p>Step 1</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 2">
               <p>Step 2</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 3">
               <p>Step 3</p>
            </div>
         </div>
         <div class="install text-justify w-75">
            <p><strong>Install:</strong></p>
            <p>1. Insert the brace part into the building. Ensure the brace part is aligned with the building's
               structure.</p>
            <p>2. Insert the accessory connected with the brace part into the brace part.</p>
            <p>3. Attach the clamp to the bottom of the brace part, and fix it with the clamp bolt. Tighten the clamp
               bolt until hand tight, then further tighten until the head breaks off.</p>
            <p>4. Tighten the brace bolt until hand tight.</p>
         </div>
      </div>
      <!-- </div> -->

   </div>

   <div class="steps-parent container">
      <h2><strong class="steps-title">UTT10Q Structural Attachment
         </strong></h2>
      <!-- <div class="container"> -->
      <div class="steps-column p-3 col-lg-12">
         <table class="table">
            <tr>
               <th colspan="4">UL Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>lbs</th>
               <th>kN</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1885</td>
               <td>(8.38)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>

         <table class="table">
            <tr>
               <th colspan="5">FM Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>Maximal load ratings installation angle 0°-30°</th>
               <th>Maximal load ratings installation angle 31°-90°</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1490 lbs. (6.62 kN)</td>
               <td>1980 lbs. (8.80 kN)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>


      </div>

      <div class="d-flex justify-content-center align-items-center m-auto w-100 container">
         <div class="steps w-75">
            <div class="step">
               <img src="images/product1.jpg" alt="Step 1">
               <p>Step 1</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 2">
               <p>Step 2</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 3">
               <p>Step 3</p>
            </div>
         </div>
         <div class="install text-justify w-75">
            <p><strong>Install:</strong></p>
            <p>1. Insert the brace part into the building. Ensure the brace part is aligned with the building's
               structure.</p>
            <p>2. Insert the accessory connected with the brace part into the brace part.</p>
            <p>3. Attach the clamp to the bottom of the brace part, and fix it with the clamp bolt. Tighten the clamp
               bolt until hand tight, then further tighten until the head breaks off.</p>
            <p>4. Tighten the brace bolt until hand tight.</p>
         </div>
      </div>
      <!-- </div> -->

   </div>

   <div class="steps-parent container">
      <h2><strong class="steps-title">UTT10Q Structural Attachment
         </strong></h2>
      <!-- <div class="container"> -->
      <div class="steps-column p-3 col-lg-12">
         <table class="table">
            <tr>
               <th colspan="4">UL Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>lbs</th>
               <th>kN</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1885</td>
               <td>(8.38)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>

         <table class="table">
            <tr>
               <th colspan="5">FM Maximum Design Load</th>
            </tr>
            <tr>
               <th>Brace Member</th>
               <th>Maximal load ratings installation angle 0°-30°</th>
               <th>Maximal load ratings installation angle 31°-90°</th>
               <th>Wt. Each</th>
            </tr>
            <tr>
               <td>1" SCH40 pipe</td>
               <td>1490 lbs. (6.62 kN)</td>
               <td>1980 lbs. (8.80 kN)</td>
               <td>1.54 lb. (0.7 kg)</td>
            </tr>
         </table>


      </div>

      <div class="d-flex justify-content-center align-items-center m-auto w-100 container mb-25">
         <div class="steps w-75">
            <div class="step">
               <img src="images/product1.jpg" alt="Step 1">
               <p>Step 1</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 2">
               <p>Step 2</p>
            </div>
            <div class="step">
               <img src="images/product2.jpg" alt="Step 3">
               <p>Step 3</p>
            </div>
         </div>
         <div class="install text-justify w-75">
            <p><strong>Install:</strong></p>
            <p>1. Insert the brace part into the building. Ensure the brace part is aligned with the building's
               structure.</p>
            <p>2. Insert the accessory connected with the brace part into the brace part.</p>
            <p>3. Attach the clamp to the bottom of the brace part, and fix it with the clamp bolt. Tighten the clamp
               bolt until hand tight, then further tighten until the head breaks off.</p>
            <p>4. Tighten the brace bolt until hand tight.</p>
         </div>
      </div>
      <!-- </div> -->

   </div>


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
               <i><img src="icon/pdf-icon-nobg.png" /></i>
               <h2><a href="pdf_file/<?php echo $vibration_isolation_brochure["filename"][$i] ?>"
                     target="_blank"><?php echo $vibration_isolation_brochure["filename"][$i] ?></a></h2>
            </div>
         </div> -->
   <?php //} 
   ?>
   <!-- </div> -->
   <!-- </div> -->
   <!-- </div> -->
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
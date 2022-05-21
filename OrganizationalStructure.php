<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/orga-style.css" />
  <link rel="stylesheet" href="css/mobile.css" />
  <title>Department of Education | Official Website of SDO Batanes</title>
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.4,1,js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- header start -->
  <?php include "includes/header.php" ?>

  <!-- Back to top button -->
  <a id="button"></a>
  <!-- Back to top button -->

  <!--banner-->
  <div class="main-banner-wrap">
    <div class="main-title">
      <h2>ORGANIZATIONAL STRUCTURE</h2>
    </div>
    <div class="banner3-wrap">
      <div class="banner3">
        <p>YOU ARE HERE:</p>
        <p><a href="index.php">HOME</a><i class="fa fa-angle-right" style="margin-top: 2.5px; left:8px;"></i></p>
        <p style="margin-left:10px;"><a href="#">ABOUT US</a><i class="fa fa-angle-right" style="margin-top: 2.5px; left:100px;"></i></p>
        <div class="banner-content">
          <p>ORGANIZATIONAL STRUCTURE</p>
        </div>
      </div>
    </div>
  </div>
  <!--banner-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="css/script.js"></script>
  <!-- end image slider -->

  <!-------------boxes start ------------->
  <div class="wrapper" style="width: 100%;">
    <div class="container2" style="width: 100%;">
      <!-- content middle -->

      <div class="main-content">
        <section>
          <div class="mid-content">

            <div class="onward-container">
              <div class="gallery">
                <a target="_blank" href="img/onward we go.png">
                  <img src="img//onward we go.png" style=" border-radius: 4px;" />
                </a>
              </div>
            </div>

            <div class="mid1">

              <h3>Click image to enlarge</h3>

              <div class="gallery">
                <a target="_blank" href="img/Org.jpg">
                  <img src="img/Org.jpg" style="object-fit: contain; border: #a8a8a8 1px solid; border-radius: 4px;" />
                </a>
              </div>
            </div>

            <div class="mid2">
              <h3>Central Office</h3>
              <p><a href="ExecutiveOffice.php">Executive Office and Directly Supervised Offices</a></p>
              <p><a href="Bureaus.php">Bureaus</a></p>
              <p><a href="Services.php">Services</a></p>

              <h3 style="margin-top: 25px;">Schools Division Office</h3>
              <p><a href="osds.php">Office of the Schools Division Superintendent.</a></p>
              <p><a href="cid.php">Curriculum Implementation Division</a></p>
              <p><a href="sgod.php">School Governance and Operations Division</a></p>

            </div>

            <!----left & right start----->

            <?php include "includes/leftandrightboxes.php" ?>

            <!----left & right end----->


            <!----footer start----->

            <?php include "includes/footer.php" ?>

            <!----footer end----->

          </div>
        </section>

      </div>

      <!-- middle child -->



    </div>
  </div>


  <!-------------------boxes end----------------------->


  <!-- philippine standard time script-->

  <?php include "includes/standardtime.php" ?>


  <!-- end philippine standard time -->

  <!--footer-->




</body>

</html>
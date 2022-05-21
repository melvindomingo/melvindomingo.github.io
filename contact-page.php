<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/contact-style.css" />

    <link rel="stylesheet" href="css/mobile.css" />
    <title>Department of Education | Official Website of SDO Batanes</title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4,1,js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

</head>

<body>
    <!-- header start -->
    <?php include "includes/header.php" ?>

    <!-- Back to top button -->
    <a id="button"></a>
    <!-- Back to top button -->

    <!--banner-->

    <div class="banner-wrap2">
        <div class="container-banner2" style="font-family: Arial, Helvetica, sans-serif;">
            <h1 style="font-size: 30px; padding:25px;">CONTACT US
            </h1>
        </div>

        <div class="arrow-container2" style="margin-top: 130px; width:98%;">

            <div class="arrow">
                <p>YOU ARE HERE:</p>
            </div>

            <div class="arrow2">
                <p><a href="index.php">HOME</a><i class="fa fa-angle-right" style="font-size: 10px;"></i></p>

                <div class="arrow3">
                    <h6><a href="innovations.php">CONTACT</a><i class="fa fa-angle-right" style="font-size: 10px; margin-left:190px;"></i></h6>
                    <h5 style="margin-left: 290px;">CONTACT AS<h5>
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


                        <main style="width: 100%;">
                            <p>SEND E-MAIL</p>
                            <form class="contact-form" action="contactform.php" method="post">
                                <input type="name" name="name" placeholder="Full name" />
                                <input type="email" name="mail" placeholder="Your e-mail" />
                                <input type="subject" name="subject" placeholder="Subject" />
                                <textarea name="message" placeholder="Message"></textarea>
                                <button type="submit" name="submit">SEND MAIL</button>
                            </form>
                        </main>



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
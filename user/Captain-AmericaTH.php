<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wajor cineplex</title>
    <link rel="icon" href="/favicon_io/favicon.ico">
    <link rel="stylesheet" href="style-Movies-info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!----------------------- nav bar --------------------------->
    <?php include_once("./nav-th.php")?>
    <!----------------------- nav bar --------------------------->

    <!----------------------- movie info ------------------------>
    <div class="md-head">
        <div class="md-head-container">
            <div class="md-head-left">
                <div class="md-head-logo" style="display: none;">


                </div>
                <div class="mdcm-box">
                    <div class="mdcm-thumbnail">
                        <img src="./pictures/movie/captain.jpg" class="img-fluid">
                    </div>
                    <div class="mdcm-title">
                        <div class="release-date">
                            10
                            เมษายน
                            2025
                        </div>
                        <h1>

                            captain america the first avenger

                        </h1>
                        <div class="detail-genres">


                            ต่อสู้ ,



                            ซูปเปอร์ฮีโร่


                        </div>
                        <div class="detail-general">
                            <ul>
                                <li>
                                    <img src="./pictures/rating_0.png" class="icon-bmdht">
                                </li>
                                <li>
                                    <img src="./pictures/icon-time.svg" class="bshn-icon-desc">
                                    124 นาที
                                </li>
                            </ul>

                        </div>
                        <div class="bshn-desc">
                            <div class="custom-movie-logo">


                                <div>
                                    <img src="./pictures/image.png" class="mdcm-icon">
                                </div>


                            </div>

                            <div class="imdb_row">
                                <ul>

                                    <li>
                                        <div class="icon-row">
                                            <div class="icon-row-left">
                                                <a href="javascript:;">
                                                    <img src="./pictures/logo_imdb.png">
                                                </a>
                                            </div>
                                            <div class="icon-row-right">
                                                <span>: <b>0</b></span>
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                    </li>



                                    <li>
                                        <div class="icon-row">
                                            <div class="icon-row-left">
                                                <a href="javascript:;">
                                                    <img src="./pictures/logo_rotten.png">
                                                </a>
                                            </div>
                                            <div class="icon-row-right">
                                                <span>: <b>0%</b></span>
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                    </li>



                                </ul>
                            </div>


                        </div>
                        <!-- Button -->

                        <a id="view_showtime" href="#">

                            ดูรอบฉาย

                        </a>

                        <!-- Button -->
                    </div>
                </div>
                <div class="md-head-hint" style="display: none">
                    <p>

                    </p>
                </div>

            </div>
            <!-- <div class="md-head-abs"></div> -->
            <div class="md-head-trailer">
                <div class="trailerVdo">
                    <div class="vdo-wrapper">
                        <div id="ytvideo" style="height:450px;position:relative">
                            <div>
                                <div id="vr-f2g54uhbj18-viralize-wide-wrapper">
                                    <video controls autoplay muted>
                                        <source src="./pictures/Captain-America/Captain America_ The First Avenger - Trailer.mp4"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>

    <!----------------------- /movie info ----------------------->

    <!----------------------- content wrapper ------------------->
    <section class="box-wrapper md">
        <div class="box-movie-detail">

            <!-- Background -->
            <div class="md-bg">

            </div>
            <div class="md-bg">

            </div>
            <div class="md-bg-g"></div>
            <!-- Head Title -->

            <!-- ตรงนี้มี <div class="mdc-movie-head-bg" style="display: none;"></div> มาก่อน แต่ลบไป -->

            <!--End  Head Title -->
            <!-- MD Content -->
            <div class="container-fluid">
                <div class="md-wrapper">
                    <div class="md-content">

                        <div class="mdc-tabs">
                            <ul class="nav nav-pills" id="mdetails" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="info-tabs" data-target="#info_sidebar"
                                        data-secondary="#info_left" data-toggle="tab" href="#second" role="tab"
                                        aria-controls="second" aria-selected="true">ข้อมูลภาพยนตร์</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="mdetailsLeft">

                                <!-- =========== Movie Detail === -->
                                <div class="tab-pane fade show active" id="info_left" role="tabpanel"
                                    aria-labelledby="info-tabs">
                                    <div class="mdc-info">

                                        <div class="box-showtime-cinema">
                                            <div class="bsc-list">
                                                <div class="accordion" id="Branch_List">



                                                    <div class="bsc-branch">
                                                        <div class="bscb-header">
                                                            <h2 class="mb-0"> นักแสดง </h2>
                                                        </div>
                                                        <div class="bscb-body">
                                                            <div class="mdcc">
                                                                <div
                                                                    class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                                                                    <div class="swiper-wrapper"
                                                                        style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/ChrisEvans2023.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Chris Evans
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Tommy_Lee_Jones.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Tommy Lee Jones
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Hugo_Weaving.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Hugo Weaving
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Hayley_Atwell.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Hayley Atwell
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Sebastian_Stan-64526.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Sebastian Stan
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Dominic_Cooper.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Dominic Cooper
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Toby_Jones_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Toby Jones
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Neal_McDonough.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Neal McDonough
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-prev"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Derek Luke.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Derek Luke
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Stanley Tucci.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Stanley Tucci
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Kevin_Feige.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Kevin Feige
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end --->
                                                                    </div>
                                                                    <span class="swiper-notification"
                                                                        aria-live="assertive" aria-atomic="true"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="bsc-branch">
                                                        <div class="bscb-header">
                                                            <h2 class="mb-0"> Director</h2>
                                                        </div>

                                                        <div class="bscb-body">
                                                            <div class="mdcc">
                                                                <div
                                                                    class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                                                                    <div class="swiper-wrapper"
                                                                        style="transform: translate3d(0px, 0px, 0px);">


                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./pictures/Captain-America/Joe_Johnston.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Joe Johnston
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end --->
                                                                    </div>
                                                                    <span class="swiper-notification"
                                                                        aria-live="assertive" aria-atomic="true"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="bsc-branch">
                                                        <div class="bscb-header">
                                                            <h2 class="mb-0">Synopsis</h2>
                                                        </div>
                                                        <div class="bscb-body info">
                                                            <p>

                                                            </p>
                                                            <p>Captain America is excavated from a crashed plane along with his shield. Johann Schmidt (Hugo Weaving),
                                                                a high-ranking Nazi, in search of a glass cube (the Tesseract). Jonhann is the top-ranking scientist in
                                                                Nazi Germany, working on superpowers from the Occult. He finds the Tesseract in Norway. In New York, Steve Rogers (Chris Evans)
                                                                is a thin asthmatic found ineligible for US military service. He friend James "Bucky" Barnes has been accepted
                                                                & is accepted to 107th infantry.</p>

                                                            <p>Dr. Abraham Erskine (Stanley Tucci) notices Steve, & his determination despite his appearance. He is also on the recruitment board 
                                                                & accepts Steve when he applies next. Meanwhile Johann works with Arnim Zola to harness the power of the cube to create energy weapons.
                                                                 They are both part of Hydra which earlier operated under Nazi, but to grow further Johann terminates his association to Hitler & goes independent.</p>


                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end of movie detail -->

                                <!-- end of movie showtime -->


                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Related News -->

            <!-- /Related News -->
        </div>
        <!-- /MD Content -->



    </section>
    <!----------------------- /content wrapper ------------------->
    <script src="script-Movies-CapTH.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

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
    <?php include('./nav.php')?>;
    <!----------------------- nav bar --------------------------->

    <!----------------------- movie info ------------------------>
    <div class="md-head">
        <div class="md-head-container">
            <div class="md-head-left">
                <div class="md-head-logo" style="display: none;">


                </div>
                <div class="mdcm-box">
                    <div class="mdcm-thumbnail">
                        <img src="./pictures/movie/antman.jpg" class="img-fluid">
                    </div>
                    <div class="mdcm-title">
                        <div class="release-date">
                            14
                            April
                            2025
                        </div>
                        <h1>

                            Ant-Man

                        </h1>
                        <div class="detail-genres">


                            Action ,



                            Superhero


                        </div>
                        <div class="detail-general">
                            <ul>
                                <li>
                                    <img src="./pictures/rating_0.png" class="icon-bmdht">
                                </li>
                                <li>
                                    <img src="./pictures/icon-time.svg" class="bshn-icon-desc">
                                    117 Mins
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

                            See Showtimes

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
                        <div id="ytvideo" style="height:450px;position:relative;margin-top: 20px;">
                            <div>
                                <div id="vr-f2g54uhbj18-viralize-wide-wrapper">
                                    <video controls autoplay muted>
                                        <source src="./Ant-Man/Ant-man.mp4"
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
                                        aria-controls="second" aria-selected="true">Informations</a>
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
                                                            <h2 class="mb-0"> Crew </h2>
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

                                                                                        <img src="./Ant-Man/Paul_Rudd.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Paul Rudd
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Evangeline_Lilly_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Evangeline Lilly
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Corey_Stoll_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Corey Stoll
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Bobby_Cannavale_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Bobby Cannavale
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Michael_Peña_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Michael Peña
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Clifford_Joseph_Harris_Jr.-.png"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Clifford Joseph Harris Jr.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Anthony_Mackie_2024.png"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Anthony Mackie
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Wood_harris_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Wood Harris
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-prev"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Judy_Greer_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Judy Greer
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Abby_Ryder_Fortson.webp"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Abby Ryder Fortson
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/David_Dastmalchian_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    David Dastmalchian
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Michael_Douglas_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Michael Douglas
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Ant-Man/Kevin_Feige.jpg"
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

                                                                                        <img src="./Ant-Man/Peyton_Reed_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Peyton Reed
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
                                                            <p>The next evolution of the Marvel Cinematic Universe brings a founding member of The Avengers to the big screen 
                                                                for the first time with Marvel Studios' "Ant-Man." Armed with the astonishing ability to shrink in scale but increase 
                                                                in strength, master thief Scott Lang must embrace his inner-hero and help his mentor, Doctor Hank Pym, protect the secret behind his spectacular Ant-Man suit from a new generation of towering threats. Against seemingly insurmountable obstacles, Pym and Lang must plan and pull off a heist that will save the world.</p>
                                                            <p></p>

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
    <script src="script-Movies-info.js"></script>
</body>

</html>
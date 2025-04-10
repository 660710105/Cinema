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
    <?php include("./nav.php")?>
    <!----------------------- nav bar --------------------------->

    <!----------------------- movie info ------------------------>
    <div class="md-head">
        <div class="md-head-container">
            <div class="md-head-left">
                <div class="md-head-logo" style="display: none;">


                </div>
                <div class="mdcm-box">
                    <div class="mdcm-thumbnail">
                        <img src="./pictures/movie/thor.jpg" class="img-fluid">
                    </div>
                    <div class="mdcm-title">
                        <div class="release-date">
                            12
                            April
                            2025
                        </div>
                        <h1>

                            Thor

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
                                    114 Mins
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
                        <div id="ytvideo" style="height:450px;position:relative">
                            <div>
                                <div id="vr-f2g54uhbj18-viralize-wide-wrapper">
                                    <video controls autoplay muted>
                                        <source src="./Thor/Thor - Trailer (OFFICIAL).mp4"
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

                                                                                        <img src="./Thor/Chris_Hemsworth_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Chris Hemsworth
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Natalie_Portman_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Natalie Portman
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Tom_Hiddleston_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Tom Hiddleston
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Stellan_Skarsgård_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Stellan Skarsgård
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Kat_Dennings_.png"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Kat Dennings
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Clark_Gregg_by_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Clark Gregg
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Colm_Feore_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Colm Feore
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Ray_Stevenson_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Ray Stevenson
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-prev"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Idris_Elba-.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Idris Elba
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Jaimie_Alexander.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Jaimie Alexander
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Rene_Russo_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Rene Russo
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/AnthonyHopkins.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Anthony Hopkins
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Thor/Kevin_Feige.jpg"
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

                                                                                        <img src="./Thor/Kenneth_Branagh_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Kenneth Branagh
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
                                                            <p>As the son of Odin, king of the Norse gods, Thor will soon inherit the throne of Asgard from his aging father.
                                                                 However, on the day that he is to be crowned, Thor reacts with brutality when the gods' enemies, the Frost Giants,
                                                                  enter the palace in violation of their treaty. As punishment, Odin banishes Thor to Earth. While Loki, Thor's brother,
                                                                   plots mischief in Asgard, Thor, now stripped of his powers, faces his greatest threat.</p>

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
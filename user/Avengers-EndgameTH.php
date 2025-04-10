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
                        <img src="./pictures/movie/endgame.jpg" class="img-fluid">
                    </div>
                    <div class="mdcm-title">
                        <div class="release-date">
                            30
                            April
                            2025
                        </div>
                        <h1>

                            Avengers: Endgame

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
                                    182 Mins
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
                                        <source src="./Avengers-Endgame/Avengers-Endgame.mp4"
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

                                                                                        <img src="./Avengers-Endgame/Robert_Downey_Jr.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Robert Downey Jr.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/ChrisEvans2023.jpg"
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

                                                                                        <img src="./Avengers-Endgame/Mark_Ruffalo_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Mark Ruffalo
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Chris_Hemsworth_.jpg"
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

                                                                                        <img src="./Avengers-Endgame/Scarlett_Johansson_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Scarlett Johansson
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Jeremy_Renner_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Jeremy Renner
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Don_Cheadle_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Don Cheadle
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Paul_Rudd.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Paul Rudd
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-prev"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Brie_Larson.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Brie Larson
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/KarenGillan.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Karen Gillan
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Danai_Gurira_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Danai Gurira
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Benedict_Wong_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Benedict Wong
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Jon_Favreau_2016.jpeg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Jon Favreau
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/BradleyCooper.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Bradley Cooper
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/GwynethPaltrow.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Gwyneth Paltrow
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Josh_Brolin_.jpg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Josh Brolin
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Kevin_Feige.jpg"
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

                                                                                        <img src="./Avengers-Endgame/Anthony_Russo.jpeg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    	Anthony Russo
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="swiper-slide swiper-slide-active"
                                                                            style="margin-right: 10px;">
                                                                            <div class="mdcc-list">
                                                                                <div class="mdcc-avatar">
                                                                                    <a href="javascript:;">

                                                                                        <img src="./Avengers-Endgame/Joe_Russo.jpeg"
                                                                                            class="bmdcc-avatar">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="mdcc-name">
                                                                                    Joe Russo
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
                                                            <p>The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks 
                                                                compels the remaining Avengers to take one final stand in Marvel Studios' grand conclusion to twenty-two films, 
                                                                Avengers: Endgame.</p>
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
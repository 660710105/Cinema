<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wajor cineplex</title>
    <link rel="icon" href="../pictures/favicon_io/favicon.ico">
    <link rel="stylesheet" href="style-CinemaTH.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!----------------------- nav bar --------------------------->
    <?php include_once("./nav-th.php") ?>
    <!----------------------- /nav bar --------------------------->
    <!----------------------- Cinemas --------------------------->
    <section class="warpbox">
        <div class="cinema-container">
            <div class="cinema-box">
                <div class="cinema-header-list">
                    <div class="cinema-header-row">
                        <a href="#" class="active">
                            <h1>แบ่งตามสถานที่</h1>
                        </a>
                    </div>
                    <div class="cinema-header-row">
                        <a href="#" class="">
                            <h1>แบ่งตามแบรนด์</h1>
                        </a>
                    </div>
                </div>
                <div class="box-cinema-panel-big" style="display: block;">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show">
                            <div class="box-cinema-list">
                                <div class="accordion">
                                    <div class="bsc-branch">
                                        <div class="bscb-header collapse-header" id="location-bkk-Z13">
                                            <h2 class="mb-0">
                                                <a href="javascript:;" class="">
                                                    กรุงเทพมหานคร
                                                    <div class="i-arrow-w up"></div>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="LBKK_Z13" class="collapse show" style>
                                            <div class="bscb-body">
                                                <div class="bcp-box">
                                                    <div class="bcp-list">
                                                        <div class="bcpl-box">
                                                            <div class="bcplb-logo">
                                                                <img src="../pictures/pngtre-removebg-preview.png"
                                                                    class="i-bcplb-logo">
                                                            </div>
                                                            <ul class="bcplb-name-list">
                                                                <li>
                                                                    <div class="bcplb-name">
                                                                        <div class="bcp-cinema-name">
                                                                            <a href="seatSelector1.php">
                                                                                เวเจอร์ซีนีเพล็กซ์
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="bcp-list">
                                                        <div class="bcpl-box">
                                                            <div class="bcplb-logo">
                                                                <img src="../pictures/major-removebg-preview.png"
                                                                    class="i-bcplb-logo">
                                                            </div>
                                                            <ul class="bcplb-name-list">
                                                                <li>
                                                                    <div class="bcplb-name">
                                                                        <div class="bcp-cinema-name">
                                                                            <a href="seatSelector2.php">
                                                                                เมเจอร์ เซ็นทรัลพระราม 3
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="bcp-list">
                                                        <div class="bcpl-box">
                                                            <div class="bcplb-logo">
                                                                <img src="../pictures/major-removebg-preview.png"
                                                                    class="i-bcplb-logo">
                                                            </div>
                                                            <ul class="bcplb-name-list">
                                                                <li>
                                                                    <div class="bcplb-name">
                                                                        <div class="bcp-cinema-name">
                                                                            <a href="seatSelector3.php">
                                                                                เมเจอร์ เซ็นทรัลบางนา
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-cinema-panel-big" style="display: none;">
                    <!-- content -->
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade active show" id="group-flagship">
                            <div class="box-cinema-list">
                                <div class="accordion" id="Cinema_Group_flagship">


                                    <div class="bsc-branch">

                                        <div class="bscb-header collapse-header" id="cinema-flagship-B3">
                                            <h2 class="mb-0">
                                                <a href="javascript:;" data-toggle="collapse"
                                                    data-target="#Cinema_flagship_B3">

                                                    เวเจอร์ซีนีเพล็กซ์

                                                    <div class="i-arrow-w up"></div>
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="Cinema_flagship_B3" class="collapse show"
                                            aria-labelledby="cinema-flagship-B3" data-parent="#Cinema_Group_flagship">
                                            <div class="bscb-body">
                                                <div class="bcp-box">





                                                    <div class="bcp-list">
                                                        <div class="bcpl-box">
                                                            <div class="bcplb-logo">
                                                                <img src="../pictures/pngtre-removebg-preview.png"
                                                                    class="i-bcplb-logo">
                                                            </div>
                                                            <ul class="bcplb-name-list">
                                                                <li>
                                                                    <div class="bcplb-name">
                                                                        <div class="bcp-cinema-name">
                                                                            <a href="#">

                                                                                เวเจอร์ซีนีเพล็กซ์

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bsc-branch">

                                        <div class="bscb-header collapse-header" id="cinema-flagship-B4">
                                            <h2 class="mb-0">
                                                <a href="javascript:;" data-toggle="collapse"
                                                    data-target="#Cinema_flagship_B4">

                                                    เมเจอร์ซีนีเพล็กซ์

                                                    <div class="i-arrow-w up"></div>
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="Cinema_flagship_B4" class="collapse show"
                                            aria-labelledby="cinema-flagship-B4" data-parent="#Cinema_Group_flagship">
                                            <div class="bscb-body">
                                                <div class="bcp-box">





                                                    <div class="bcp-list">
                                                        <div class="bcpl-box">
                                                            <div class="bcplb-logo">
                                                                <img src="../pictures/major-removebg-preview.png"
                                                                    class="i-bcplb-logo">
                                                            </div>
                                                            <ul class="bcplb-name-list">
                                                                <li>
                                                                    <div class="bcplb-name">
                                                                        <div class="bcp-cinema-name">
                                                                            <a href="#">

                                                                            เมเจอร์ เซ็นทรัลพระราม 3

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>



                                                    <div class="bcp-list">
                                                        <div class="bcpl-box">
                                                            <div class="bcplb-logo">
                                                                <img src="../pictures/major-removebg-preview.png"
                                                                    class="i-bcplb-logo">
                                                            </div>
                                                            <ul class="bcplb-name-list">
                                                                <li>
                                                                    <div class="bcplb-name">
                                                                        <div class="bcp-cinema-name">
                                                                            <a
                                                                                href="#">

                                                                                เมเจอร์ เซ็นทรัลบางนา

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end loop -->
                    </div>
                    <!-- end of by brand tab-->
                </div>
            </div>
        </div>
    </section>

    <!----------------------- /Cinemas --------------------------->
    <script src="./script-CinemasTH.js"></script>
    <script src="./script.js"></script>
</body>

</html>
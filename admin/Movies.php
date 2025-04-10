<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wajor cineplex</title>
    <link rel="icon" href="../pictures/favicon_io/favicon.ico">
    <link rel="stylesheet" href="./style-Movies.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once("./nav.php") ?>

    <div class="navrl-search">
        <div id="searchBarContainer" class="search-bar-container">
            <input type="text" placeholder="Search movies...">
            <button type="submit">Search</button>
        </div>
        <button id="searchToggleButton" class="btn-search-fn">
            <a href="javascript:;">
                <img src="./pictures/icon-search.svg" class="icon-nav" id="searchIcon">
            </a>
        </button>
        
    </div>

    <section class="movie">
        <div class="movie-head">
            <button class="movie-category now">Now Showing</button>
            <button class="movie-category soon">Coming Soon</button>
        </div>
        <?php include("./movie-container.php")?>
        <div class="movie-container coming">
            <div class="movie-card">
                <div class="movie-image">
                    <a class="play-tag" href="./Avengers-Endgame.php"><i class="fa-solid fa-circle-play"></i></a>
                    <h6 class="name">Avengers: Endgame</h6>
                    <img src="../pictures/movie/endgame.jpg" alt="endgame" class="movie-thumb">
                    <a class="card-btn" href="./Avengers-Endgame.php">MORE INFO</a>
                </div>
                <div class="movie-info">
                    <h4 class="show-date">30 APR 2025</h4>
                    <h2 class="movie-name">Avengers: Endgame</h2>
                </div>
            </div>
        </div>
    </section>
    <script src="./script-Movies.js"></script>
</body>

</html>
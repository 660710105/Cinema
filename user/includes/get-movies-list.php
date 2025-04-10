<?php
require_once './connector.php';

$sql = "SELECT m.movie_id, m.movie_name, m.poster, m.details_url, s.date AS show_date 
        FROM movies m 
        INNER JOIN showtimes s ON m.movie_id = s.movie_id";
$result = $conn->query($sql);

// Remove the json_encode of the result object
// echo json_encode($result);

if ($result && $result->num_rows > 0) {
    echo '<div class="movie-container show">';
    while ($row = $result->fetch_assoc()) {
        $movieId = $row['movie_id'];
        $movieName = $row['movie_name'];
        $poster = $row['poster'];
        $detailsUrl = $row['details_url'];
        $showDate = date("d M Y", strtotime($row['show_date']));

        $playUrl = "./" . basename($detailsUrl);

        echo '
        <div class="movie-card">
            <div class="movie-image">
                <a class="play-tag" href="' . htmlspecialchars($playUrl) . '"><i class="fa-solid fa-circle-play"></i></a>
                <h6 class="name">' . htmlspecialchars($movieName) . '</h6>
                <img src="../pictures/movie/' . htmlspecialchars($poster) . '" alt="' . htmlspecialchars($movieName) . '" class="movie-thumb">
                <a class="card-btn" href="' . htmlspecialchars($detailsUrl) . '">MORE INFO</a>
            </div>
            <div class="movie-info">
                <h4 class="show-date">' . htmlspecialchars($showDate) . '</h4>
                <h2 class="movie-name">' . htmlspecialchars($movieName) . '</h2>
            </div>
        </div>';
    }
    echo '</div>';
} else {
    echo "No movies found.";
}

// Close the database connection
$conn->close();
?>
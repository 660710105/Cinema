<?php

include("./connector.php");

// SQL query to fetch movie data
$sql = "SELECT movie_id, movie_name, poster, show_date, details_url FROM movies ORDER BY show_date ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="movie-container show">';
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="movie-card">';
        echo '    <div class="movie-image">';
        echo '        <a class="play-tag" href="' . htmlspecialchars($row["details_url"]) . '"><i class="fa-solid fa-circle-play"></i></a>';
        echo '        <h6 class="name">' . htmlspecialchars($row["title"]) . '</h6>';
        echo '        <img src="' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["title"]) . '" class="movie-thumb">';
        echo '        <a class="card-btn" href="' . htmlspecialchars($row["details_url"]) . '">MORE INFO</a>';
        echo '    </div>';
        echo '    <div class="movie-info">';
        echo '        <h4 class="show-date">' . htmlspecialchars(date("d M Y", strtotime($row["show_date"]))) . '</h4>';
        echo '        <h2 class="movie-name">' . htmlspecialchars($row["title"]) . '</h2>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No movies found.";
}

$conn->close();
?>
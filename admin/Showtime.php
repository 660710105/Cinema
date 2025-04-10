<?php include("./includes/showtime-manage.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Showtimes</title>
    <link rel="stylesheet" href="./css/showtime.css">
</head>

<body>
<?php include("./nav.php")?>
    <div id="contain">
        <h1>Manage Showtimes</h1>

        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($success_message)): ?>
            <div class="success-message">
                <p><?php echo htmlspecialchars($success_message); ?></p>
            </div>
        <?php endif; ?>

        <div class="filter-options">
            <form method="get">
                <label for="filter_by">Filter By:</label>
                <select name="filter_by" id="filter_by">
                    <option value="">Show All</option>
                    <option value="cinema_name" <?php if ($filter_by === 'cinema_name') echo 'selected'; ?>>Cinema Name</option>
                    <option value="movie_name" <?php if ($filter_by === 'movie_name') echo 'selected'; ?>>Movie Name</option>
                    <option value="showtime_id" <?php if ($filter_by === 'showtime_id') echo 'selected'; ?>>Showtime ID</option>
                </select>

                <label for="filter_value">Select Value:</label>
                <select name="filter_value" id="filter_value">
                    <option value="">All</option>
                    <?php if ($filter_by === 'cinema_name'): ?>
                        <?php foreach ($cinemas as $cinema_name): ?>
                            <option value="<?php echo htmlspecialchars($cinema_name); ?>" <?php if ($filter_value === $cinema_name) echo 'selected'; ?>><?php echo htmlspecialchars($cinema_name); ?></option>
                        <?php endforeach; ?>
                    <?php elseif ($filter_by === 'movie_name'): ?>
                        <?php foreach ($movies as $movie_name): ?>
                            <option value="<?php echo htmlspecialchars($movie_name); ?>" <?php if ($filter_value === $movie_name) echo 'selected'; ?>><?php echo htmlspecialchars($movie_name); ?></option>
                        <?php endforeach; ?>
                    <?php elseif ($filter_by === 'showtime_id'): ?>
                        <?php
                        $showtime_ids_result = $conn->query("SELECT DISTINCT showtime_id FROM showtimes ORDER BY showtime_id ASC");
                        if ($showtime_ids_result->num_rows > 0) {
                            while ($row = $showtime_ids_result->fetch_assoc()) {
                                echo '<option value="' . htmlspecialchars($row["showtime_id"]) . '" ' . ($filter_value === strval($row["showtime_id"]) ? 'selected' : '') . '>' . htmlspecialchars($row["showtime_id"]) . '</option>';
                            }
                        }
                        ?>
                    <?php endif; ?>
                </select>

                <button type="submit" id="applyFilters">Filter</button>
                <?php if (!empty($filter_by) || !empty($filter_value)): ?>
                    <a href="?" style="color: #00bcd4; text-decoration: none; margin-left: 10px;">Show All</a>
                <?php endif; ?>
            </form>
        </div>


        <?php include("./includes/showtime-add.php") ?>


        <?php include("./includes/showtime-list.php") ?>

    </div>
</body>

</html>
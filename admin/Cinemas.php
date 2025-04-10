<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wajor Cineplex - Booked Seats</title>
    <link rel="icon" href="../pictures/favicon_io/favicon.ico">
    <?php include("./nav.php") ?>
    <link rel="stylesheet" href="style-Cinema.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="contain">
        <h1>Booked Seats</h1>
        <div id="searchElements">
            <input type="text" id="searchInput" name="searchInput" placeholder="Search by Name or SeatID">
            <button id="searchBooksButton">Search</button>
        </div>

        <div class="filter-options">
            <label for="sortBy">Order By:</label>
            <select id="sortBy">
                <option value="SeatID">Seat ID</option>
                <option value="Name">Name</option>
                <option value="BookingTime">Time</option>
            </select>

            <label for="cinema">Cinema:</label>
            <select id="cinema">
                <option value="all">All Cinemas</option>
                <option value="1">Cinema 1</option>
                <option value="2">Cinema 2</option>
            </select>
            <button id="applyFilters">Apply Filters</button>
        </div>

        <div class="list">
            <table id="bookedTable">
                </table>
        </div>
    </div>
    <script src="./script-ShowBooked.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style-LoginInfo.css">
    <link rel="stylesheet" href="./style-SeatSelector.css">
</head>

<body>
    <!----------------------- nav bar --------------------------->
    <?php include("nav.php") ?>
    <!----------------------- /nav bar --------------------------->
    <h1>Movie Ticket Booking</h1>
    <div id="bookContainer">
        <div id="bookBoard">
        </div>
        <button id="book">Book Selected Seats</button>
    </div>
    <script src="./seatSelector.js" defer></script>
</body>

</html>
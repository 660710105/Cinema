<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wajor cineplex</title>
    <link rel="icon" href="/favicon_io/favicon.ico">
    <link rel="stylesheet" href="style-Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!----------------------- nav bar --------------------------->
    <?php include_once("./nav.php") ?>
    <!----------------------- nav bar --------------------------->

    <!----------------------- movie slider ---------------------->
    <section class="movie">
        <h2 class="movie-category">Recommend</h2>
        <button class="pre-btn"><i class="fa-regular fa-circle-right"></i></button>
        <button class="nxt-btn"><i class="fa-regular fa-circle-right"></i></button>
        <?php include("./movie-container.php")?>
    </section>
    <!----------------------- movie slider ---------------------->
    <script src="./script.js"></script>
</body>
</html>
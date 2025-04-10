<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wajor cineplex</title>
    <link rel="icon" href="../pictures/favicon_io/favicon.ico">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style-LoginInfo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .movie-category {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <!----------------------- nav bar --------------------------->
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img id="one" src="./pictures/pngtre-removebg-preview.png" alt="Logo"></a>
        </div>
        <div class="menu">
            <div class="menu-links-left">
                <a class="pls-login" href="#">Home</a>
                <a class="pls-login" href="#">Movies</a>
                <a class="pls-login" href="#">Cinemas</a>
            </div>
            <div class="user-info">
                <span id="user-firstname"></span>
                <span id="user-lastname"></span>
            </div>
            <div class="margin">
                <a href="#"><img id="two" src="./pictures/prooo-removebg-preview.png" alt="Profile"></a>
            </div>

            <div class="menu-links-right">
                <div class="lang-menu">
                    <div class="selected-lang">
                        <button class="change-lang">EN</button>
                    </div>
                    <ul>
                        <li>
                            <a id="icon-th" href="#">TH</a>
                        </li>
                        <li>
                            <a id="icon-en" href="#">EN</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="btn-logout">Logout</button>
            <button class="btn-login">Log In</button>
        </div>
    </nav>
    <!----------------------- /nav bar --------------------------->

    <!----------------------- login ----------------------------->
    <div class="wrapper">
        <span class="icon-close">
            <i class="fa-solid fa-xmark"></i>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="text" required name="firstname">
                    <label>Firstname</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="text" required name="lastname">
                    <label>Lastname</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required>I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <!----------------------- /login ----------------------------->

    <!----------------------- movie slider ---------------------->
    <section class="movie">
        <h2 class="movie-category">Recommend</h2>
        <button class="pre-btn"><i class="fa-regular fa-circle-right"></i></button>
        <button class="nxt-btn"><i class="fa-regular fa-circle-right"></i></button>
        <div class="movie-container show">
            <div class="movie-card">
                <div class="movie-image">
                    <a class="play-tag" href="#"><i class="fa-solid fa-circle-play"></i></a>
                    <h6 class="name">captain america the first avenger</h6>
                    <img src="../pictures/movie/captain.jpg" alt="captain america" class="movie-thumb">
                    <a class="card-btn" href="#">MORE INFO</a>
                </div>
                <div class="movie-info">
                    <h4 class="show-date">10 APR 2025</h4>
                    <h2 class="movie-name">captain america the first avenger</h2>
                </div>
            </div>
            <div class="movie-card">
                <div class="movie-image">
                    <a class="play-tag" href="#"><i class="fa-solid fa-circle-play"></i></a>
                    <h6 class="name">iron man</h6>
                    <img src="../pictures/movie/ironman.webp" alt="iron man" class="movie-thumb">
                    <a class="card-btn" href="#">MORE INFO</a>
                </div>
                <div class="movie-info">
                    <h4 class="show-date">11 APR 2025</h4>
                    <h2 class="movie-name">iron man</h2>
                </div>
            </div>
            <div class="movie-card">
                <div class="movie-image">
                    <a class="play-tag" href="#"><i class="fa-solid fa-circle-play"></i></a>
                    <h6 class="name">Thor</h6>
                    <img src="../pictures/movie/thor.jpg" alt="thor" class="movie-thumb">
                    <a class="card-btn" href="#">MORE INFO</a>
                </div>
                <div class="movie-info">
                    <h4 class="show-date">12 APR 2025</h4>
                    <h2 class="movie-name">Thor</h2>
                </div>
            </div>
            <div class="movie-card">
                <div class="movie-image">
                    <a class="play-tag" href="#"><i class="fa-solid fa-circle-play"></i></a>
                    <h6 class="name">the incredible hulk</h6>
                    <img src="../pictures/movie/hulk.jpg" alt="hulk" class="movie-thumb">
                    <a class="card-btn" href="#">MORE INFO</a>
                </div>
                <div class="movie-info">
                    <h4 class="show-date">13 APR 2025</h4>
                    <h2 class="movie-name">the incredible hulk</h2>
                </div>
            </div>
            <div class="movie-card">
                <div class="movie-image">
                    <a class="play-tag" href="#"><i class="fa-solid fa-circle-play"></i></a>
                    <h6 class="name">Ant-Man</h6>
                    <img src="../pictures/movie/antman.jpg" alt="antman" class="movie-thumb">
                    <a class="card-btn" href="#">MORE INFO</a>
                </div>
                <div class="movie-info">
                    <h4 class="show-date">14 APR 2025</h4>
                    <h2 class="movie-name">Ant-Man</h2>
                </div>
            </div>
        </div>
    </section>
    <!----------------------- /movie slider ---------------------->
    <script src="script.js"></script>
    <script src="script-Nav-Login.js"></script>
</body>

</html>
<?php
session_start();

// Function to get the user's first name from the session (if logged in)
function getFirstName()
{
    return isset($_SESSION['firstname']) ? htmlspecialchars($_SESSION['firstname']) : '';
}

// Function to get the user's last name from the session (if logged in)
function getLastName()
{
    return isset($_SESSION['lastname']) ? htmlspecialchars($_SESSION['lastname']) : '';
}

// Function to check if the user is logged in (you might have a more sophisticated check)
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// Function to generate the language menu
function generateLanguageMenu()
{
    return '<div class="lang-menu">
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
            </div>';
}
?>

<nav class="navbar">
    <div class="logo">
        <a href="./Home.php"><img id="one" src="../pictures/pngtre-removebg-preview.png" alt="Logo"></a>
    </div>
    <div class="menu">
        <div class="menu-links-left">
            <a href="./Home.php">Home</a>
            <a href="./Showtime.php">Showtimes</a>
            <a href="./Cinemas.php">Cinemas</a>
        </div>
        <?php if (isLoggedIn()): ?>
            <div class="user-info">
                <span id="user-firstname"><?php echo getFirstName(); ?></span>
                <span id="user-lastname"><?php echo getLastName(); ?></span>
            </div>
            <div class="margin">
                <a href="/profile"><img id="two" src="../pictures/prooo-removebg-preview.png" alt="Profile"></a>
            </div>
            <div class="menu-links-right">
                <?php echo generateLanguageMenu(); ?>
            </div>
            <form action="./includes/logout.php" method="post">
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        <?php else: ?>
            <div class="menu-links-right">
                <?php echo generateLanguageMenu(); ?>
            </div>
            <a href="./includes/login.php" class="btn-login">Log In</a>
        <?php endif; ?>
    </div>
</nav>

<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./style-LoginInfo.css">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const langMenu = document.querySelector('.lang-menu');
        const selectedLang = document.querySelector('.selected-lang');
        const langOptions = document.querySelector('.lang-menu ul');
        const changeLangButton = document.querySelector('.change-lang');
        const langLinks = document.querySelectorAll('.lang-menu ul a');

        if (langMenu) {
            selectedLang.addEventListener('click', () => {
                langOptions.classList.toggle('open');
            });

            langLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const selected = link.textContent;
                    changeLangButton.textContent = selected;
                    langOptions.classList.remove('open');
                    console.log(`Language selected: ${selected}`);
                });
            });
        }
    });
</script>
<?php
if (isset($_COOKIE['user_name'])) {
    $_SESSION['user_name'] = $_COOKIE['user_name'];
} else {
    $_SESSION['user_name'] = 'Guest';
}
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="nav.css">
    </head>
    <body>

        <header>
            <nav>
                <ul class="nav-links">
                    <li>
                        <a href="index.php">
                            <img src="image/hospital_logo.png" alt="Hospital Logo" width="10%"/>
                        </a>
                    </li>
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#" class="text-dropdown">Departments</a>
                        <div class="dropdown">
                            <a href="cardiology.php">Cardiology</a>
                            <a href="neurology.php">Neurology</a>
                            <a href="orthopedics.php">Orthopedics</a>
                        </div>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li>
                        <div class="text-dropdown">
                            <img src="image/profile_icon.png" width="10%" alt="Profile Icon">
                            <div class="username">
                                <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <?php if ($_SESSION['user_name'] === 'Guest'): ?>
                                <a href="login.html">Sign In</a>
                            <?php else: ?>
                                <a href="profile.html">Profile</a>
                                <a href="logout.php">Sign Out</a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <form>
                <div>
                    <iframe src="cardiology.html" width="100%" height="500px"></iframe>
                </div>
                <div>
                    <iframe src="neurology.html" width="100%" height="500px"></iframe>
                </div>
                <div>
                    <iframe src="orthopedics.html" width="100%" height="500px"></iframe>
                </div>
            </form>
        </main>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
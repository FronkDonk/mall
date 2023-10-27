<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <title>Sessioner</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>Webbserverprogrammering 1</h1>
        </header>

        <section id="leftColumn">
            <nav>
                <!-- Redigera länkar -->
                <ul>
                    <li><a href="">Hem</a></li>
                    <li><a href="">Kontakt</a></li>
                    <li><a href="">Blogg</a></li>
                    <?php
                    session_start();
                    if (isset($_SESSION["loggedIn"])) {
                        echo '<li><a href="pages/logout.php">Logga ut</a></li>';
                    } else {
                        echo '<li><a href="pages/login.php">Logga in</a></li>';
                    }
                    ?>
                </ul>
            </nav>
            <aside>
                <h1>Beskrivning</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla tristique elementum nisl, et vehicula neque laoreet ut.
                    Praesent sed ultrices purus.
                </p>
            </aside>
        </section>

        <section id="main">
            <h1>Logga in</h1>

            <form method="post">
                <label>Username</label> <br />
                <input type="text" name="userName" placeholder="username" required> <br />
                <label>Password</label> <br />
                <input type="password" name="password" placeholder="password" required> <br />
            </form>

        </section>

        <footer>
            <a href="mailto:mail@doman.se">mail@doman.se</a>
        </footer>
    </div>
</body>

</html>

<?php

session_start();
if (isset($_POST["userName"], $_POST["password"])) {
    $username = $_POST["userName"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "root") {
        $_SESSION["loggedIn"] = true;

        header("Location: ../index.php");
    } else {
        echo ("felaktiga uppgifter");
    }
}
?>
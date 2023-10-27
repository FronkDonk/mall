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
            <h1>Kontakt</h1>
            <form method="post">
                <label>Namn</label> <br />
                <input type="text" name="name" placeholder="name" required> <br />
                <label>Email</label> <br />
                <input type="email" name="email" placeholder="email" required> <br />
                <label>Message</label> <br />
                <textarea name="text" required>

                </textarea>
            </form>
            <?php

            if (isset(["name"], $_POST["email"], $_POST["password"])) {
                echo ("Tack för ditt mail");
            }

            ?>
        </section>

        <footer>
            <a href="mailto:mail@doman.se">mail@doman.se</a>
        </footer>
    </div>
</body>

</html>
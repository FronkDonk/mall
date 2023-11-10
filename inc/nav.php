<nav>
    <!-- Redigera länkar -->
    <ul>
        <li><a href="index.php">Hem</a></li>
        <li><a href="index.php?page=contact">Kontakt</a></li>
        <li><a href="index.php?page=blog">Blogg</a></li>

        <?php
        session_start();
        if (isset($_SESSION["loggedIn"])) {
            echo '<li><a href="index.php?page=logout">Logga ut</a></li>';
        } else {
            echo '<li><a href="index.php?page=login">Logga in</a></li>';
        }
        ?>
    </ul>
</nav>
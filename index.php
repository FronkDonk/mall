<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <title>Sessioner</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <?php include("./inc/header.php") ?>
        <section id="leftColumn">
            <?php include("./inc/nav.php") ?>

            <?php include("./inc/aside.php") ?>
        </section>

        <section id="main">
            <?php
            if (isset($_GET["page"])) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                switch ($_GET["page"]) {
                    case "contact":
                        include("pages/contact.php");
                        break;

                    case "blog":
                        include("pages/blog.php");
                        break;
                    case "logout":
                        include("pages/logout.php");
                        break;
                    case "login":
                        include("pages/login.php");
                        break;
                }
            }

            ?>
        </section>

        <?php include("./inc/footer.php") ?>
    </div>
</body>

</html>
<h1>Logga in</h1>

<form method="post">
    <label>Username</label> <br />
    <input type="text" name="userName" placeholder="username" required> <br />
    <label>Password</label> <br />
    <input type="password" name="password" placeholder="password" required> <br />
    <button type="submit">Logga in</button>
</form>


<?php

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
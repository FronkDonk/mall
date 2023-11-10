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

if (isset($_POST["name"], $_POST["email"], $_POST["password"])) {
    echo ("Tack för ditt mail");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        ...............................
        <?php
            echo htmlspecialchars("Welcome".$_GET["Username"]."<br>using password: ".$_GET["Password"], ENT_QUOTES, "UTF-8");
        ?>
    </body>
</html>

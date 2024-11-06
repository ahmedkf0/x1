<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        echo $_POST["username1"];
        echo "<br>";
        echo $_POST["lang"];
        echo "<br>";
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>php pag</title>
    </head>
    <body>
        <div>
            <form action="" method="POST" >
                <input type="text" name="username1">
                <select name="lang">
                    <option value="ar">العربيه</option>
                    <option value="en">الانجليزيه</option>
                    <option value="es">الاسبانيه</option>
                </select>
                <input type="submit" name="send">
            </form>
        </div>

    </body>
</html>
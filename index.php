
<?php

include ('configs/config.php');

include ('models/models.php');

include ('controllers/controller.php');


include ('views/view.php');


 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pendu</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Il te reste x essais pour sauver ta peau</legend>
                <div>
                    <label for="triedLetter">Choisis ta lettre</label>
                    <select name="triedLetter" id="triedLetter">
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select>
                </div>
            </fieldset>
        </form>
    </body>
</html>

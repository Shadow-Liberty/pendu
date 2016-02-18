<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Le pendu</title>
</head>
<body>
<form action="index.php" method="post">
    <fieldset>
        <legend>Il te reste x essais pour sauver ta peau</legend>
        <div>
            <label for="triedLetter">Choisis ta lettre</label>
            <select name="triedLetter" id="triedLetter">
                <?php foreach($lettersArray as $letter => $status): ?>
                    <?php if($status) : ?>
                        <option value="<?php
                        echo $letter; ?>"><?php echo $letter; ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select>
            <input type="hidden" name="serializedLetters" value="<?php echo $serializedLetters; ?>">
            <input type="submit" value="Essayer cetter lettre">
        </div>
    </fieldset>
</form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Le pendu</title>
</head>
<body>
    <div>
        <h1>Trouve le mot en de X coups ! <?php echo MAX_TRIALS; ?></h1>
    </div>
    <div>
        <p>Le mot à deviner compte <?php echo $letterCount; ?> lettres&nbsp;: <?php echo $replacementString ?></p>
    </div>
    <div>
        <img src="images/pendu0<?php echo $trials ?>.gif" alt="">
    </div>
    <div>
        <p>Voici les lettres que tu as déjà essayées : <?php echo $triedLetters ?></p>
    </div>
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
            <input type="hidden" name="triedLetters" vaxlue="<?php echo $triedLetters; ?>">
            <input type="submit" value="Essayer cette lettre">
        </div>
    </fieldset>
</form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Le pendu</title>
</head>
<body>
    <div>
        <h1>Trouve le mot en moins de <?php echo MAX_TRIALS; ?>  coups ! </h1>
    </div>
    <div>
        <p>Le mot à deviner compte <?php echo $lettersCount; ?> lettres&nbsp;: <?php echo $replacementString ?></p>
    </div>
    <div>
        <img src="images/pendu0<?php echo $trials ?>.gif" alt="">
    </div>
    <div>
        <p>Voici les lettres que tu as déjà essayées : <?php echo $triedLetters ?></p>
    <?php if($wordFound): ?>
        <div>
            <p>Bravo ! Tu as trouvé le mot auquel je pense, c'est bien.</p>
        </div>
    <?php elseif($remainingTrials == 0): ?>
        <div>
            <p>Oooooops ! Tu as perdu, m'enfin ! Le mot à trouver était <?php echo $word?></p>
        </div>
    </div>
    <?php else: ?>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Il te reste <?php echo  $remainingTrials; ?> essais pour sauver ta peau</legend>
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
                <input type="hidden" name="triedLetters" value="<?php echo $triedLetters; ?>">
                <input type="hidden" name="wordIndex" value="<?php echo $wordIndex; ?>">
                <input type="hidden" name="replacementString" value="<?php echo $replacementString; ?>">
                <input type="hidden" name="lettersCount" value="<?php echo $lettersCount; ?>">
                <input type="hidden" name="trials" value="<?php echo $trials; ?>">
                <input type="submit" value="Essayer cette lettre">
            </div>
        </fieldset>
    </form>
    <?php endif; ?>
</body>
</html>
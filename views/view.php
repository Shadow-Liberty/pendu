<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Le pendu</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <input type="checkbox" name="play" id="playbtn" class="play ripple">
    <label for="playbtn" class="playlabel"></label>
    <div class="mainTitle">
        <h1>Un jeu du pendu<span>Trouve le mot en moins de <?php echo MAX_TRIALS; ?>  coups ! </span></h1>
    </div>
    <div class="letterC">
        <p>Mot en <?php echo $lettersCount; ?> lettres&nbsp; <span><?php echo $replacementString ?></span></p>
    </div>
    <div class="hangmanPicture">
        <img src="images/pendu0<?php echo $trials ?>.gif" alt="">
    </div>
    <div>
        <p class="previouslyTried">Voici les lettres que tu as déjà essayées : <span><?php echo $triedLetters ?></span></p>
    <?php if($wordFound): ?>
        <div class="won">
            <p>Bravo ! Tu as trouvé le mot auquel je pense, c'est bien.</p>
        </div>
    <?php elseif($remainingTrials == 0): ?>
        <div class="lost">
            <p>Oooooops ! Tu as perdu, m'enfin ! Le mot à trouver était <?php echo $word?></p>
        </div>
    </div>
    <?php else: ?>
    <form action="index.php" method="post" class="letterForm">
        <fieldset class="chooseLetter">
            <legend>Il te reste <span><?php echo  $remainingTrials; ?></span> essais pour sauver ta peau</legend>
            <div class="field">
                <label for="triedLetter" class="selection">Choisis ta lettre</label>
                <select name="triedLetter" id="triedLetter" class="sel">
                    <option value="" disabled selected>Choisis une lettre</option>
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
                <input type="submit" value="Essayer cette lettre" class="submit">
            </div>
        </fieldset>
    </form>
    <?php endif; ?>
</body>
<script src="js/jquery-2.1.4.min.js" charset="utf-8"></script>
<script src="js/secrets.js" charset="utf-8"></script>
</html>

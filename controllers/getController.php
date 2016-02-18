<?php
    $lettersArray = getLettersArray();

    $serializedLetters = serializedLetters($lettersArray);

    $wordIndex = getWordIndex($wordsArray);

    $word = getWord($wordsArray, $wordIndex);

    $word = $wordsArray[$wordIndex];

    $lettersCount = strlen($word);

    $replacementString = getReplacementString($lettersCount);
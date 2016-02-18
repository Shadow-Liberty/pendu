<?php
    $lettersArray = getLettersArray();

    $serializedLetters = serializedLetters($lettersArray);

    $wordIndex = getWordIndex($wordsArray);

    $word = $wordsArray[$wordIndex];


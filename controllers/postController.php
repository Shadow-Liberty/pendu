<?php
    $serializedLetters = $_POST['serializedLetters'];

    $triedLetter = $_POST['triedLetter'];

    $triedLetters = $_POST['triedLetters'];

    $wordIndex = $_POST['wordIndex'];

    $lettersArray = unserializedLetters($serializedLetters);

    $lettersArray[$triedLetter] = false;

    $serializedLetters = serializedLetters($lettersArray);

    $triedLetters .= $triedLetter;


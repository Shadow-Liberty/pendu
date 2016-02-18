<?php
    $serializedLetters = $_POST['serializedLetters'];

    $triedLetter = $_POST['triedLetter'];

    $lettersArray = unserializedLetters($serializedLetters);

    $lettersArray[$triedLetter] =false;

    $serializedLetters = serializedLetters($lettersArray);


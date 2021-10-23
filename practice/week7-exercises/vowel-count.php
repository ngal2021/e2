<?php

function vowelCount($word)
{

    $countVowels = 0;
    foreach (str_split($word) as $letters) {
        if (in_array($letters, ['a','e','i','o','u'])) {
            $countVowels++;
        }
    }

    return $countVowels;
}

var_dump(vowelCount('apple'));
var_dump(vowelCount('banana'));

    // if(in_array($word, ['a', 'e', 'i', 'o', 'u']));
    // $letterCount = count($letters);
    // for($count = 0; $count < $letterCount; $i++){
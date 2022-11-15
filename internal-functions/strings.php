<?php

$sentence = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatem assumenda eius laboriosam, mollitia quam neque ullam doloremque!";

$sentenceLenght = strlen($sentence);

echo $sentenceLenght;

echo "<br>";

echo "<br>";

$numberOfWords = str_word_count($sentence);

echo $numberOfWords;
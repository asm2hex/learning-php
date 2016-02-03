<?php

$sentence = "This sentence makes no sense.";
$charLength = strlen($sentence);
$wordLength = str_word_count($sentence);

echo "There're $charLength characters in the sentence. <br>";
echo "There're $wordLength words in the sentence.";
<?php

    function abcd($text){
        $text = strtolower($text);
        $text = str_replace('brown','red', $text);
        print($text);
    }
    $text = "The quick brown fox jumps over the lazy dog.";
    abcd($text);

?>
<?php

    class Anagram
    {

        function makeAnagram($main_word, $check_words)
        {
            $output = '';
            if ($main_word === $check_words) {
                $output = $check_words;
            }
            return $output;
        }
    }




?>

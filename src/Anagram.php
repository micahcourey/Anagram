<?php

    class Anagram
    {

        function makeAnagram($main_word, $check_words)
        {
            $arr1 = str_split($main_word);
            $arr2 = str_split($check_words);
            sort($arr1);
            sort($arr2);
            $output = '';
            if ($main_word === $check_words) {
                $output = $check_words;
            }
            return $output;
        }
    }




?>

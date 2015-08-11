<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_oneWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "word";

            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals("word", $result);
        }
    }
?>

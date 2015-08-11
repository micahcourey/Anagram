<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_specOne()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "A";
            $input2 = "A";
            var_dump($input2);


            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);

            //Assert
            $this->assertEquals("A", $result);
        }

        function test_makeAnagram_otherThing()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "on";
            $input2 = "no";
            var_dump($input2);

            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);

            //Assert
            $this->assertEquals("no", $result);
        }

    }
?>

<?php

// String (string)

// single quote
$stringType = 'Hello I am a string inside single quote';

// double quote
$stringType = "Hello I am a string inside double qoute";
echo gettype($stringType); // string
echo "\n";

// Heredoc
$stringType = <<<myString
    Hello I am a string inside heredoc  
    Multiline string
myString;


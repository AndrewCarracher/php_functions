<?php

//removes all special characters
function removeSpecifiedChars( input )
  {
    return preg_replace("/[^ \w]+/", "", input);
  }

//removes white space
function removeWhiteSpace( input )
  {
    return preg_replace('/\s\s+/', ' ', input);
  }

//leaves only numbers
function leaveOnlyNumbers( input )
  {
    return preg_replace('/[^0-9]+/', '', input);
  }

//leaves only letters
function leaveOnlyLetters( input )
  {
    return preg_replace("/[^a-zA-Z]+/", "", input);
  }

//leaves only upper case letters
function leaveOnlyUpperCase( input )
  {
    return preg_replace("/[^A-Z]+/", "", input);
  }

//leaves only lower case letters
function leaveOnlyLowerCase( input )
  {
    return preg_replace("/[^a-z]+/", "", input);
  }

//leaves only letters and numbers
function leaveOnlyLettersAndNumbers( input )
  {
    return preg_replace("/[^a-zA-Z0-9]+/", "", input);
  }

 ?>

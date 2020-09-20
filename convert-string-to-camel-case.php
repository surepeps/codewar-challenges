<?php 
//INSTRUCTION:
//Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).

//Examples
//toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"

//toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"


//SOLUTION..
function toCamelCase($str){
  //STEP 1: put the symbols or signs you would like to remove from the string in an array if more than one
    $i = array("-","_");
  //STEP 2: Add Preg Replace function for string replacement visit "https://www.php.net/manual/en/function.preg-replace.php" for more info about preg_replace
    $str = preg_replace('/([a-z])([A-Z])/', "\\1 \\2", $str);
    $str = preg_replace('@[^a-zA-Z0-9\-_ ]+@', '', $str);
  //STEP 3: Add Str Replace function to replace the symbols stated in step 1 above with an empty space to make a sentence.
    $str = str_replace($i, ' ', $str);
  //STEP 4: Make a conditional statement to check if the first letter of the string passed is an uppercase letter or not, if yes, then firstly convert all other first letters of each words to uppercase since its a sentence (CONFIRM THE SENTENCE IN STEP 3).
    if($str[0] === ucfirst($str[0])) {
    //STEP 5: Remove the space that makes it form a sentence, then return the string.
      $str = str_replace(' ', '', ucwords($str));
     return $str;
    }else{
      //STEP 6: if the first letter if not in uppercase then also remove the space, then firstly convert all other first letters of each words to uppercase since its a sentence and return the first letter as lowecase. 
      $str = str_replace(' ', '', ucwords($str));
      return lcfirst($str);
    }
}

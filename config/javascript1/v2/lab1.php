<?php

/**
 * Generate random values to use in lab.
 */
include LAB_INSTALL_DIR . "/config/random.php";

$numberTwo      = rand_int(20, 999);// 100-999
$floatOne       = rand_float(100, 999, 2); // 100.00 - 999.99
$floatTwo       = rand_float(100, 999, 2); //5.22; // 100-999
$sect2Int       = rand_int(20, 999);// 100-999
$sect2WordSerie1     = ['bulldog', 'rabbit', 'chicken', 'mouse', 'horse', 'camel', 'crocodile', 'werewolf', 'reindeer', 'elephant'];
$sect2SmallRand = rand_int(0, count($sect2WordSerie1)-1); //3; // 0-9
$sect2IntText    = $sect2Int . ".$numberTwo " . $sect2WordSerie1[$sect2SmallRand];

$serie1 = [
    rand_int(100, 999),
    rand_int(100, 999),
    rand_int(100, 999),
    rand_int(100, 999)
];  // 100-999
$serie1_imp     = implode(",", $serie1);

$sect4SmallRand    = rand_int(0, 9); //3; // 0-9
$sect4WordSerie     = ['bulldog', 'rabbit', 'chicken', 'mouse', 'horse', 'camel', 'crocodile', 'werewolf', 'reindeer', 'elephant'];
$sect4Word     = $sect4WordSerie[$sect4SmallRand];
$sect4BigInt    = rand_int(200, 999);

$sect5SentenceSerie = ['I am in a glass case of emotion.', 'If peeing your pants is cool, consider me Miles Davis.', 'Do you want to hear the most annoying sound in the world?', 'Thank you very little.', 'Tigers love pepper, they hate cinnamon.', 'I wake up in the morning and I piss excellence.', 'I think most Scottish cuisine is based on a dare.', 'I do not know, I mostly just hurt people.', 'I aim to misbehave.', 'I wish monkeys could Skype.'];
$sect5SmallRand    = rand_int(0, 9); //3; // 0-9
$sect5WordSerie     = ['bulldog', 'rabbit', 'chicken', 'mouse', 'horse', 'camel', 'crocodile', 'werewolf', 'reindeer', 'elephant'];
$sect5Word     = $sect5WordSerie[$sect5SmallRand];
$sect5SmallInt =  rand_int(0, 4);
$sect5Sentence = $sect5SentenceSerie[$sect5SmallRand];


// SECTION 3 Extra

$aYear          = rand_int(1970, 2014);//2014
$aMonth         = 'Aug';
$aDay           = rand_int(1, 29);
$aDate          = "$aMonth $aDay, $aYear";



return [

"passPercentage" => 10/16,
"passDistinctPercentage" => 16/16,

"author" => ["lew", "aar"],

/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - javascript1",

"intro" => <<<EOD
If you need to peek at examples or just want to know more, take a look at the references at [MDNs (Mozilla Developers Network)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference.)

There you will find everything this lab will go through and much more.
EOD
,


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Variables and built-in functions",

"intro" => <<<EOD
The foundation of variables, numbers, strings and basic arithmetic. In questions 1.1 you are going to work with floats. One way to round a float to a certain amount of decimals is:

```javascript
Math.round(val*10000)/10000
```
Where `val` is your float number.
EOD
,

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question, 1.1.
 */
[

"text" => <<<EOD
Create two variables, 'floatOne' and 'floatTwo'. Give them the values: $floatOne and $floatTwo. Use your 'result'-variable and assign to it the sum of the float numbers.  

Answer with the result.
EOD
,

"points" => 1,


"answer" => function () use ($floatOne, $floatTwo) {

    $sum = $floatOne + $floatTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 1.2.
 */
[

"text" => <<<EOD
Create a variable 'someIntText' and give it a value of '$sect2IntText'. Use the function 'parseInt' to find out the integer representation of the text.  

Answer with your 'result'-variable.
EOD
,

"points" => 1,

"answer" => function () use ($sect2IntText) {

    return (int)$sect2IntText;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 1.3.
 */
[

"text" => <<<EOD
Use your variable 'someIntText'. Use the function 'parseFloat' to find out the float representation of the text.  

Answer with your 'result'-variable.
EOD
,

"points" => 1,

"answer" => function () use ($sect2IntText) {

    return (float)$sect2IntText;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 1.4.
 */
[

"text" => <<<EOD
Use the method 'max', in Math, to find out the highest number in the serie: $serie1_imp.  

Answer with your 'result'-variable.
EOD
,

"points" => 1,

"answer" => function () use ($serie1) {

    return max($serie1);
},

],



/** -----------------------------------------------------------------------------------
 * A question, 1.5.
 */
[

"text" => <<<EOD
Use the Math property 'PI' to get the float value of 'Pi'. Round the result to 4 decimals.  

Answer with your 'result'-variable.
EOD
,

"points" => 1,

"answer" => function () {

    return round(pi(), 4);
},

],



/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Strings and built-in functions",

"intro" => <<<EOD
If you need a hint, take a look at:  
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String
EOD
,

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question, 2.1.
 */
[

"text" => <<<EOD
Create a variable called 'wordOne' and assign to it: '$sect4Word'. Add the number $sect4BigInt to the word and answer with the result in your 'result'-variable.
EOD
,

"points" => 1,

"answer" => function () use ($sect4Word, $sect4BigInt) {
    $sum = $sect4Word . $sect4BigInt;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 2.2.
 */
[

"text" => <<<EOD
Use 'charAt' on a string to return the character at a given index. Use it on the word '$sect5Word' and answer with the character at index $sect5SmallInt.
EOD
,

"points" => 1,

// måste fixa smallnr -1
"answer" => function () use ($sect5Word, $sect5SmallInt) {
    $result = $sect5Word{$sect5SmallInt};
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 2.3.
 */
[

"text" => <<<EOD
Use 'toUpperCase' to transform the string: '$sect5Sentence' to uppercase.  

Answer with the result.
EOD
,

"points" => 1,

"answer" => function () use ($sect5Sentence) {
    $result = strtoupper($sect5Sentence);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 2.4.
 */
[

"text" => <<<EOD
Use 'length' to find out the length of the string: '$sect5Word'.  

Answer with the result.
EOD
,

"points" => 1,

"answer" => function () use ($sect5Word) {
    $result = strlen($sect5Word);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question, 2.5.
 */
[

"text" => <<<EOD
Use 'substr' to extract the last three characters of the word: '$sect5Word'.  

Answer with the result.
EOD
,

"points" => 1,

"answer" => function () use ($sect5Word) {
    $result = substr($sect5Word, (strlen($sect5Word)-3));
    return $result;
},

],




/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Extra assignments",

"intro" => <<<EOD
These questions are worth 3 points each. Solve them for extra points.
EOD
,

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question, 3.1.
 */
[

"text" => <<<EOD
Create a Date object called 'myDate' and initiate it with: '$aDate'. Use the built-in function Date.getFullYear to get the year from your Date object.  

Answer with the result.
EOD
,

"points" => 3,

"answer" => function () use ($aYear) {

    return $aYear;
},

],


/** -----------------------------------------------------------------------------------
 * A question, 3.2.
 */
[

"text" => <<<EOD
Create a new Date object that is equal to 'myDate' plus 30 days.  

Use Date.getDate and answer with the day of the month.
EOD
,

"points" => 3,

"answer" => function () use ($aDate) {
    $myDate = new DateTime($aDate);
    $interval = new DateInterval("P30D");
    $myDate->add($interval);
    $res = $myDate->format('d');
    return (int)$res;
},

],



/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** -----------------------------------------------------------------------------------
 * Closing up all sections.
 */
] // EOF sections



/**
 * Closing up this lab.
 */
]; // EOF the enritre lab

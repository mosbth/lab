/**                                               
 * @preserve <?=$key?>
 */                                               
(function(dbwebb){
    "use strict";

    var ANSWER = null;

    console.log("Ready to begin.");


<?php 
$sectionId = 0;

?>
/** ======================================================================
 * <?=$title?> 
 *
 * <?=wordwrap(trim(strip_tags($intro), "\n"), 75, "\n * ", true)?> 
 *
 */

<?php 
foreach ($sections as $section) {
    $sectionId++;
    $questionId = 0;

?>
/** ----------------------------------------------------------------------
 * Section <?=$sectionId?>. <?=$section['title']?> 
 *
 * <?=wordwrap(trim(strip_tags($section['intro']), "\n"), 75, "\n * ", true)?> 
 *
 */

<?php 
    foreach ($section['questions'] as $question) {
        $questionId++;

?>
/**
 * Exercise <?="$sectionId.$questionId"?> 
 * 
 * <?=wordwrap(trim(strip_tags($question['text']), "\n"), 75, "\n * ", true)?> 
 *
 * Write your code below and put the answer into the variable ANSWER.
 */




ANSWER = "Replace this text with the variable holding the answer.";

// Is the answer as expected?
// When you get stuck - change false to true to get a hint.
dbwebb.assert("<?="$sectionId.$questionId"?>", ANSWER, false);


<?php 
    }
}
?>

    console.log(dbwebb.exitWithSummary());

}(window.dbwebb));

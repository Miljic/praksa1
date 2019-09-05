<?php
$ime_prezime = "Igor Miljic";
$godine = 34;
$hobi = array("pecanje", "voznja kros motora", "planinarenje");

echo"<h2>Zdravo ja sam ", $ime_prezime, "</h2>";
echo"<h3>Imam ", $godine, " godine</h3>";
echo "Moji hobiji su: " . $hobi[0] . ", " . $hobi[1] . " i " . $hobi[2] . ".";
echo "<br>";
echo "<br>";

if("0034" == $godine) echo "Godine jednake";
else echo "Godine nisu jednake";
echo "<br>";

if("0034" === (string)$godine) echo "Tip Godina jednak";
else echo "Tip Godina nije jednak";

echo "<br>";
echo "<br>";

if($ime_prezime == "Igor Miljic") echo "Ime dobro";
else  echo "Nije dobro"; 
echo "<br>";

if($ime_prezime === (int)$ime_prezime) echo "Tip imena dobar";
else echo "Nije dobar tip imena"; 
?>

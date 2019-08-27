<form action="igorov-kalkulator.php" method="GET">
 
  <input type="number" name="num1" >
  <select name="računskeoperacije">
    <option value="sabiranje">+</option>
    <option value="oduzimanje">-</option>
    <option value="djeljenje">/</option>
    <option value="množenje">*</option>
  </select>
  <input type="number" name="num2" >
  <input type="submit">
</form>
<?php 
 $num1 = $_GET["num1"];
 $num2 = $_GET["num2"];
 $računskeoperacije = $_GET["računskeoperacije"];

 if ($računskeoperacije == "sabiranje") {
    echo "Zdravo ovo je moj prvi kalkulator\n. Autor: Igor Miljić";
    echo  "</br>";
    $num3 = $num1 + $num2;
    echo "Rezultat je\n: " . $num1 . "\n+\n" . $num2 . "\n=\n" . $num3;
 }

 elseif ($računskeoperacije == "oduzimanje") {
     echo "</br>";
     $num3 = $num1 - $num2;
     echo "Rezultat je\n: " . $num1 . "\n-\n" . $num2 . "\n=\n" . $num3; 
 }

 elseif ($računskeoperacije == "djeljenje") {
     echo "</br>";
     $num3 = $num1 / $num2;
     echo "Rezultat je\n: " . $num1 . "\n/\n" . $num2 . "\n=\n" . $num3;
 }

 elseif ($računskeoperacije == "množenje") {
     echo "</br>";
     $num3 = $num1 * $num2;
     echo "Rezultat je\n:" . $num1 . "\n*\n" . $num2 . "\n=\n" . $num3;
 }




  
 

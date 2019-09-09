<?php
 echo "isset je funkcija za rad sa varijablama, ona utvrđuje da li je varijabla postavljena.";
     echo "<br>";

echo "count ($ request) - broji sve elemente niza";
     echo "<br>";

echo "!is_array($ request) - ova funkcija provjera da varijabla ($ request)  nije niz.";
     echo "<br>";

echo "empty - ispituje da li je element iz niza varijable prazan, prazan string, 0 ili ne postoji.";
     echo "<br>";

echo "in_array($ method, ['POST', 'PUT']) - ova fukcija pretražuje niz i traži u njemu vrijednosti parametara, u ovom slučaju da li POST i PUT postoje u nizu ($ method).";
     echo "<br>";

echo "error_log() - šalje poruku o greški na serverov error log ili u neku drugu datoteku.";
     echo "<br>"; 

echo "!file_exists($ dbFile) - provjerava da ($ dbFile) ne postoji kao datoteka ili direktorijum.";
     echo "<br>"; 

echo "print_r ($ input) - ispisuje informacije o varijabli ($ input).";
     echo "<br>"; 

echo "json_decode() - koristi se da dekodira JSON string i konvertuje kodiran string u PHP varijable.";
     echo "<br>"; 

echo "file_get_contents() - koristi se da očita datoteka kao string.";
     echo "<br>"; 

echo "file_put_contents() - provjerava da li postoji datoteka u kojoj hoće da ispiše string, ako postoji ispiše ga, ako ne postoji doda novu datoteku.";
     echo "<br>"; 

echo "json_encode() - vraća PHP objekat ili string prikazan kao JSON date vrijednosti.";
     echo "<br>"; 


echo "http_response_code() - dobija ili postavlja kod statusa HTTP odgovora.";
     echo "<br>"; 

echo "($ SERVER) - globalna varijabla u PHP koja sadrži informacije o zaglavljima, putanjama i lokacijama skripti, podatke o serveru, prikazuje koji klijent je poslao zahtjev.";
     echo "<br>"; 
echo "($ GET) - može služiti za prikupljanje podataka koji su poslati preko HTML forme metodom GET i za prikupljanje podataka poslatih u URL. Podaci poslati metodom GET vide se u URL, tako da nije bezbjedno slati password ili bilo kakve osjetljive informacije, imaju limit, može se poslati samo do 2048 karaktera."; 
     echo "<br>";  
echo "($ POST) - služi za prikupljanje podataka koji su poslati preko HTML forme metodom POST, podaci su nevidljivi, šalju se kroz HTTP header tako da bezbjednost podataka zavisi od HTTP protokola (korištenjem HTTPS možete se osigurati da su vaše informacije bezbjedne)
i nema ograničenja koliko podataka je moguće poslati na taj način.";
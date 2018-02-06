<?php


echo <<< EOD
Het gebruik van variabelen kan nu wel verwarrend worden, als we binnen de functie én binnen het hoofdscript gebruik willen maken van variabelen met dezelfde namen.

Variabelen zijn enkel geldig in het script dat uitgevoerd wordt; zodra er naar een deelfunctie gesprongen wordt, zijn deze variabelen ontoegankelijk. Het is ook zo dat de inhoud van een variabele altijd verloren gaat als er gesprongen wordt naar een volgende pagina. Om dit probleem op te lossen maken we gebruik van globale variabelen.

EOD;

echo "<br>";
echo "<br>";
echo "Een globale variabelen voorbeeld:";
echo "<br>";

$somevar = 15;
   
   function addit() {
      GLOBAL $somevar;
      $somevar++;
      
      print "Somevar is $somevar";
   }
   
   addit();


?>
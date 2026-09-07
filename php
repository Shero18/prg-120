<?php    /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  $fornavn=$_POST ["shero"]; 
  $etternavn=$_POST ["jamil"];   
	
  print ("God dag $fornavn $etternavn <br />");  
?>

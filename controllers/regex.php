<?php
// regex pour tous ce qui est nom prenom... 
$regexText = '/^[A-Za-z-éèêëàâäôöûüç\' ]+$/';

// regex pour le code postale 
$regexPostal = '/^[0-9]{5}$/';


// regex pour l'adresse postale 
$regexAddress = '/^[0-9]{1,3}(?:(?:[,. ]){1}[-a-zA-Zàâäéèêëïîôöùûüç]+)+$/';

// regex pour email 
$regexEmail = '/^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+$/';


// regex pour telephone 
$regexPhone = '/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/';


?>

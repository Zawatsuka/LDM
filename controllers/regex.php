<?php
// regex pour tous ce qui est nom prenom... 
define('regexText','/^[A-Za-z-éèêëàâäôöûüç\' ]+$/');

// regex pour le code postale 
define('regexPostal','/^((6553[0-5])|(655[0-2][0-9])|(65[0-5][0-9]{2})|(6[0-4][0-9]{3})|([1-5][0-9]{4})|([0-5]{0,5})|([0-9]{1,5}))$/');

// regex pour l'adresse postale 
define('regexAddress','/^[0-9]{1,3}(?:(?:[,. ]){1}[-a-zA-Zàâäéèêëïîôöùûüç]+)+$/');

// regex pour email 
define('regexEmail','/^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+$/');

// regex pour telephone 
define('regexPhone' , '/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/');



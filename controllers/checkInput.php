<?php
$errorsArray = array();

//On ne controle que s'il y a des données envoyées 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // firstname
    // On verifie l'existance et on nettoie
    $firstname = isset($_POST['firstname']) && !empty($_POST['firstname']) ? trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) : '';
    $lastname = isset($_POST['lastname']) && !empty($_POST['lastname']) ? trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) : '';

    function validateData($data, $sanit)
    {
        if (isset($data) && !empty($data) && isset($sanit) && !empty($sanit)) {
            switch ($sanit) {
                case 'email':
                    $sanit = 'FILTER_SANITIZE_EMAIL';
                    break;
                case 'fullNumber':
                    $sanit = 'FILTER_SANITIZE_NUMBER_INT';
                    break;
                case 'phone':
                    $sanit = 'FILTER_SANITIZE_NUMBER_FLOAT';
                    break;
                case 'string':
                default:
                    $sanit = 'FILTER_SANITIZE_STRING';
            }
            $validData = trim(filter_input(INPUT_POST, $data, $sanit, FILTER_FLAG_NO_ENCODE_QUOTES));
        }
    }
    //On test si le champ n'est pas vide
    if (!empty($firstname)) {
        // On test la valeur
        $testRegex = preg_match($regexText, $firstname);

        if ($testRegex == false) {
            $errorsArray['firstname_error'] = 'Le prenom n\'est pas valide';
        }
    } else {
        $errorsArray['firstname_error'] = 'Le champ n\'est pas rempli';
    }
}

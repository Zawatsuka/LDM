<?php
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
            return $validData;
        } else {
            echo "c'est pas bon !";
        }
    }
    function testData($data , $regex){
        if (!empty($data)) {
            // On test la valeur
            $testRegex = preg_match($regex, $data);

            if ($testRegex == false) {
                $errorsArray['error'] = 'ce n\'est pas valide';
            }
        } else {
            $errorsArray['error'] = 'Le champ n\'est pas rempli';
        }
    }

    $errorsArray = array();

    //On ne controle que s'il y a des données envoyées 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // firstname
        // On verifie l'existance et on nettoie
        $firstname = isset($_POST['firstname']) && !empty($_POST['firstname']) ? validateData($_POST['firstname'] , 'string') : '';
        $lastname = isset($_POST['lastname']) && !empty($_POST['lastname']) ? validateData($_POST['lastname'] , 'string') : '';
        $postalPass = isset($_POST['postalPass']) && !empty($_POST['postalPass']) ? validateData($_POST['postalPass'] , 'fullNumber') : '';
        $city = isset($_POST['city']) && !empty($_POST['city']) ? validateData($_POST['city'] , 'string') : '';
        $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? validateData($_POST['phone'] , 'phone') : '';
        $mail = isset($_POST['mail']) && !empty($_POST['mail']) ? validateData($_POST['mail'] , 'email') : '';
        $address = isset($_POST['address']) && !empty($_POST['address']) ? validateData($_POST['address'] , 'string') : '';


        //On test si le champ n'est pas vide
        testData($firstname , $regexText);
        testData($lastname, $regexText);
        testData($postalPass , $regexPostal);
        testData($city , $regexText);
        testData($phone , $regexPhone);
        testData($mail , $regexEmail);
        testData($address , $regexText);
    }

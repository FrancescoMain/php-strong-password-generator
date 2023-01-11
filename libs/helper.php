<?php

        $pswL = $_GET['pswL'] ?? false;
        $filterNumber = $_GET["number"] ?? false;
        $filterLettere = $_GET["lettere"] ?? false;
        function randomPassword($pswL,$filterNumber, $filterLettere) {
            $alphabet = '';
            if ($filterNumber) {
            $alphabet .= '0123456789';
            
            } 
            if ($filterLettere){
                $alphabet .= 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ';
                
            }
            
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < $pswL; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); 

        }
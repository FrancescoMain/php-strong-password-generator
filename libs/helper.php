<?php

        $pswL = $_GET['pswL'] ?? false;
        $filterNumber = $_GET["number"] ?? false;
        $filterLettere = $_GET["lettere"] ?? false;
        $filterSymbol = $_GET["symbol"] ?? false;
        function randomPassword($pswL,$filterNumber, $filterLettere,$filterSymbol) {
            $alphabet = '';
            if ($filterNumber) {
            $alphabet .= '0123456789';
            
            } 
            if ($filterLettere){
                $alphabet .= 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ';
                
            }
            if ($filterSymbol){
                $alphabet .= '.,;:-_!"$%&/()[]';
                
            }
            
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < $pswL; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); 

        }
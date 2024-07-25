<?php

class Csrf
{
    public function generateCSRF():string
    {
        $token = bin2hex(random_bytes(16));
        // Save the token in the user Session.
        $_SESSION['tokenCSRF'] = $token;
        return $token;
    }

    public function checkCSRF():bool
    {
        if(empty($_SESSION['tokenCSRF']) || empty($_POST['csrf'])){
            return false;
        }

        if($_POST['csrf']!=$_SESSION['tokenCSRF']){
            return false;
        }  
        
        return true;
    }
}
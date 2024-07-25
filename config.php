<?php

session_start();

// instanzio la classe Csrf (che genera e verifica il token Csrf)
include_once 'Csrf.php';
$csrf=new Csrf();

// se è una post: verifico sempre il token
if($_SERVER['REQUEST_METHOD']=='POST'){
    // se non veriificato rispondo con un ko e blocco qui
    if($csrf->checkCSRF()!==true){
        $reply="crsf non valido";
        echo $reply;
        exit;
    }    
    // se ok procedo e sarà il file chiamato a rispondere
}
else {
    // altrimenti genera il token
    $token=$csrf->generateCSRF();
}
Esempio di come implementare, in un sito in php, un token CSRF

Per progettere il nostro sito da attacchi di tipo CSRF, occorre implementare un token, 
cioè un valore generato ad ogni apertura delle nostre pagina web: 
quando dalla nostra pagina, che identifichiamo con la lettera A, 
faremo una chiamata di tipo POST o GET ad un'altra nostra pagina/script, che identifichiamo con la lettera B, 
dobbiamo portarci dietro questo token e verificarlo nella pagina B. 
Se il token è verificato nella pagina B, la chiamata/navigazione procede, altrimenti viene bloccata.

L'obiettivo di questo script è implementare il Token CSRF nel modo più agevole possibile,
limitando l'intervento nel nostro codice, 
con una soluzione quasi indolore che ci consenta di agire solo su due file normalmente già presenti 
e che sono inclusi in tutte le pagine/script del nostro sito: 
il file config.php (dove inseriamo le configurazioni, costanti, variabili usate da tutto il sito) 
e un javascript usato da tutto il sito. 

In questo modo, agendo solo su due file, andiamo ad implementare un sistema che consente di prevenire questa tipologia di attacchi.

Per maggiori info, leggi l'articolo
https://www.webarea.it/howto/php/come-prevenire-attacchi-csrf-in-php_247


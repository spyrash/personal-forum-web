<?php
//connect.php
$dbconn = pg_connect("host=localhost port=localhostport dbname=dbname user=postgres password=password") 
 or die('Errore di connessione: ' . pg_last_error());
?>
<!-- mettere in user il nome utente dell'utente che accede al db, password dell'utente e dbname il nome del database -->

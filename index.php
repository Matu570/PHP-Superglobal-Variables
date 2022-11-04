<?php
// Superglobal variables

// Server variables:

//To get the ip address of our server:
echo '<h1>'.$_SERVER['SERVER_ADDR'].'</h1>';

//To get the name of our server:
echo '<h2>'.$_SERVER['SERVER_NAME'].'</h2>';

//To get the name of our server:
echo '<h2>'.$_SERVER['SERVER_SOFTWARE'].'</h2>';

//To get the client browser:
echo '<h2>'.$_SERVER['HTTP_USER_AGENT'].'</h2>';

//To get the client ip address:
echo '<h2>'.$_SERVER['REMOTE_ADDR'].'</h2>';
?>